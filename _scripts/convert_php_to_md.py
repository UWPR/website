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

    # Strip HTML comments early. Several PHP pages have comments like
    # "<!-- Sidebar -->" between the content </div> and <div id="sidebar">,
    # which breaks extract_main_content's lookahead and causes sidebar
    # content to leak into the main-content extraction.
    content = re.sub(r'<!--.*?-->', '', content, flags=re.DOTALL)

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

    # Remove <section> and <header class="major"> wrappers.
    # The original template also uses `<section class="6u">` with no closing
    # `</section>`, so allow attributes on the opening tag.
    content = re.sub(r'<section[^>]*>', '', content, flags=re.IGNORECASE)
    content = re.sub(r'</section>', '', content, flags=re.IGNORECASE)
    content = re.sub(r'<header\s+class="major">', '', content, flags=re.IGNORECASE)
    content = re.sub(r'</header>', '', content, flags=re.IGNORECASE)

    # Lift `<strong>Label</strong>` that sits as a direct child of <ul>
    # (before any <li>) out into a preceding paragraph. Several instrument
    # pages (e.g. tsqvantage.php's Specifications) use the pattern
    # `<ul><strong>Mass range</strong><li>m/z 10 ...</li></ul>` — the
    # label isn't inside an <li>, so in the browser it renders as
    # un-bulleted bold text above the list. Pandoc instead treats it as
    # an implicit list item and we get "• Mass range" as a bullet.
    # Rewriting it to `<p><strong>Label</strong></p><ul><li>...</li></ul>`
    # preserves the visual grouping.
    content = re.sub(
        r'<ul[^>]*>\s*<strong>([^<]+)</strong>\s*(?=<li[\s>])',
        r'<p><strong>\1</strong></p><ul>',
        content,
        flags=re.IGNORECASE,
    )

    # Same class of bug: `<h2>Heading</h2>` (or h3/h4) that sits as a
    # direct child of <ul>, before the first <li>. tsqvantage.php has
    # `<ul><h2 id="software">Instrument control software</h2><li>see
    # spreadsheet</li></ul>`. Pandoc treats the heading as an implicit
    # list item, so the heading renders as a bullet. Lift it out.
    content = re.sub(
        r'<ul[^>]*>\s*(<h[1-6][^>]*>.*?</h[1-6]>)\s*',
        r'\1<ul>',
        content,
        flags=re.IGNORECASE | re.DOTALL,
    )

    # Merge adjacent <ul> blocks. The original PHP wrapped link groups in
    # `<section class="6u">` blocks to display them in side-by-side columns;
    # after section stripping, two <ul>s end up separated by only whitespace,
    # which pandoc renders as two distinct lists with a visible gap. Fuse
    # them into a single <ul> so the output reads as one flat list.
    #
    # Only merge when the second <ul> opens directly with an <li> — this
    # skips cases where the author put a <strong>label</strong> before the
    # first <li> as a pseudo-heading (see instruments/tsqvantage.php's
    # "Specifications" section). Merging those would drop the labels into
    # the list stream and lose the visual grouping.
    content = re.sub(
        r'</ul>\s*<ul[^>]*>\s*(?=<li[\s>])',
        '',
        content,
        flags=re.IGNORECASE,
    )

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

    # Strip legacy hand-rolled "On this page" tables of contents. These were
    # manually maintained in 6 sidebar pages (protocols01-05/index.php,
    # protocols03/isotopic_labeling.php) as an <h2>On this page</h2> header
    # followed by <ul> of anchor links. MM's auto-TOC (toc: true) replaces
    # them, so keeping these in the converted content produces a duplicate
    # TOC at the bottom of the page.
    #
    # Runs AFTER <section> / <header class="major"> stripping above, so the
    # <h2> and its following <ul>s are adjacent in the DOM (possibly with
    # multiple <ul>s when the original split links into columns).
    content = re.sub(
        r'<h2[^>]*>\s*On this page\s*</h2>\s*(?:<ul[^>]*>.*?</ul>\s*)+',
        '',
        content,
        flags=re.IGNORECASE | re.DOTALL,
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
    """For pages with sidebar, extract the main content plus any useful
    sidebar content appended.

    Main content is <div id="content">...</div>. Sidebar is <div id="sidebar">.
    We drop the hand-rolled "On this page" <section> from the sidebar (MM's
    auto-TOC via `toc: true` replaces it) but keep everything else — typically
    "UWPR links and downloads" and other related-links sections that users
    still want on the page, just below the main content instead of in a
    right rail.
    """
    main_match = re.search(
        r'<div\s+id="content"[^>]*>(.*?)</div>\s*(?=<div\s+id="sidebar")',
        html_content, re.DOTALL | re.IGNORECASE
    )
    if not main_match:
        return html_content

    main_html = main_match.group(1)

    # Pull sidebar <div id="sidebar" ...> ... </div>. Greedy-balanced parsing
    # is non-trivial with regex because the sidebar contains nested <div>s,
    # but in practice the sidebar is the last block before the page wrapper
    # closes, so match up to "</div>\s*</div>" (sidebar close + page close)
    # or end of string.
    sidebar_match = re.search(
        r'<div\s+id="sidebar"[^>]*>(.*)',
        html_content, re.DOTALL | re.IGNORECASE
    )
    if not sidebar_match:
        return main_html

    sidebar_html = sidebar_match.group(1)

    # Drop the "On this page" section block. The PHP pattern is
    # <section> <header class="major"> <h2>On this page</h2> ... </section>
    # Match a <section> ... </section> that contains "On this page".
    sidebar_html = re.sub(
        r'<section[^>]*>(?:(?!</section>).)*?<h2[^>]*>\s*On this page\s*</h2>.*?</section>',
        '',
        sidebar_html,
        flags=re.DOTALL | re.IGNORECASE,
    )

    # Trim trailing closing tags (</div>, </body>, etc.) — they belong to the
    # page wrappers, not to sidebar content. Keep from start through the last
    # </section>, which is the end of the last sidebar content block.
    last_section_end = sidebar_html.rfind('</section>')
    if last_section_end != -1:
        sidebar_html = sidebar_html[:last_section_end + len('</section>')]

    # Separate main content from appended sidebar content with a horizontal
    # rule so it's visually distinct from the page's own sections.
    return main_html + '\n\n<hr>\n\n' + sidebar_html


def fix_malformed_tables(html_content: str) -> str:
    """Fix HTML tables that pandoc can't parse due to two <thead> elements.

    Two patterns seen in legacy PHP:

    1. astral.php — two consecutive <thead> with NO </thead> between. First
       thead is a decorative title row (a <strong>title</strong> in the
       first cell, empty cells after). Second thead has the real column
       headers.

    2. DIA.php — two WELL-FORMED consecutive <thead>s (both with </thead>).
       First thead has multi-column group labels ("Fusion Lumos" /
       "Transient" / "QE plus"); second has the detail column headers.
       HTML spec only allows one <thead> per table, so pandoc rejects and
       the whole table falls back to paragraph-per-cell.

    Unified fix:
      - Extract non-empty text from all <th> cells in first thead.
      - Emit those as a <p><strong>label1 | label2 | ...</strong></p>
        caption above the table.
      - Drop first thead entirely.
      - Normalize second thead so it's the table's only <thead>.
    """
    def extract_th_texts(thead_body: str) -> list:
        """Return visible text of each <th> in a thead body, dropping empty cells."""
        texts = []
        for m in re.finditer(
            r'<th[^>]*>(.*?)</th>', thead_body, flags=re.DOTALL | re.IGNORECASE
        ):
            cell = m.group(1)
            # Strip inline tags (strong/br/span) to get text
            cell = re.sub(r'<[^>]+>', '', cell)
            # Collapse whitespace
            cell = re.sub(r'\s+', ' ', cell).strip()
            if cell and cell not in ('&nbsp;',):
                texts.append(cell)
        return texts

    def lift_and_drop(match):
        table_open = match.group(1)
        first_thead_body = match.group(2)
        second_thead_body = match.group(3)

        labels = extract_th_texts(first_thead_body)
        if labels:
            caption = (
                f"<p><strong>{' | '.join(labels)}</strong></p>\n"
            )
        else:
            caption = ""

        # Ensure second thead closes <tr> and </thead>
        if "</tr>" not in second_thead_body.lower():
            second_thead_body = second_thead_body + "</tr>"
        return (
            f"{caption}{table_open}\n"
            f"<thead>{second_thead_body}</thead>"
        )

    # Pattern A: both theads well-formed (each has </thead>)
    pattern_well_formed = (
        r'(<table[^>]*>)\s*'
        r'<thead>(.*?)</thead>\s*'
        r'<thead>(.*?)</thead>'
    )
    html_content = re.sub(
        pattern_well_formed,
        lift_and_drop,
        html_content,
        flags=re.DOTALL | re.IGNORECASE,
    )

    # Pattern B: malformed (second <thead> appears before first </thead>)
    pattern_malformed = (
        r'(<table[^>]*>)\s*'
        r'<thead>((?:(?!</?thead>).)*?)'
        r'<thead>((?:(?!</?thead>)(?!<tbody).)*?)'
        r'(?=<tbody)'
    )
    html_content = re.sub(
        pattern_malformed,
        lift_and_drop,
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

    # Strip pandoc attribute blocks like {.image .featured} or {#id .class}.
    # We drop CSS-class hints (theme-specific, don't carry over), but preserve
    # `#id` fragments so explicit anchor IDs on headings survive — old pages
    # use them as link targets (e.g. protocols01/index.php links `[DDA](#DDA)`
    # to `<h2 id="DDA">`).
    def _attr_block(match):
        body = match.group(0)[1:-1].strip()
        id_match = re.search(r'#([\w-]+)', body)
        if id_match:
            return '{#' + id_match.group(1) + '}'
        return ''
    md = re.sub(r'\{[.#][^}]*\}', _attr_block, md)

    # Remove "Back to Top" links. Original PHP used several anchor targets
    # (#page, #top, #content, ...). MM's floating TOC replaces the need
    # for these, so strip them regardless of target.
    md = re.sub(r'\[Back to Top\]\(#[^)]*\)[ \t]*\\?[ \t]*', '', md, flags=re.IGNORECASE)

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
    # CGI scripts live on a different subdomain (gs.washington.edu), hosted
    # separately from the main PHP site.
    UW_CGI_HOST = "https://proteomicsresource.gs.washington.edu"
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

        # /cgi-bin/*.cgi -> CGI subdomain. The CGI calculators (digest,
        # fragment, isotopes, element, motif_search) run on the gs.washington.edu
        # host, not the main site.
        if bare_url.startswith("/cgi-bin/"):
            return f"[{text}]({UW_CGI_HOST}{bare_url}{anchor})"

        # UW-hosted excluded paths -> absolute UW URL
        if any(bare_url.startswith(p) for p in UW_HOSTED_PREFIXES):
            return f"[{text}]({UW_HOST}{bare_url}{anchor})"

        # Binary downloads not tracked by the repo whitelist (.gitignore
        # only keeps source-ish assets) -> UW server. Covers .zip installers
        # as well as .exe binaries (e.g. /protocols06/RawMeat_1007.exe on
        # protocols06/index.php).
        if bare_url.startswith("/") and bare_url.lower().endswith((".zip", ".exe")):
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

    # Convert trailing `\` (pandoc's hard-linebreak syntax) to two trailing
    # spaces (Kramdown's hard-linebreak syntax) ONLY when the next line is
    # non-blank — i.e. when a hard break actually matters. If the next line
    # is blank, the paragraph already ends there and trailing spaces are
    # just diff noise. Kramdown renders a stray trailing `\` as a literal
    # backslash, so we strip those instead.
    md = re.sub(r'\\\n(?=[ \t]*\n)', '\n', md)  # `\` before blank line → drop
    md = re.sub(r'\\\n(?=[ \t]*\S)', '  \n', md)  # `\` before content → `  `
    # Catch any leftover trailing `\` at end of file or stray lines.
    md = re.sub(r'\\$', '', md, flags=re.MULTILINE)

    # Remove excessive blank lines
    md = re.sub(r'\n{3,}', '\n\n', md)

    return md


def convert_publications(php_source: str) -> tuple[str, int]:
    """Custom converter for publications.php.

    The page uses an ordered list with HTML `reversed` attribute and `<h3>`
    year headers interleaved between `<li>` items — a structure Markdown
    ordered lists can't express (no `reversed`, no `start=`, no headings
    inside lists). Pandoc also splits the unclosed multi-paragraph `<li>`s
    into separate items.

    We bypass pandoc here and emit raw HTML `<ol reversed start="N">` blocks
    per year, with `## YYYY` Markdown headings between them so MM's auto-TOC
    picks up one entry per year.

    Numbering matches the original PHP: the newest paper (top) gets the
    highest number, the oldest paper (bottom, 2008) gets 1.

    Returns (markdown_body, top_level_heading_count).
    """
    # Extract intro paragraph between the <h1>…</h1> / byline and the <ol>.
    # The byline handling in strip_outer_wrappers converts byline to
    # <p><em>…</em></p>, but we're skipping that path — emit subtitle manually.
    byline_match = re.search(
        r'<span\s+class="byline">(.*?)</span>',
        php_source, re.DOTALL | re.IGNORECASE,
    )
    subtitle = byline_match.group(1).strip() if byline_match else ""

    # Grab the intro paragraph(s) between </header> and <ol>
    intro_match = re.search(
        r'</header>(.*?)<ol\b', php_source, re.DOTALL | re.IGNORECASE,
    )
    intro_html = intro_match.group(1) if intro_match else ""
    # Clean up: drop <p> tags, the blue acknowledgment <span style=...>.
    intro_html = re.sub(r'</?p>', '', intro_html, flags=re.IGNORECASE)
    intro_html = re.sub(
        r'<span\s+style="[^"]*">(.*?)</span>',
        r'*\1*',
        intro_html,
        flags=re.DOTALL | re.IGNORECASE,
    )
    intro_text = re.sub(r'\s+', ' ', intro_html).strip()

    # Extract the <ol>…</ol> body.
    ol_match = re.search(
        r'<ol\b[^>]*reversed[^>]*>(.*?)</ol>',
        php_source, re.DOTALL | re.IGNORECASE,
    )
    if not ol_match:
        raise RuntimeError("publications.php: could not find <ol reversed>")
    ol_body = ol_match.group(1)

    # Split into year groups. Pattern: <h3>YYYY</h3> … (<li>…)+ before next <h3>.
    # Normalize: strip stray <p> tags that wrap <h3>.
    ol_body = re.sub(r'<p>\s*(?=<h3)', '', ol_body, flags=re.IGNORECASE)

    # Find all year markers and their positions.
    year_matches = list(re.finditer(
        r'<h3[^>]*>\s*(\d{4})\s*</h3>', ol_body, re.IGNORECASE,
    ))
    if not year_matches:
        raise RuntimeError("publications.php: no <h3>YEAR</h3> markers found")

    # For each year, the <li> block runs from end-of-h3 to start-of-next-h3
    # (or end of ol body for the last year).
    groups = []  # list of (year, list_of_li_html)
    for i, ym in enumerate(year_matches):
        year = ym.group(1)
        start = ym.end()
        end = year_matches[i + 1].start() if i + 1 < len(year_matches) else len(ol_body)
        block = ol_body[start:end]
        # Split on <li> — each part after the first is a list item.
        parts = re.split(r'<li\b[^>]*>', block, flags=re.IGNORECASE)
        # parts[0] is whitespace before first <li>; discard.
        items = [p.strip() for p in parts[1:] if p.strip()]
        groups.append((year, items))

    total = sum(len(items) for _, items in groups)

    # Build output. Numbering: first paper of first year (most recent) = total;
    # decrement as we walk down the page.
    parts_out = []
    if subtitle:
        parts_out.append(f"*{subtitle}*\n")
    if intro_text:
        parts_out.append(intro_text + "\n")

    current_num = total
    for year, items in groups:
        parts_out.append(f"## {year}\n")
        parts_out.append(f'<ol reversed start="{current_num}">')
        for item in items:
            # Clean up the item: trim, close any stray tags, collapse whitespace.
            cleaned = item.rstrip()
            # Strip trailing </ol> fragments (shouldn't happen after split, but be safe).
            cleaned = re.sub(r'</ol>\s*$', '', cleaned, flags=re.IGNORECASE)
            # Collapse runs of whitespace into a single space to keep one <li> per line.
            cleaned = re.sub(r'\s+', ' ', cleaned).strip()
            # Rewrite target="new" — drop it, not meaningful.
            cleaned = re.sub(r'\s*target="[^"]*"', '', cleaned)
            parts_out.append(f"  <li>{cleaned}</li>")
            current_num -= 1
        parts_out.append("</ol>\n")

    body = "\n".join(parts_out)
    # Top-level heading count = number of year groups (one ## per year).
    return body, len(groups)


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


# Front-matter keys the converter sets itself. Any other keys found in an
# existing .md output file are considered manual additions and carried
# through to the regenerated output (e.g. `parent:` for breadcrumb overrides).
CONVERTER_FM_KEYS = {"title", "permalink", "toc", "toc_label", "toc_sticky"}


def read_preserved_front_matter(output_path: Path) -> list[str]:
    """Return raw front-matter lines to preserve across a regen.

    Reads the existing .md file (if present) and keeps any top-level
    `key: value` lines whose key is NOT in CONVERTER_FM_KEYS. The raw
    line is preserved verbatim so quoting/formatting round-trips. Only
    simple scalar-on-one-line keys are supported; multi-line YAML values
    won't parse correctly but we don't use those here.
    """
    if not output_path.exists():
        return []
    try:
        text = output_path.read_text(encoding="utf-8")
    except Exception:
        return []
    # Front matter is the block between the first two `---` lines at the
    # top of the file.
    match = re.match(r'^---\r?\n(.*?)\r?\n---\r?\n', text, flags=re.DOTALL)
    if not match:
        return []
    preserved = []
    for line in match.group(1).splitlines():
        key_match = re.match(r'^([A-Za-z_][\w-]*)\s*:', line)
        if key_match and key_match.group(1) not in CONVERTER_FM_KEYS:
            preserved.append(line)
    return preserved


def generate_front_matter(title: str, permalink: str, sidebar: bool,
                          heading_count: int = 0,
                          preserved: list[str] | None = None) -> str:
    """Generate Jekyll front matter.

    A TOC is emitted only when the page originally had a sidebar AND has
    enough sections to be worth navigating (more than 3 top-level headings).
    Short pages like `resources/` don't benefit from a sticky "On this page"
    panel — it just adds a near-empty rail.
    """
    lines = ["---"]
    # Escape quotes in title
    safe_title = title.replace('"', '\\"')
    lines.append(f'title: "{safe_title}"')
    lines.append(f'permalink: {permalink}')
    if sidebar and heading_count > 3:
        # The original PHP sidebar was essentially a page-scoped table of
        # contents ("Quick links" / "On this page") plus a short related-links
        # list. The related links have been inlined into the main content by
        # the converter; Minimal Mistakes' built-in TOC handles the anchor
        # navigation better than a hand-written sidebar nav.
        lines.append("toc: true")
        lines.append('toc_label: "On this page"')
        lines.append("toc_sticky: true")
    if preserved:
        lines.extend(preserved)
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

    # Special case: publications.php has a reversed ordered list with year
    # subheadings inside — an HTML structure Markdown can't round-trip.
    # Use a dedicated converter that emits raw HTML <ol reversed start="N">
    # blocks per year, with `## YYYY` headings between them for the TOC.
    rel_path = str(filepath.relative_to(REPO_ROOT)).replace("\\", "/")
    if rel_path == "publications.php":
        try:
            markdown, heading_count = convert_publications(php_source)
        except RuntimeError as e:
            result["status"] = "error"
            result["error"] = str(e)
            return result
        # Force sidebar=True so the TOC front-matter block is emitted (the
        # publications page has no <div id="sidebar"> but the year-per-TOC
        # was the request).
        sidebar = True
    else:
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

        # Count top-level (##) headings so generate_front_matter can suppress
        # the TOC on pages with too few sections to be worth navigating.
        heading_count = len(re.findall(r'^##\s+\S', markdown, flags=re.MULTILINE))

    # Generate front matter. Preserve any manual front-matter keys already
    # present in the existing .md output (e.g. `parent:` for breadcrumbs),
    # so hand-edits survive regeneration.
    permalink = compute_permalink(filepath)
    output_path = compute_output_path(filepath)
    preserved = read_preserved_front_matter(output_path)
    front_matter = generate_front_matter(title, permalink, sidebar, heading_count,
                                         preserved=preserved)

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
