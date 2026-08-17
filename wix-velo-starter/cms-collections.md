# Wix CMS Collections — NOVA Studio

## ConsultationRequests (required — Task B core: form + CMS + Velo)

| Field | Type | Notes |
|---|---|---|
| name | Text | required |
| email | Text | required, validated in `consultation.jsw` |
| company | Text | optional |
| message | Text (long) | optional |
| status | Text | default `"new"`, for manual follow-up tracking |
| _createdDate | Date (auto) | used for the duplicate-submission check |

**Permissions:** set to Content Manager only (no visitor read/write access in
Collection Permissions). All writes go through the Velo backend module, never
through a client-side `wix-data` insert — this keeps validation and the
duplicate check enforceable no matter what the client sends.

## Testimonials (optional — no-code CMS depth beyond the form)

| Field | Type |
|---|---|
| clientName | Text |
| roleCompany | Text |
| quote | Text (long) |
| avatar | Image |

## Portfolio (optional — no-code CMS depth beyond the form)

| Field | Type |
|---|---|
| projectName | Text |
| category | Text |
| image | Image |
| projectUrl | URL (optional) |

Testimonials/Portfolio can be wired with a Repeater + Dataset (Wix's built-in
"Connect to CMS" panel, no Velo code required) so the Wix build demonstrates
CMS usage beyond just the form. `ConsultationRequests` is the one collection
that must go through Velo, since that's the explicit Task B requirement
(back-end module handling server-side logic).
