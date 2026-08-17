# WordPress Build Plan (Task A)

> Steps use checkbox (`- [ ]`) syntax for tracking. Suggested hour blocks assume a Day 1, 09:00 start — shift proportionally if your actual start time differs.

**Goal:** Ship the NOVA Studio landing page on a from-scratch custom WordPress theme — 4 CPTs + ACF for dynamic content, a custom REST API, fully responsive — matching all 8 required sections.

**Spec:** `../specs/2026-08-15-nova-studio-design.md` §4, §7
**Starter code:** [`wordpress-theme-starter/`](../../../wordpress-theme-starter) — copy this whole folder into `wp-content/themes/nova-studio/`, then work through the tasks below.

---

### Task 1: Environment & theme activation — *Hour 0–2*

- [ ] Create a new LocalWP site (PHP 8.2)
- [ ] Copy `wordpress-theme-starter/` → `wp-content/themes/nova-studio/`
- [ ] Activate the theme in Appearance → Themes
- [ ] Install & activate ACF (Free) from the Plugin Directory
- [ ] Confirm the 4 CPT menus appear automatically in wp-admin (Services, Portfolio, Testimonials, Process Steps) — no manual CPT UI setup needed, they're registered in `inc/cpt-*.php`

### Task 2: Static sections — Header, Hero, Services, Why NOVA — *Hour 2–6*

- [ ] Set up primary + footer nav menus (Appearance → Menus)
- [ ] Style Hero per the design tokens in `assets/css/main.css` (adjust copy/visual per pre-test drafts)
- [ ] Confirm Services grid renders once at least one `service` post exists
- [ ] Confirm Why NOVA static cards match the 3–4 reasons drafted in pre-test prep
- [ ] First responsive pass at 1440px / 768px / 375px

### Task 3: CPT content entry — *Hour 7–11*

- [ ] Create ≥3 `service` posts: title, featured image, `service_description`, `service_icon`
- [ ] Create ≥3 `portfolio_item` posts: title, featured image, `portfolio_category`, `portfolio_url`
- [ ] Create ≥2 `testimonial` posts: title (client name), featured image (avatar), `testimonial_quote`, `testimonial_role`
- [ ] Create ≥4 `process_step` posts: title, `process_description`, ordered via `menu_order` (drag in list view or Quick Edit)
- [ ] Confirm Services & Process sections render the real content server-side

### Task 4: Custom REST API wiring — *Hour 11–13*

- [ ] Test all 4 endpoints directly in-browser: `/wp-json/nova/v1/services`, `/portfolio`, `/testimonials`, `/process`
- [ ] Confirm JSON shape matches `../specs/2026-08-15-nova-studio-design.md` §4 (id, title/name, description/quote, thumbnail/avatar)
- [ ] Confirm the Portfolio section on the live page populates via `assets/js/main.js` fetch (check browser console for errors)
- [ ] Confirm the Testimonials section populates the same way

### Task 5: Final CTA, Footer, full responsive pass — *Hour 13–14*

- [ ] Final CTA copy + link wired (`mailto:` or anchor to a future contact section)
- [ ] Footer: brand/logo, nav, contact/social links, copyright year
- [ ] Full responsive QA across all 8 sections at 375px / 768px / 1440px — fix spacing/breakpoint issues in `assets/css/main.css`

### Task 6: Deploy, credentials, screenshots — *Hour 24–26 (Day 2 morning)*

- [ ] Visual polish pass on spacing/typography/hierarchy — this is PDF §7's highest-weighted criterion, budget real time here
- [ ] LocalWP → **Live Link** → enable, copy the public URL
- [ ] Verify the live URL loads correctly in an incognito window / different device
- [ ] Create a dedicated `evaluator` Administrator user (not your personal LocalWP login) — record the credential
- [ ] Screenshot desktop (1440px) and mobile (375px) views of the full page
- [ ] Draft **Design Notes** and **Technical Notes** for the WP half while the build is fresh (see spec §7 for what each should cover)

---

## Self-Review

Covers PDF §3 (custom theme, CPT+ACF, custom REST API, responsive, explainability) and the WordPress half of §6 (all 8 sections) and §9 (live link, admin credential, screenshots, notes). Cross-platform consistency check against the Wix build happens in `2026-08-15-wix-build.md` Task 5, logged to `../SYNC.md`.
