# Visual/Content Sync Log — WordPress ↔ Wix

WordPress is built first (Day 1) and owns the source-of-truth copy, palette, and section order (see `specs/2026-08-15-nova-studio-design.md`). Wix is built second (Day 2) against that reference. This log records every place the two platforms were found to diverge and how it was reconciled — PDF §7 explicitly grades "WordPress dan Wix harus memiliki visual consistency," so drift should be tracked, not silently patched on one side only.

Filled in during `plans/2026-08-15-wix-build.md` Task 5 (the side-by-side consistency check), and again if the Live Revision Test (PDF §10) surfaces a mismatch.

Log format:

```
## <date> — <what was compared>

- **Found:** <the discrepancy>
- **Cause:** <why it happened — e.g. Wix font picker rendered Sora slightly bolder than the Google Fonts weight used on WP>
- **Resolution:** <what was changed, and on which platform>
```

---

*(no entries yet — populate during the Day 2 consistency pass)*
