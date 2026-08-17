# NOVA Studio — Visual Assets

All files below already exist in `wordpress-theme-starter/assets/img/` — no
download needed during the test itself. Swap any of them for real client
assets later if the brand direction shifts; nothing here is load-bearing.

## Icon Set — Lucide (decision)

Picked **Lucide** over Phosphor: consistent 24px/2px-stroke line style that
reads as modern/premium without feeling playful, and it has a plain static
SVG CDN (`unpkg.com/lucide-static`) with no license attribution requirement
(ISC license) — good for a fast pull with zero legal friction.

Downloaded into `wordpress-theme-starter/assets/img/icons/`:

| File | Used for |
|---|---|
| `laptop.svg` | Services — Website Development |
| `palette.svg` | Services — Branding |
| `layout-grid.svg` | Services — Digital Design |
| `search.svg` | Process — Discovery |
| `compass.svg` | Process — Strategy |
| `pen-tool.svg` | Process — Design |
| `code-2.svg` | Process — Build |
| `rocket.svg` | Process — Delivery |

Source: `https://unpkg.com/lucide-static@latest/icons/<name>.svg` (same set
also available in Wix's asset library search if you'd rather use Wix's
built-in icon picker there instead of uploading these SVGs manually).

Note: the WP theme's `service` CPT icon field (`service_icon`) is currently
typed as a dashicon class string (see `inc/acf-fields.php`), so either paste
the SVG markup inline as the featured image, or swap the field to accept an
image upload if you want the Lucide SVGs rendered directly instead of a
dashicon fallback.

## Hero Visual

`assets/img/hero-visual.jpg` (1200×900) — sourced from Lorem Picsum
(`picsum.photos`, seed `nova-hero-workspace`), which serves freely-usable
photos originally from Unsplash. Placeholder only — swap for a real
workspace/mockup photo or a 3D render if time allows during the test.

## Portfolio Thumbnails

All sourced from Lorem Picsum (deterministic per-seed URL, so re-running the
same seed always returns the same image), 800×600:

| File | Project | Seed |
|---|---|---|
| `portfolio-solstice-coffee.jpg` | Solstice Coffee Co. | `nova-portfolio-solstice` |
| `portfolio-ledgerly.jpg` | Ledgerly | `nova-portfolio-ledgerly` |
| `portfolio-kindred-yoga.jpg` | Kindred Studio Yoga | `nova-portfolio-kindred` |
| `portfolio-northbound-freight.jpg` | Northbound Freight | `nova-portfolio-northbound` |

## Testimonial Avatars

Generated via `ui-avatars.com` (initials-based, no real people — safe for
fictional clients, no licensing concern):

| File | Client | Colors |
|---|---|---|
| `avatar-maya-alderton.png` | Maya Alderton | bg `#1E1B4B`, text `#FAF9F6` |
| `avatar-devon-ruiz.png` | Devon Ruiz | bg `#FF6B4A`, text `#FFFFFF` |
| `avatar-priya-shah.png` | Priya Shah | bg `#14132B`, text `#FAF9F6` |

Regenerate/re-theme any of these anytime with:
`https://ui-avatars.com/api/?name=First+Last&size=256&background=HEX&color=HEX&bold=true&format=png`

## Wordmark / Logo

Not produced here — a ~10-minute Figma/Canva task per the pre-test checklist,
best done once the palette is locked (it already is). The header/footer
currently render "NOVA Studio" as styled text (`.nova-logo` in `main.css`),
which is a perfectly acceptable fallback if a custom mark isn't ready in time.
