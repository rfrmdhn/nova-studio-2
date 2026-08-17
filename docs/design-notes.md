# NOVA Studio — Design Notes

> Deliverable per PDF §9. Pre-filled from the real decisions in
> `docs/superpowers/specs/2026-08-15-nova-studio-design.md`. Fields marked
> **[FILL DURING TEST]** need a live screenshot or a last-minute call that
> can only be made once both sites are actually built.

## Visual Direction

NOVA Studio is positioned as a confident, premium creative/digital studio for
business owners and founders — not a template-shop feel. The direction reads
as modern and clean rather than corporate-cold, achieved by pairing a deep
indigo/navy base with a single warm coral accent used *only* on calls to
action, so the CTA hierarchy stays unambiguous at a glance.

## Palette

| Token | Hex | Role |
|---|---|---|
| Primary | `#1E1B4B` | Headlines (dark variant), primary buttons' outline, footer/nav text |
| Primary Dark | `#14132B` | Final CTA section background — the darkest surface on the page, used to make the closing CTA feel like a deliberate destination |
| Background | `#FAF9F6` | Page background — warm off-white, avoids the sterile feel of pure white |
| Accent | `#FF6B4A` | **CTA-only.** Never used for decoration — if it appears, it means "click here" |

Rationale: reserving the accent strictly for CTAs is what gives the page a
clear CTA hierarchy (PDF §7 grading line) — a reader should be able to find
"what to click" without reading any copy.

## Typography

- **Heading:** Sora (fallback Poppins) — geometric, confident, used for all `h1`–`h3`.
- **Body:** Inter — high legibility at small sizes, used for all paragraph/UI text.
- Both fonts exist in Google Fonts (WP, via `wp_enqueue_style` in `functions.php`)
  **and** in Wix's native font picker, so no custom font upload is needed on
  Wix — this is the single biggest lever for cross-platform type consistency.
- **[FILL DURING TEST]** Confirm Wix's rendered Sora weight visually matches
  the WP `font-weight` values used (`600`/`700`/`800`) — Wix's font picker has
  occasionally rendered a slightly different default weight than Google Fonts.
  Log any drift found in `docs/superpowers/SYNC.md`.

## Icon Set

One icon set only, used across Services and Process, so icon style never
becomes an inconsistency source. **[FILL DURING TEST]** — final pick recorded
in `docs/visual-assets.md`.

## Layout / Grid Approach

- Content max-width `1140px` (`--nova-container-width` in `main.css`), centered.
- Card grids (Services / Why NOVA / Portfolio / Testimonials) use CSS Grid
  with `repeat(auto-fit, minmax(260px, 1fr))` — this means the grid always
  looks intentional regardless of exact item count (e.g. 2 testimonials vs.
  4 portfolio items never leaves an orphaned, stretched last card).
- Process renders as a numbered horizontal sequence (`01 → 02 → ...`) to read
  as a left-to-right journey rather than another card grid, visually
  distinguishing "a process" from "a list of offerings."
- Spacing uses a fixed token scale (`--nova-space-xs` through `--nova-space-xl`)
  rather than ad-hoc pixel values, so vertical rhythm stays consistent section
  to section.

## Responsive Approach

- **WordPress:** CSS Grid + media query breakpoints at `860px` (3-col → 2-col)
  and `560px` (→ 1-col, nav collapses behind a hamburger toggle). Verified at
  375 / 768 / 1440px per the build plan.
- **Wix:** Not CSS-driven — Wix's Mobile View requires a manual layout pass
  per section (Wix does not auto-reflow). This is called out explicitly so it
  isn't skipped under time pressure.

## WP ↔ Wix Consistency Notes

Same hex tokens set in Wix Site Theme as the WP CSS custom properties; same
font pairing; identical section order and copy (`docs/content-draft.md` is the
single source both platforms paste from) — only layout/grid mechanics are
allowed to differ per platform (PDF §4). Any discrepancy actually found while
building is logged in `docs/superpowers/SYNC.md`, not silently patched on one
side only.

**[FILL DURING TEST]** Attach final desktop + mobile screenshots, WP and Wix,
side by side, once both are live.
