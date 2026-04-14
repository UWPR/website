"""
Convert UWPR PHP pages to Jekyll Markdown.

Usage:
    python _scripts/convert_php_to_md.py                    # dry run (preview only)
    python _scripts/convert_php_to_md.py --write            # write .md files to _pages/
    python _scripts/convert_php_to_md.py --write --file contact.php  # convert one file

Requires: pandoc installed and on PATH
"""

import os
import re
import subprocess
import sys
import html
from pathlib import Path

REPO_ROOT = Path(__file__).resolve().parent.parent
PAGES_DIR = REPO_ROOT / "_pages"

# Files to skip
SKIP_FILES = {
    "__header.php",
    "__header2.php",
    "__footer.php",
    "_googlesearch.php",
    "template-left-sidebar.php",
    "template-no-sidebar.php",
    "template-right-sidebar.php",
}

# Filename patterns to skip (old versions, templates)
SKIP_PATTERNS = [
    re.compile(r"Old\.php$", re.IGNORECASE),
    re.compile(r"_old\.php$", re.IGNORECASE),
    re.compile(r"template-.*\.php$", re.IGNORECASE),
]

# Pages that already have been converted (relative paths from repo root)
ALREADY_CONVERTED = {
    "contact.php",
    "directions.php",
    "index.php",
}


def should_skip(filepath: Path) -> str | None:
    """Return reason to skip, or None if should convert."""
    rel_path = str(filepath.relative_to(REPO_ROOT)).replace("\\", "/")
    name = filepath.name

    if name in SKIP_FILES:
        return f"skip list ({name})"

    if rel_path in ALREADY_CONVERTED:
        return "already converted"

    for pattern in SKIP_PATTERNS:
        if pattern.search(name):
            return f"matches skip pattern ({pattern.pattern})"

    return None


def extract_content(php_source: str) -> str:
    """Strip PHP includes and extract the HTML content."""
    content = php_source

    # Remove PHP include lines for header and footer
    content = re.sub(
        r'<\?php\s+include\s*\(\s*["\']\.{0,2}/?__header2?\.php["\']\s*\)\s*;?\s*\?>',
        "", content, flags=re.IGNORECASE
    )
    content = re.sub(
        r'<\?php\s+include\s*\(\s*["\']\.{0,2}/?__footer\.php["\']\s*\)\s*;?\s*\?>',
        "", content, flags=re.IGNORECASE
    )

    # Remove any other PHP include for _googlesearch
    content = re.sub(
        r'<\?php\s+include\s*\(\s*["\']_googlesearch\.php["\']\s*\)\s*;?\s*\?>',
        "", content, flags=re.IGNORECASE
    )

    return content.strip()


def extract_title(html_content: str) -> str | None:
    """Extract page title from <h1> tag."""
    # Try: <header class="major"><h1>Title</h1>
    match = re.search(r'<h1[^>]*>(.*?)</h1>', html_content, re.IGNORECASE | re.DOTALL)
    if match:
        title = match.group(1)
        # Strip any inner HTML tags
        title = re.sub(r'<[^>]+>', '', title)
        # Decode HTML entities
        title = html.unescape(title)
        return title.strip()
    return None


def has_sidebar(html_content: str) -> bool:
    """Check if the page has a sidebar div."""
    return 'id="sidebar"' in html_content


