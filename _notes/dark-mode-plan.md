# Dark mode plan (pinned 2026-09-01, not yet started)

Folder note: `_notes/` is tracked by git but invisible to Jekyll (underscore
directory, not a collection, not in `include:`), so nothing here is published.

## Goal

Optional dark mode for the site: follow the visitor's OS preference by
default, with a sun/moon toggle in the masthead that overrides it either way
and remembers the choice.

## Current state this builds on

- Color theme "Ion Navy" applied 2026-09-01: SCSS variable overrides at the
  TOP of `assets/css/main.scss` (before the two `@import` lines, because
  Minimal Mistakes declares variables with `!default`), plus masthead/footer
  blocks at the end of that file. Charcoal `#22262b` masthead and footer are
  already dark-friendly.
- All seven candidate palettes, with per-theme SCSS snippets, live in the
  theme demo artifact:
  https://claude.ai/code/artifact/dc430d06-22a7-40b2-84c8-c8317950b2ff
- The Our Mission / contact address boxes and login strip derive their tint
  from `$link-color` in main.scss (8% mix), so they follow any theme.

## Design (three-state pattern, same as the audit artifact)

1. **Token layer.** Define CSS custom properties (`--bg`, `--text`, `--link`,
   `--muted`, `--border`, `--card`, `--masthead-bg`, ...) in main.scss:
   - bare `:root` = complete light (Ion Navy) palette;
   - `@media (prefers-color-scheme: dark)` guarded as
     `:root:not([data-theme="light"])` = dark palette;
   - `:root[data-theme="dark"]` = dark palette again (so the toggle wins).
   Then an override layer re-points Minimal Mistakes' surfaces at the tokens:
   body background/text, links, masthead, footer, sidebar/nav, tables,
   notices, code blocks, borders. MM bakes literal colors into dozens of
   rules, so this is a targeted re-declaration layer, not five variables.

2. **Dark palette sketch (Ion Navy dark):** ground `#1b1e22`, surface
   `#22262b`, text `#e2e6ea`, muted `#98a2ab`, links `#7fa3e8` (navy is too
   dark on charcoal; lighten for contrast), borders `#31363c`, card tint
   `#232a34`, table header `#262c33`, masthead/footer stay `#22262b` with a
   hairline separator.

3. **Toggle.** Copy the remote theme's `_includes/masthead.html` into the
   repo (local includes shadow the remote theme) and add a small button:
   a few lines of JS set `data-theme="dark"|"light"` on `<html>`, persist in
   localStorage (try/catch), and initialize before first paint to avoid a
   flash (tiny inline script in `_includes/head/custom.html`).

4. **Custom components** (section cards, .equation, .references, .figcaption,
   .uwpr-grid boxes, .section-card): all already color via SCSS variables;
   convert those declarations to the tokens and they're done.

## Known problem areas

- `.dia-table` purple tints and `.prm-table` greys are hardcoded in
  main.scss; they need explicit dark variants.
- Many content PNGs (spectra, instrument photos, diagrams, screenshots) have
  white backgrounds and will float as white boxes on a dark page. Mitigation:
  in dark mode give `.page__content img` a white padding/rounded background
  so they read as intentional plates; revisit per-image later if desired.
- The home page hero overlay and `uwpr.css` odds and ends (login form, strip)
  need a pass.
- MM's syntax-highlighting palette is light; either keep code blocks light in
  both modes or add a dark highlight palette.

## Effort estimate

One focused session for tokens + toggle + main surfaces, then an inspection
pass across pages for stragglers (tables, notices, images).
