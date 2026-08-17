# Pre-Test Preparation Plan

> Steps use checkbox (`- [ ]`) syntax for tracking. Everything here happens **before** the 48-hour clock starts — pure tooling/asset prep, not part of the graded output itself.

**Goal:** Walk into Hour 0 with zero setup friction and every piece of dummy content/asset ready to paste, so all 48 hours go to actual build + polish.

**Spec:** `../specs/2026-08-15-nova-studio-design.md`

**Note:** if in doubt whether pre-installing generic tooling (LocalWP, ACF, font checks) before the clock starts is acceptable under the test rules, confirm with the evaluator/HR first — it's environment setup, not NOVA Studio-specific output, but every test's fine print differs.

---

### Task 1: Tools & Environment

- [ ] LocalWP installed & updated; create one throwaway site (PHP 8.2) to confirm the workflow end-to-end
- [ ] Download ACF (Free) plugin zip as an offline backup (primary path: install from Plugin Directory during the test)
- [ ] Dry-run **LocalWP Live Link** on the throwaway site — confirm you get a working public URL from another device (sign up for Local Connect now if not already)
- [ ] Wix account ready; open a blank Editor/Studio site, confirm **Dev Mode** (Velo) toggles on
- [ ] Code editor ready (VS Code + PHP/JS syntax highlighting)
- [ ] Browser DevTools refreshed — Device Toolbar for mobile simulation
- [ ] Decide REST endpoint testing method (browser address bar is enough; Postman optional)

### Task 2: Brand & Design System Confirmation

- [ ] Palette and type pairing confirmed against `../specs/2026-08-15-nova-studio-design.md` §3
- [ ] Open Wix Editor's font picker, confirm Sora/Poppins **and** Inter are both selectable natively (no custom upload needed)
- [ ] Pick one icon set (Lucide or Phosphor), download the SVGs needed for Services + Process

### Task 3: Dummy Content Drafts

- [ ] Hero: headline + subhead + both CTA labels
- [ ] 3 Services: name + 1–2 sentence description each
- [ ] 4 Why NOVA reasons: title + description each
- [ ] 3–4 Portfolio projects: name + category + short blurb
- [ ] 4–5 Process steps: name + description each (Discovery → Delivery)
- [ ] 2–3 Testimonials: quote + fictional client name + fictional role/company
- [ ] Final CTA: headline + subhead
- [ ] Footer: nav links, fictional email/social handles, copyright line

### Task 4: Visual Assets

- [ ] Hero visual (workspace/abstract/mockup) sourced from Unsplash/Pexels or a 3D mockup render
- [ ] 3–4 portfolio thumbnails (mockup screenshots or relevant curated stock)
- [ ] Testimonial avatars from ui-avatars.com or pravatar.cc — **not** real people photos, since clients are fictional
- [ ] Simple NOVA Studio wordmark/logo (Figma/Canva, ~10 min)
- [ ] All images compressed (Squoosh/TinyPNG) before use

### Task 5: Documentation Templates

- [ ] Design Notes template ready to fill (Visual Direction, Palette + rationale, Typography, Layout/Grid approach, Responsive approach, WP↔Wix consistency notes)
- [ ] Technical Notes template ready to fill (mirrors `../specs/2026-08-15-nova-studio-design.md` §4/§5 structure)
- [ ] Deliverables checklist printed/pinned (mirrors spec §7)

### Task 6: Talking Points Rehearsal

Be ready to explain, out loud, without notes:
- [ ] Why every repeating section is its own CPT instead of one Repeater field
- [ ] Why Services/Process render server-side while Portfolio/Testimonials fetch from the custom REST API
- [ ] Why the Wix consultation form goes through a Velo backend module instead of a no-code CMS-connected dataset

---

## Self-Review

Covers PDF §9 prep needs before Hour 0: tooling readiness, brand system lock-in, all 8 sections' content drafted, assets sourced, documentation scaffolding, and verbal readiness for PDF §3/§4's "must be able to explain" requirement. Nothing here touches the actual WordPress/Wix build — that's `2026-08-15-wordpress-build.md` and `2026-08-15-wix-build.md`.