def strip_outer_wrappers(html_content: str) -> str:
    """Remove common outer wrapper divs but keep the inner content.

    This is a best-effort cleanup. We remove known wrapper patterns
    and let pandoc handle the rest.
    """
    content = html_content

    # Remove HTML comments (<!-- Page -->, <!-- /Page -->, etc.)
    content = re.sub(r'<!--.*?-->', '', content, flags=re.DOTALL)

    # Remove inline <style> blocks
    content = re.sub(r'<style[^>]*>.*?</style>', '', content, flags=re.DOTALL | re.IGNORECASE)

    # Remove outer wrapper divs (opening tags)
    content = re.sub(r'<div\s+id="page"[^>]*>', '', content, flags=re.IGNORECASE)
    content = re.sub(r'<div\s+id="content"[^>]*>', '', content, flags=re.IGNORECASE)
    content = re.sub(r'<div\s+id="box3"[^>]*>', '', content, flags=re.IGNORECASE)
    content = re.sub(r'<div\s+class="content">', '', content, flags=re.IGNORECASE)
    content = re.sub(r'<div\s+class="major">', '', content, flags=re.IGNORECASE)

    # Remove <section> and <header class="major"> wrappers
    content = re.sub(r'</?section>', '', content, flags=re.IGNORECASE)
    content = re.sub(r'<header\s+class="major">', '', content, flags=re.IGNORECASE)
    content = re.sub(r'</header>', '', content, flags=re.IGNORECASE)

    # Remove the title h1 (we put it in front matter)
    content = re.sub(r'<h1[^>]*>.*?</h1>', '', content, flags=re.IGNORECASE | re.DOTALL)
    # Handle unclosed h1 tags like <h1>Title<h1>
    content = re.sub(r'<h1[^>]*>[^<]*<h1>', '', content, flags=re.IGNORECASE)

    # Convert <span class="byline">...</span> (subtitle under title) to an
    # italic paragraph so it appears below the page title.
    content = re.sub(
        r'<span\s+class="byline">(.*?)</span>',
        r'<p><em>\1</em></p>',
        content,
        flags=re.DOTALL | re.IGNORECASE,
    )

    # Convert background-image divs to img tags where possible
    def bg_image_to_img(match):
        style = match.group(1)
        url_match = re.search(r"url\(['\"]?([^'\")\s]+)['\"]?\)", style)
        if url_match:
            src = url_match.group(1)
            # Preserve relative paths as-is so html_to_markdown's rewrite_link
            # can resolve them against the source file's directory. Absolute
            # paths are passed through unchanged.
            return f'<img src="{src}" alt="">'
        return ''
    content = re.sub(
        r'<div\s+style="([^"]*background-image[^"]*)"[^>]*>\s*</div>',
        bg_image_to_img, content, flags=re.IGNORECASE
    )

    return content


def extract_main_content(html_content: str) -> str:
    """For pages with sidebar, extract only the main content div."""
    # Look for <div id="content" ...> ... </div> followed by <div id="sidebar"
    match = re.search(
        r'<div\s+id="content"[^>]*>(.*?)</div>\s*(?=<div\s+id="sidebar")',
        html_content, re.DOTALL | re.IGNORECASE
    )
    if match:
        return match.group(1)
    return html_content


