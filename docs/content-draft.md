# NOVA Studio — Content Draft (ready to paste)

Canonical dummy copy for all 8 required sections. Hero / Why NOVA / Final CTA are
copied verbatim from the static templates (`wordpress-theme-starter/template-parts/`)
so this document and the code never disagree — if you change copy, change it in
**both** places. Everything else (Services, Portfolio, Process, Testimonials) has
no home in code yet — paste these into wp-admin as CPT posts during the WP build,
and into the matching Wix sections during the Wix build.

---

## Hero
*(source: `template-parts/section-hero.php`)*

- **Headline:** We design digital experiences that make small businesses look world-class.
- **Subhead:** NOVA Studio helps founders and marketing teams launch websites, brand identities, and digital design that build trust and win customers.
- **Primary CTA:** Book a Consultation
- **Secondary CTA:** View Our Work

## Services (CPT `service` — min. 3)

1. **Website Development**
   Custom, fast, conversion-focused websites built to grow with your business — not another templated brochure site.
   *Icon:* `dashicons-laptop`

2. **Branding**
   Identity systems — logo, palette, type, voice — that make a new company feel established from day one.
   *Icon:* `dashicons-art`

3. **Digital Design**
   UI/UX, landing pages, and campaign assets designed to convert visitors into leads.
   *Icon:* `dashicons-layout`

## Why NOVA (3–4 reasons)
*(source: `template-parts/section-why.php`)*

1. **Senior-level craft** — Every project is led by experienced designers and developers, not templates.
2. **Built for growth** — We design systems that scale with your business, not just a one-off page.
3. **Fast, transparent process** — Clear timelines and weekly updates so you always know what is next.
4. **Results you can measure** — Every design decision is tied back to trust, conversion, and clarity.

## Portfolio (CPT `portfolio_item` — min. 3)

1. **Solstice Coffee Co.** — *Branding* — Full identity refresh for a 3-location specialty roaster: new mark, packaging system, and café signage.
2. **Ledgerly** — *Website Development* — Marketing site + onboarding flow for a fintech bookkeeping SaaS, built for conversion.
3. **Kindred Studio Yoga** — *Digital Design* — Booking-first website and social templates for a boutique wellness studio.
4. **Northbound Freight** — *Website Development* — Corporate site redesign for a logistics company, focused on lead capture and trust signals.

## Process (CPT `process_step` — min. 4)

1. **Discovery** — We start with a working session to understand your goals, audience, and constraints before any design begins.
2. **Strategy** — We define the sitemap, content direction, and success metrics so design decisions have a clear rationale.
3. **Design** — Wireframes to high-fidelity visuals, reviewed with you at each stage — no surprise reveals.
4. **Build** — Development in parallel with final design polish, so nothing gets lost in translation.
5. **Delivery** — Launch, plus a short handover session and 30 days of post-launch support.

## Testimonials (CPT `testimonial` — min. 2)

1. **Quote:** "NOVA rebuilt our site in three weeks and our consultation bookings doubled the first month."
   **Name:** Maya Alderton
   **Role/Company:** Founder, Solstice Coffee Co.

2. **Quote:** "They actually listened to how our business works instead of pushing a template at us."
   **Name:** Devon Ruiz
   **Role/Company:** Head of Marketing, Ledgerly

3. **Quote:** "Professional, fast, and the final brand felt like us — not a generic startup look."
   **Name:** Priya Shah
   **Role/Company:** Owner, Kindred Studio Yoga

## Final CTA
*(source: `template-parts/section-cta.php`)*

- **Headline:** Ready to build something people trust?
- **Subhead:** Book a free 30-minute consultation and let's map out your next website, brand, or digital campaign.
- **CTA:** Book a Consultation → `mailto:hello@novastudio.co`

## Footer
*(source: `footer.php`)*

- **Nav links:** Services, Portfolio, Process, Testimonials *(anchor links to matching section IDs: `#services`, `#portfolio`, `#process`, `#testimonials`)*
- **Contact email:** hello@novastudio.co
- **Social handles (fictional):** Instagram — @novastudio.co · LinkedIn — /company/nova-studio
- **Copyright:** © 2026 NOVA Studio. All rights reserved.
