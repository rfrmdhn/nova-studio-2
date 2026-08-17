# NOVA Studio — Deliverables Checklist (PDF §9)

Tick every box before submitting. Mirrors `EXECUTION_PLAN.md` §5 and
`docs/superpowers/specs/2026-08-15-nova-studio-design.md` §7.

- [ ] Live link — WordPress (LocalWP Live Link), verified in an incognito window
- [ ] Live link — Wix (Publish), verified in an incognito window
- [ ] WordPress admin credential — dedicated `evaluator` Administrator user (not personal login)
- [ ] Wix CMS/dashboard credential — Collaborator invite (not personal account password)
- [ ] Screenshot — WordPress desktop (1440px)
- [ ] Screenshot — WordPress mobile (375px)
- [ ] Screenshot — Wix desktop (1440px)
- [ ] Screenshot — Wix mobile (375px)
- [ ] Design Notes (`docs/design-notes.md`) — finalized, screenshots attached
- [ ] Technical Notes (`docs/technical-notes.md`) — finalized, live URLs + credential placeholders filled in

## Requirement Sanity Check

- [ ] All 8 sections present on **both** platforms: Hero, Services (≥3), Why NOVA (3–4), Portfolio (≥3), Process (≥4), Testimonial (≥2), Final CTA, Footer
- [ ] 4 CPTs populated in WP with minimum counts met, ACF fields filled, featured images set
- [ ] 4 custom REST endpoints return correct JSON (`/services`, `/portfolio`, `/testimonials`, `/process`)
- [ ] Portfolio + Testimonials sections visibly populate via client-side fetch (check browser console for errors)
- [ ] Wix `ConsultationRequests` collection receives a real submission end-to-end via the Velo backend module
- [ ] Wix duplicate-submission guard tested (same email twice within 24h → no duplicate row)
- [ ] Responsive pass done on both platforms at 375 / 768 / 1440px
- [ ] WP vs Wix side-by-side comparison done, any drift logged in `docs/superpowers/SYNC.md`