def fix_malformed_tables(html_content: str) -> str:
    """Fix malformed table HTML in legacy PHP pages.

    Pattern seen (e.g. astral.php): two consecutive <thead> tags with no
    </thead> between them. The first thead is a decorative title row (a
    <strong>title</strong> in the first cell, empty cells after), and the
    second thead holds the real column headers. Pandoc cannot parse this as
    a table — the whole thing collapses to a paragraph-per-cell rendering.

    Fix: lift the decorative title out of the table as a preceding
    <p><strong>...</strong></p>, drop the first thead entirely, keep the
    second as the actual column-header thead.
    """
    def lift_title_and_drop_first_thead(match):
        table_open = match.group(1)          # "<table ...>"
        first_thead_body = match.group(2)    # inside first <thead>, no </thead>
        second_thead_body = match.group(3)   # inside second <thead>, no </thead>

        # Extract visible text of first cell (strip tags/whitespace)
        title_match = re.search(
            r'<th[^>]*>(.*?)</th>',
            first_thead_body,
            flags=re.DOTALL | re.IGNORECASE,
        )
        if title_match:
            title_html = title_match.group(1).strip()
            # Unwrap <strong>..</strong> — we'll re-wrap below
            title_text = re.sub(
                r'</?strong>', '', title_html, flags=re.IGNORECASE
            ).strip()
        else:
            title_text = ""

        caption = f"<p><strong>{title_text}</strong></p>\n" if title_text else ""
        return (
            f"{caption}{table_open}\n"
            f"<thead>{second_thead_body}</tr></thead>"
        )

    # Match: <table...> optional whitespace <thead>NO_CLOSE<thead>NO_CLOSE_UNTIL_<tbody>
    pattern = (
        r'(<table[^>]*>)\s*'
        r'<thead>((?:(?!</?thead>).)*?)'
        r'<thead>((?:(?!</?thead>)(?!<tbody).)*?)'
        r'(?=<tbody)'
    )
    html_content = re.sub(
        pattern,
        lift_title_and_drop_first_thead,
        html_content,
        flags=re.DOTALL | re.IGNORECASE,
    )

    # Fallback: any remaining unclosed <thead> directly before <tbody>
    html_content = re.sub(
        r'(<thead>(?:(?!</thead>).)*?)(<tbody)',
        r'\1</tr></thead>\n\2',
        html_content,
        flags=re.DOTALL | re.IGNORECASE,
    )

    # Close unclosed <tr> before </tbody>: if the last </td> in tbody isn't
    # followed by </tr> before </tbody>, insert one.
    def close_tr_before_tbody_end(match):
        body = match.group(1)
        if re.search(r'</td>\s*$', body, flags=re.IGNORECASE):
            return body + '</tr>\n</tbody>'
        return match.group(0)

    html_content = re.sub(
        r'(<tbody>(?:(?!</tbody>).)*?)</tbody>',
        close_tr_before_tbody_end,
        html_content,
        flags=re.DOTALL | re.IGNORECASE,
    )
    return html_content


def clean_orphaned_tags(html_content: str) -> str:
    """Remove orphaned closing tags left after stripping wrappers."""
    # Fix malformed tables before anything else
    html_content = fix_malformed_tables(html_content)
    # Count opening vs closing divs and remove excess closing divs from the end
    content = html_content.rstrip()
    while content.rstrip().endswith('</div>'):
        open_count = len(re.findall(r'<div[\s>]', content, re.IGNORECASE))
        close_count = len(re.findall(r'</div>', content, re.IGNORECASE))
        if close_count > open_count:
            # Remove the last </div>
            idx = content.rfind('</div>')
            content = content[:idx] + content[idx + 6:]
        else:
            break
    return content


