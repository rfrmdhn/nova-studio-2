# Wix Editor — Section-by-Section Build Guide

A click-through checklist for building the NOVA Studio Home page in the Wix
Editor, section by section, using the copy already drafted in
`docs/content-draft.md`. Layout is adapted to Wix's own section paradigm —
only content/order/identity must match WordPress, not the exact grid
mechanics (per the brief).

**Dev Mode is NOT needed for this guide.** Only turn it on once you reach the
consultation form step (see the very end of this file) — trying to find it
now just wastes time.

General pattern for every section below: click **"+ Add Section"** at the
bottom of the last section → Wix shows a library of pre-made section layouts
grouped by category (Hero, Services, About, Gallery, Testimonials, Contact,
etc.) → pick one whose layout roughly matches, then edit its text/image
placeholders. You do not need to build from empty boxes — picking a close
layout and re-typing content is faster and looks more polished.

---

### 1. Header (site-wide, not a section)

- Click the top area above your first section → Wix usually auto-adds a
  header/menu strip, or add one via **+ Add** → **Header**.
- Set logo text to **"NOVA Studio"**.
- Menu items: **Services, Portfolio, Process, Testimonials** (anchor-links to
  the matching sections you'll add below).
- Add a small button: **"Book a Consultation"** → link to the Final CTA
  section (once it exists) or `mailto:hello@novastudio.co`.

### 2. Hero

- `+ Add Section` → category **"Hero"** → pick a layout with headline +
  subhead + 2 buttons + image (closest to a 2-column split).
- Headline: `We design digital experiences that make small businesses look world-class.`
- Subhead: `NOVA Studio helps founders and marketing teams launch websites, brand identities, and digital design that build trust and win customers.`
- Primary button: `Book a Consultation` → anchor to Final CTA section
- Secondary button: `View Our Work` → anchor to Portfolio section
- Image: use `wordpress-theme-starter/assets/img/hero-visual.jpg` (upload via Media Manager) or swap for Wix's own stock photo — content is what must match, not the exact image.

### 3. Services (min. 3 cards)

- `+ Add Section` → category **"Services"** → pick a 3-column card layout.
- Card 1 — **Website Development**: "Custom, fast, conversion-focused websites built to grow with your business — not another templated brochure site."
- Card 2 — **Branding**: "Identity systems — logo, palette, type, voice — that make a new company feel established from day one."
- Card 3 — **Digital Design**: "UI/UX, landing pages, and campaign assets designed to convert visitors into leads."
- Icons: use the Lucide SVGs in `wordpress-theme-starter/assets/img/icons/` (`laptop.svg`, `palette.svg`, `layout-grid.svg`) — upload as images, or use Wix's built-in icon picker and search for the same shapes (laptop / palette / grid).

### 4. Why NOVA (3–4 reasons)

- `+ Add Section` → category **"About"** or **"Features"** → pick a 3–4 column layout.
1. **Senior-level craft** — Every project is led by experienced designers and developers, not templates.
2. **Built for growth** — We design systems that scale with your business, not just a one-off page.
3. **Fast, transparent process** — Clear timelines and weekly updates so you always know what is next.
4. **Results you can measure** — Every design decision is tied back to trust, conversion, and clarity.

### 5. Portfolio (min. 3 cards)

- `+ Add Section` → category **"Gallery" / "Portfolio"** → pick a card-grid layout.
1. **Solstice Coffee Co.** — *Branding* — "Full identity refresh for a 3-location specialty roaster: new mark, packaging system, and café signage."
2. **Ledgerly** — *Website Development* — "Marketing site + onboarding flow for a fintech bookkeeping SaaS, built for conversion."
3. **Kindred Studio Yoga** — *Digital Design* — "Booking-first website and social templates for a boutique wellness studio."
4. **Northbound Freight** — *Website Development* — "Corporate site redesign for a logistics company, focused on lead capture and trust signals."
- Thumbnails: `portfolio-solstice-coffee.jpg`, `portfolio-ledgerly.jpg`, `portfolio-kindred-yoga.jpg`, `portfolio-northbound-freight.jpg` in `assets/img/`.
- *(Optional, CMS depth)* wire this section to a `Portfolio` collection via Repeater + Dataset instead of static cards — see `wix-velo-starter/cms-collections.md`. Not required; static cards satisfy the brief.

### 6. Process (min. 4 steps)

- `+ Add Section` → category **"Process" / "Steps" / "How it works"** → pick a numbered horizontal or vertical layout.
1. **Discovery** — "We start with a working session to understand your goals, audience, and constraints before any design begins."
2. **Strategy** — "We define the sitemap, content direction, and success metrics so design decisions have a clear rationale."
3. **Design** — "Wireframes to high-fidelity visuals, reviewed with you at each stage — no surprise reveals."
4. **Build** — "Development in parallel with final design polish, so nothing gets lost in translation."
5. **Delivery** — "Launch, plus a short handover session and 30 days of post-launch support."
- Icons (optional): `search.svg`, `compass.svg`, `pen-tool.svg`, `code-2.svg`, `rocket.svg` in `assets/img/icons/`.

### 7. Testimonials (min. 2)

- `+ Add Section` → category **"Testimonials"** → pick a quote-card layout.
1. "NOVA rebuilt our site in three weeks and our consultation bookings doubled the first month." — **Maya Alderton**, Founder, Solstice Coffee Co.
2. "They actually listened to how our business works instead of pushing a template at us." — **Devon Ruiz**, Head of Marketing, Ledgerly
3. "Professional, fast, and the final brand felt like us — not a generic startup look." — **Priya Shah**, Owner, Kindred Studio Yoga
- Avatars: `avatar-maya-alderton.png`, `avatar-devon-ruiz.png`, `avatar-priya-shah.png` in `assets/img/`.
- *(Optional, CMS depth)* wire to a `Testimonials` collection via Repeater + Dataset — see `cms-collections.md`. Not required.

### 8. Final CTA + Consultation Form

- `+ Add Section` → category **"Contact" / "Call to Action"** → pick one with a headline + short form (Name, Email, Company, Message) + Submit button.
- Headline: `Ready to build something people trust?`
- Subhead: `Book a free 30-minute consultation and let's map out your next website, brand, or digital campaign.`
- This is the form that must go through **Velo**, not Wix's no-code "Connect to CMS" — stop here and follow the separate wiring steps below before moving to Footer.

#### Wiring the form (only now, turn on Dev Mode)

1. Top menu → **Dev Mode → Turn on Dev Mode**.
2. CMS panel → create collection **`ConsultationRequests`** per `wix-velo-starter/cms-collections.md` (fields: name, email, company, message, status). Set permissions to **Content Manager only**.
3. Click each form element (Name/Email/Company/Message inputs, Submit button, and add a hidden/collapsed Text element for feedback) → set IDs via the top toolbar: `#inputName`, `#inputEmail`, `#inputCompany`, `#inputMessage`, `#btnSubmit`, `#formMessage`.
4. Left panel → **Backend** → **+ New File** → name it `consultation.jsw` → paste contents of `wix-velo-starter/backend/consultation.jsw`.
5. Select the page → **Page Code** panel → paste `wix-velo-starter/page-code-example.js`, confirm the `$w('#...')` IDs match step 3.
6. **Preview** → submit the form → check the CMS collection for a new row. Submit the same email again within 24h → confirm no duplicate row is created (message should say "already have your request").

### 9. Footer

- Wix auto-adds a footer strip at the very bottom, or `+ Add Section` → **Footer**.
- Nav links: Services, Portfolio, Process, Testimonials (anchor to matching sections).
- Contact email: `hello@novastudio.co`
- Social (fictional): Instagram `@novastudio.co`, LinkedIn `/company/nova-studio`
- Copyright: `© 2026 NOVA Studio. All rights reserved.`

---

## After all 8 sections exist

1. Set **Site Theme** colors/fonts to match WP exactly (see `docs/design-notes.md`): `#1E1B4B` / `#14132B` / `#FAF9F6` / `#FF6B4A`, heading Sora/Poppins, body Inter.
2. Open **Mobile View** (top toolbar) and do a manual layout pass per section — Wix does not auto-reflow.
3. Compare against the live WordPress build side by side; log any drift in `docs/superpowers/SYNC.md`.
4. **Publish** → copy the live URL.
5. **Site → Collaborators → Invite** the evaluator (not your personal Wix login).
