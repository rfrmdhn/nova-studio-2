# NOVA Studio — Design & Architecture Spec

**Date:** 2026-08-15
**Status:** approved
**Source:** `WEBSITE_DESIGN_TEST_FINAL.pdf` (authoritative brief — quote it, never paraphrase from memory when in doubt)
**Environment:** ACF Free, LocalWP (dev), LocalWP Live Link (WP live URL)

## 1. Brief Translation

| | |
|---|---|
| Brand | NOVA Studio — fictional creative/digital studio (Website Development, Branding, Digital Design) |
| Target audience | Business owner, startup founder, marketing team |
| Goal | Build trust, drive consultation/contact |
| Primary CTA | Book a Consultation |
| Secondary CTA | View Our Work |
| Visual direction | Modern, premium, clean, confident, approachable |

**Heaviest-weighted grading criterion** (PDF §7, called "bagian terpenting"): visual hierarchy, typography, spacing/grid, imagery, CTA hierarchy, desktop↔mobile and WP↔Wix consistency. Time spent polishing this beats time spent on extra technical scope.

## 2. Requirement Matrix

8 sections required on **both** platforms (PDF §6). Layout may adapt per platform (PDF §4), content and identity must not:

| Section | Min. | WordPress source | Wix source |
|---|---|---|---|
| Hero | — | static markup, `template-parts/section-hero.php` | static section, matched copy |
| Services | 3 | CPT `service` + ACF, server-rendered | static cards or `Services` dataset |
| Why NOVA | 3–4 | static array in `template-parts/section-why.php` | static section |
| Portfolio | 3 | CPT `portfolio_item` + ACF, rendered via custom REST API | static cards or `Portfolio` dataset (optional) |
| Process | 4 | CPT `process_step` + ACF, server-rendered, ordered by `menu_order` | static section |
| Testimonial | 2 | CPT `testimonial` + ACF, rendered via custom REST API | static cards or `Testimonials` dataset (optional) |
| Final CTA | — | static markup, `template-parts/section-cta.php` | static section |
| Footer | — | `footer.php`, nav + contact/social + copyright | Wix footer, same links |

## 3. Design System

- **Color:** Primary `#1E1B4B`, Primary-dark `#14132B`, Background `#FAF9F6`, Accent `#FF6B4A`. Rationale: deep indigo/navy reads confident and premium; warm coral accent (used only on CTAs) keeps it approachable rather than corporate-cold.
- **Type:** Heading = Sora (or Poppins), Body = Inter. Both exist in Google Fonts (WP `wp_enqueue_style`) **and** Wix's native font picker — chosen specifically to avoid a custom font upload on Wix, which is the easiest place for cross-platform type drift to creep in.
- **Icons:** one set only (Lucide or Phosphor, SVG) for Services & Process — consistency signal is more valuable than icon variety.

## 4. WordPress Architecture Decisions

Full code lives in [`wordpress-theme-starter/`](../../../wordpress-theme-starter) — this section is the *why*, not the *how*.

- **CPT-per-section instead of Repeater.** ACF Free has no Repeater / Flexible Content / Options Page. Rather than a workaround, every repeating section became its own CPT (`service`, `portfolio_item`, `testimonial`, `process_step`) — one post = one card. This is not a compromise; it is literally the "CPT + ACF for dynamic data" requirement in PDF §3, done cleanly.
- **Why NOVA / Hero / Final CTA are NOT CPTs.** They're fixed brand copy, not content an editor repeats or reorders. A 5th CPT for 4 static paragraphs would be over-engineering with no grading upside.
- **Hybrid rendering.** Services and Process render server-side via `WP_Query` (reliable, no dependency on JS/network at evaluation time). Portfolio and Testimonials are fetched client-side from the custom REST API (`assets/js/main.js` → `nova/v1/portfolio`, `nova/v1/testimonials`) — this is the part that explicitly proves the "custom REST API to display data on the frontend" requirement (PDF §3) when walking an evaluator through the code.
- **ACF fields registered in PHP** (`acf_add_local_field_group()` in `inc/acf-fields.php`) rather than built via the admin UI. This function is not Pro-gated — it works fully on ACF Free — and is faster and version-controllable under a 48-hour clock.

## 5. Wix Architecture Decisions

Full code lives in [`wix-velo-starter/`](../../../wix-velo-starter).

- **Form → CMS goes through a Velo backend module, not the no-code "Connect to CMS" dataset.** The no-code path would technically connect a form to a collection, but it would not exercise the explicit "Velo Back-end module for server-side logic" requirement in PDF §4. `backend/consultation.jsw` owns validation (email format), a 24-hour duplicate-submission guard, and the `wixData.insert` — logic that must live server-side regardless of what the client sends.
- **`ConsultationRequests` collection is the one that must be Velo-backed**, because it's the Primary CTA's destination — this makes the technical requirement serve the actual business goal (drive consultations) instead of being a bolted-on feature.
- **`Testimonials` / `Portfolio` collections are optional, no-code (Repeater + Dataset).** They add CMS depth beyond the one required form but don't need custom backend logic — using Velo everywhere would be scope inflation the brief doesn't ask for.
- **Mobile is a manual layout pass**, not automatic. Wix does not reflow like CSS Grid — the Wix Editor's Mobile View needs its own pass per section.

## 6. Cross-Platform Consistency

Same hex values in Wix Site Theme as the WP CSS custom properties; same font pairing; same section order and copy, only layout adapted. Any drift discovered while building either platform gets logged in `../SYNC.md` rather than silently fixed on one side only — the goal is a decision trail, since PDF §7 explicitly grades "WordPress dan Wix harus memiliki visual consistency."

## 7. Deliverables Map (PDF §9)

| Deliverable | How it's produced |
|---|---|
| Live link WordPress | LocalWP → Live Link |
| Live link Wix | Wix Publish |
| WP admin credential | Dedicated `evaluator` Administrator user (not personal login) |
| Wix CMS/Dashboard credential | Collaborator invite (not personal account password) |
| Screenshots desktop + mobile, both platforms | Captured during `plans/2026-08-15-wordpress-build.md` Task 6 and `plans/2026-08-15-wix-build.md` Task 6 |
| Design notes | Drafted from this spec + real decisions made during the build |
| Technical notes | Drafted from §4/§5 above + actual endpoint/collection names used |

## 8. Open Items (recorded, not blocking)

- Exact final copy/imagery is finalized during pre-test prep (`plans/2026-08-15-pretest-prep.md`), not in this spec — content drafts are prepared but not locked, in case brand voice shifts once real hero visuals are chosen.
- Live Revision Test (PDF §10) happens post-submission — no plan task covers it directly; readiness for it depends on code/field naming staying legible (ACF field names, Wix element IDs), which every build task below is written to preserve.