def html_to_markdown(html_content: str, source_dir: str = "/") -> str:
    """Convert HTML to Markdown using pandoc.

    `source_dir` is the directory path of the source PHP file, used to resolve
    relative links (e.g. `corefacilities/` from `collab.php` -> `/corefacilities/`).
    Must start and end with `/`.
    """
    # Clean orphaned tags before conversion
    html_content = clean_orphaned_tags(html_content)

    result = subprocess.run(
        ["pandoc", "-f", "html",
         "-t", "markdown-simple_tables-multiline_tables-grid_tables+pipe_tables",
         "--wrap=none", "--markdown-headings=atx"],
        input=html_content,
        capture_output=True,
        text=True,
        encoding="utf-8",
    )
    if result.returncode != 0:
        raise RuntimeError(f"pandoc failed: {result.stderr}")

    md = result.stdout

    # Clean up pandoc artifacts
    # Remove fenced div markers (:::)
    md = re.sub(r'^:{3,}.*$', '', md, flags=re.MULTILINE)

    # Remove {target="new"} and similar link attributes
    md = re.sub(r'\{target="[^"]*"\}', '', md)

    # Remove {style="..."} span attributes
    md = re.sub(r'\{style="[^"]*"\}', '', md)

    # Remove pandoc attribute blocks like {.image .featured} or {#id .class}
    # These are CSS-class hints pandoc emits to preserve HTML classes; we don't
    # carry theme-specific classes over from the old site.
    md = re.sub(r'\{[.#][^}]*\}', '', md)

    # Remove "Back to Top" links (anchor to old wrapper div)
    md = re.sub(r'\[Back to Top\]\(#page\)\s*\\?\s*', '', md)

    # Fix escaped quotes
    md = md.replace('\\"', '"')
    md = md.replace("\\'", "'")

    # Rewrite links:
    #   - Internal .php links -> clean URLs
    #   - In-repo absolute asset paths (/images/, /docs/, /css/, /js/) -> {{ site.baseurl }}-prefixed
    #   - Excluded large-file paths (.zip, /dist/, /lorikeet/, /protocols06/18MixPublicDatasets/)
    #     -> absolute URLs on the UW server (https://proteomicsresource.washington.edu/...)
    #   - Force HTTPS on any existing http://proteomicsresource.washington.edu/... URLs
    UW_HOST = "https://proteomicsresource.washington.edu"
    IN_REPO_PREFIXES = ("/images/", "/docs/", "/css/", "/js/")
    UW_HOSTED_PREFIXES = (
        "/dist/",
        "/lorikeet/",
        "/protocols06/18MixPublicDatasets/",
        "/pr/",  # login / cost-center / resources webapp hosted on UW server
    )

    import posixpath

    def rewrite_link(match):
        text = match.group(1)
        url = match.group(2)

        # Normalize same-site absolute URLs (http + https variants): strip
        # host so they get processed as internal links below (.php -> clean
        # URL, baseurl prefix, UW-hosted redirects, etc).
        for prefix in (
            "http://proteomicsresource.washington.edu",
            "https://proteomicsresource.washington.edu",
        ):
            if url.startswith(prefix):
                url = url[len(prefix):] or "/"
                break

        # Skip other external URLs
        if url.startswith(("http://", "https://", "mailto:", "#", "ftp://")):
            return match.group(0)

        # Split off anchor
        anchor = ""
        bare_url = url
        if "#" in bare_url:
            bare_url, anchor = bare_url.split("#", 1)
            anchor = "#" + anchor

        # Resolve relative URLs against the source file's directory so they
        # become absolute paths (the old PHP site relied on relative links like
        # `corefacilities/` or `../collab.php` that resolved against the
        # filesystem; Jekyll permalinks change the URL shape, so we make these
        # absolute to avoid breakage).
        if bare_url and not bare_url.startswith("/"):
            resolved = posixpath.normpath(posixpath.join(source_dir, bare_url))
            # Preserve trailing slash from the original
            if bare_url.endswith("/") and not resolved.endswith("/"):
                resolved = resolved + "/"
            # Ensure leading slash
            if not resolved.startswith("/"):
                resolved = "/" + resolved
            bare_url = resolved

        # Rewrite .php -> clean URLs
        if bare_url.endswith(".php"):
            bare_url = bare_url[:-4]
            if bare_url.endswith("/index"):
                bare_url = bare_url[:-5]
            elif bare_url == "index":
                bare_url = ""
            if bare_url and not bare_url.endswith("/"):
                bare_url = bare_url + "/"
            # Prefix absolute paths with baseurl so they work under /website
            if bare_url.startswith("/"):
                bare_url = "{{ site.baseurl }}" + bare_url
            return f"[{text}]({bare_url}{anchor})"

        # UW-hosted excluded paths -> absolute UW URL
        if any(bare_url.startswith(p) for p in UW_HOSTED_PREFIXES):
            return f"[{text}]({UW_HOST}{bare_url}{anchor})"

        # .zip files anywhere -> UW server (absolute paths only)
        if bare_url.endswith(".zip") and bare_url.startswith("/"):
            return f"[{text}]({UW_HOST}{bare_url}{anchor})"

        # In-repo absolute asset paths -> baseurl-prefixed
        if any(bare_url.startswith(p) for p in IN_REPO_PREFIXES):
            return f"[{text}]({{{{ site.baseurl }}}}{bare_url}{anchor})"

        # Any other absolute path (e.g. /protocols01/) = internal page link.
        # Prefix with baseurl so it resolves under /website in dev/preview.
        if bare_url.startswith("/"):
            return f"[{text}]({{{{ site.baseurl }}}}{bare_url}{anchor})"

        return match.group(0)

    md = re.sub(r'\[([^\]]*)\]\(([^)]+)\)', rewrite_link, md)

    # Remove stray backslashes on otherwise empty lines (pandoc emits `  \` for
    # standalone <br> tags, often between list-item content)
    md = re.sub(r'^[ \t]*\\[ \t]*$', '', md, flags=re.MULTILINE)

    # Strip trailing `\` (pandoc's hard-linebreak syntax) from end of lines.
    # The source HTML uses <br> liberally but the Markdown output is cleaner
    # relying on blank-line paragraph breaks. Kramdown renders stray trailing
    # `\` at the end of list items as a literal backslash character.
    md = re.sub(r'\\$', '', md, flags=re.MULTILINE)

    # Remove excessive blank lines
    md = re.sub(r'\n{3,}', '\n\n', md)

    return md


