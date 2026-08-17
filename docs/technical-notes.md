# NOVA Studio — Technical Notes

> Deliverable per PDF §9. Pre-filled from the real architecture already built
> in `wordpress-theme-starter/` and `wix-velo-starter/`, and from
> `docs/superpowers/specs/2026-08-15-nova-studio-design.md` §4/§5. Fields
> marked **[FILL DURING TEST]** only exist after deployment.

## WordPress

**Stack:** from-scratch custom theme (`nova-studio`), no page builder, ACF
Free only (no Pro-only features used).

### Custom Post Types + ACF (instead of Repeater)

ACF Free has no Repeater / Flexible Content / Options Page. Rather than
work around that, every repeating section is its own CPT — one post = one
card:

| Section | CPT | ACF fields | Built-in fields used |
|---|---|---|---|
| Services | `service` | `service_description`, `service_icon` (dashicon class) | Title, Featured Image |
| Portfolio | `portfolio_item` | `portfolio_category`, `portfolio_url` | Title, Featured Image |
| Testimonials | `testimonial` | `testimonial_quote`, `testimonial_role` | Title (client name), Featured Image (avatar) |
| Process | `process_step` | `process_description` | Title, order via `menu_order` |

Registered in `inc/cpt-services.php`, `inc/cpt-portfolio.php`,
`inc/cpt-testimonials.php`, `inc/cpt-process.php`.

Fields are registered in code via `acf_add_local_field_group()`
(`inc/acf-fields.php`) — not a Pro-only function, and faster/more reliable
under a 48-hour clock than building field groups through the UI.

**Why Hero / Why NOVA / Final CTA are not CPTs:** they're fixed brand copy
that doesn't repeat or get reordered by an editor — a 5th CPT for a few
static paragraphs would be over-engineering with no functional or grading
upside.

### Custom REST API

Registered in `inc/rest-api.php` under the `nova/v1` namespace:

- `GET /wp-json/nova/v1/services`
- `GET /wp-json/nova/v1/portfolio`
- `GET /wp-json/nova/v1/testimonials`
- `GET /wp-json/nova/v1/process`

**Hybrid rendering, deliberate:** Services and Process render server-side via
`WP_Query` inside `template-parts/section-services.php` and
`section-process.php` — reliable, no dependency on JS/network at evaluation
time. Portfolio and Testimonials render as empty containers
(`section-portfolio.php`, `section-testimonials.php`) populated client-side
by `assets/js/main.js`, which fetches from the endpoints above using the
REST root injected via `wp_localize_script('nova-main', 'novaAPI', ...)` in
`functions.php`. This split is what explicitly demonstrates the "custom REST
API to display data on the frontend" requirement, not just a CPT existing.

### Front-end assets

- `assets/css/main.css` — design tokens as CSS custom properties, all styling.
- `assets/js/main.js` — REST fetch + render for Portfolio/Testimonials, plus
  the mobile nav toggle. No build step / bundler — plain enqueued files.

### Deployment

- Dev: LocalWP, PHP 8.2.
- Live: LocalWP **Live Link**.
- **[FILL DURING TEST]** Live URL: `___`
- **[FILL DURING TEST]** Evaluator admin credential: dedicated `evaluator`
  Administrator user (not the personal LocalWP login) — username `___`, password
  shared via `___` (not committed to this repo).

## Wix

**Stack:** Wix Editor/Studio with Dev Mode (Velo) enabled.

### CMS Collections

Schema in `wix-velo-starter/cms-collections.md`:

- `ConsultationRequests` (**required**) — `name`, `email`, `company`,
  `message`, `status` (default `"new"`), `_createdDate` (auto). Permissions
  set to Content Manager only — no visitor read/write.
- `Testimonials` / `Portfolio` (optional) — no-code Repeater + Dataset, adds
  CMS depth beyond the one required form without needing custom backend logic.

### Velo Backend Module

`wix-velo-starter/backend/consultation.jsw` exports
`submitConsultationRequest(formData)`, server-side only:

1. Trims and validates `name` (non-empty) and `email` (regex format check).
2. Queries `ConsultationRequests` for a same-email submission within the last
   24 hours (`wixData.query().eq('email', ...).gt('_createdDate', ...)`) to
   guard against duplicate spam submits.
3. `wixData.insert()`s the new request with `status: 'new'`.
4. Returns `{ success, message }` — never a raw exception — for the page code
   to show as UI feedback.

**Why Velo instead of the no-code "Connect to CMS" dataset:** the no-code
path would technically save form data, but it wouldn't exercise the explicit
"Velo Back-end module for server-side logic" requirement (PDF §4), and it
can't enforce the duplicate-submission guard, since that logic must live
server-side regardless of what the client sends.

`wix-velo-starter/page-code-example.js` shows the page-code side: it only
imports and calls `submitConsultationRequest(...)`, then displays
`result.message` — no data-layer logic on the client.

### Deployment

- **[FILL DURING TEST]** Live URL: `___`
- **[FILL DURING TEST]** Collaborator invite sent to evaluator (Site →
  Collaborators → Invite) — not a personal Wix account password.

## Talking Points (be ready to explain without notes)

1. Why every repeating section is its own CPT instead of one Repeater field
   (ACF Free has no Repeater/Flexible Content/Options Page).
2. Why Services/Process render server-side while Portfolio/Testimonials fetch
   from the custom REST API (reliability vs. explicitly proving the REST
   requirement).
3. Why the Wix consultation form goes through a Velo backend module instead
   of a no-code CMS-connected dataset (validation + duplicate-guard must be
   server-side).