def compute_permalink(filepath: Path) -> str:
    """Compute the permalink from the PHP file path.

    Examples:
        contact.php -> /contact/
        instruments/ltq.php -> /instruments/ltq/
        protocols06/index.php -> /protocols06/
    """
    rel = filepath.relative_to(REPO_ROOT)
    url_path = str(rel).replace("\\", "/")

    # Strip .php extension
    if url_path.endswith(".php"):
        url_path = url_path[:-4]

    # index becomes directory root
    if url_path.endswith("/index"):
        url_path = url_path[:-5]
    elif url_path == "index":
        url_path = ""

    # Ensure leading slash, trailing slash
    url_path = "/" + url_path
    if not url_path.endswith("/"):
        url_path = url_path + "/"

    return url_path


def compute_output_path(filepath: Path) -> Path:
    """Compute the output .md file path in _pages/.

    Examples:
        contact.php -> _pages/contact.md
        instruments/ltq.php -> _pages/instruments/ltq.md
    """
    rel = filepath.relative_to(REPO_ROOT)
    md_name = rel.with_suffix(".md")
    return PAGES_DIR / md_name


def generate_front_matter(title: str, permalink: str, sidebar: bool) -> str:
    """Generate Jekyll front matter."""
    lines = ["---"]
    # Escape quotes in title
    safe_title = title.replace('"', '\\"')
    lines.append(f'title: "{safe_title}"')
    lines.append(f'permalink: {permalink}')
    if sidebar:
        lines.append("# TODO: define sidebar nav in _data/navigation.yml")
        lines.append("# sidebar:")
        lines.append('#   nav: "SIDEBAR_NAME"')
    lines.append("---")
    return "\n".join(lines)


def convert_file(filepath: Path, write: bool = False) -> dict:
    """Convert a single PHP file to Jekyll Markdown.

    Returns a dict with conversion details.
    """
    result = {
        "file": str(filepath.relative_to(REPO_ROOT)),
        "status": None,
        "title": None,
        "permalink": None,
        "sidebar": False,
        "output": None,
        "error": None,
    }

    # Check if should skip
    reason = should_skip(filepath)
    if reason:
        result["status"] = f"skipped: {reason}"
        return result

    # Read PHP source
    try:
        php_source = filepath.read_text(encoding="utf-8", errors="replace")
    except Exception as e:
        result["status"] = "error"
        result["error"] = str(e)
        return result

    # Check for PHP logic beyond includes
    remaining_php = re.sub(
        r'<\?php\s+include\s*\([^)]+\)\s*;?\s*\?>',
        '', php_source
    )
    if '<?php' in remaining_php or '<?' in remaining_php.replace('<?xml', ''):
        has_php_logic = True
    else:
        has_php_logic = False

    # Extract content
    content_html = extract_content(php_source)
    sidebar = has_sidebar(content_html)
    title = extract_title(content_html) or filepath.stem.replace("_", " ").title()

    # For sidebar pages, extract main content only
    if sidebar:
        main_html = extract_main_content(content_html)
    else:
        main_html = content_html

    # Strip wrappers
    main_html = strip_outer_wrappers(main_html)

    # Convert to markdown. Compute source_dir for relative link resolution.
    rel_parent = filepath.relative_to(REPO_ROOT).parent
    source_dir = "/" + str(rel_parent).replace("\\", "/").rstrip(".") + "/"
    source_dir = source_dir.replace("//", "/")
    try:
        markdown = html_to_markdown(main_html, source_dir=source_dir)
    except RuntimeError as e:
        result["status"] = "error"
        result["error"] = str(e)
        return result

    # Clean up markdown
    # Remove excessive blank lines
    markdown = re.sub(r'\n{3,}', '\n\n', markdown)
    markdown = markdown.strip()

    # Generate front matter
    permalink = compute_permalink(filepath)
    front_matter = generate_front_matter(title, permalink, sidebar)

    # Add PHP logic warning if needed
    warning = ""
    if has_php_logic:
        warning = "\n\n<!-- WARNING: This page contained PHP logic beyond includes. Manual review required. -->\n"

    full_content = front_matter + "\n\n" + markdown + warning + "\n"

    result["title"] = title
    result["permalink"] = permalink
    result["sidebar"] = sidebar
    result["status"] = "converted"

    # Write or preview
    output_path = compute_output_path(filepath)
    result["output"] = str(output_path.relative_to(REPO_ROOT))

    if write:
        output_path.parent.mkdir(parents=True, exist_ok=True)
        output_path.write_text(full_content, encoding="utf-8")
        result["status"] = "written"

    return result


def find_php_files(root: Path) -> list[Path]:
    """Find all PHP files to convert."""
    php_files = []
    for path in sorted(root.rglob("*.php")):
        # Skip files in special directories
        rel = path.relative_to(root)
        parts = rel.parts
        if any(p.startswith("_") for p in parts[:-1]):
            continue  # Skip files in _pages, _scripts, etc.
        if any(p.startswith(".") for p in parts):
            continue  # Skip hidden directories
        php_files.append(path)
    return php_files


def main():
    write = "--write" in sys.argv
    single_file = None

    if "--file" in sys.argv:
        idx = sys.argv.index("--file")
        if idx + 1 < len(sys.argv):
            single_file = sys.argv[idx + 1]

    if not write:
        print("=" * 70)
        print("DRY RUN - no files will be written. Use --write to write files.")
        print("=" * 70)
        print()

    php_files = find_php_files(REPO_ROOT)

    if single_file:
        php_files = [f for f in php_files if single_file in str(f)]
        if not php_files:
            print(f"No PHP files matching '{single_file}' found.")
            sys.exit(1)

    stats = {"converted": 0, "skipped": 0, "error": 0, "written": 0, "sidebar": 0, "php_logic": 0}

    for filepath in php_files:
        result = convert_file(filepath, write=write)

        status = result["status"]
        rel_path = result["file"]

        if status and status.startswith("skipped"):
            stats["skipped"] += 1
            print(f"  SKIP  {rel_path:50s} ({status})")
        elif status == "error":
            stats["error"] += 1
            print(f"  ERR   {rel_path:50s} ({result['error']})")
        elif status in ("converted", "written"):
            if status == "written":
                stats["written"] += 1
            else:
                stats["converted"] += 1

            sidebar_flag = " [SIDEBAR]" if result["sidebar"] else ""
            print(f"  OK    {rel_path:50s} -> {result['output']}{sidebar_flag}")

            if result["sidebar"]:
                stats["sidebar"] += 1

    print()
    print("=" * 70)
    print(f"Summary:")
    if write:
        print(f"  Written:   {stats['written']}")
    else:
        print(f"  Would convert: {stats['converted']}")
    print(f"  Skipped:   {stats['skipped']}")
    print(f"  Errors:    {stats['error']}")
    print(f"  With sidebar: {stats['sidebar']}")
    print()
    if not write:
        print("Run with --write to write the .md files.")


if __name__ == "__main__":
    main()
