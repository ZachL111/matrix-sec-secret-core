# matrix-sec-secret-core

`matrix-sec-secret-core` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for secret simulation kernel, using seeded input scenarios and deterministic summary checks.

## Why I Keep It Small

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Matrix Sec Secret Core Review Notes

For a quick review, compare `policy width` with `trust boundary` before reading the middle cases.

## Included Behavior

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/matrix-sec-secret-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Internal Model

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Try It Locally

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Validation

The verifier is intentionally local. It should fail if the fixture score math, lane assignment, or language-specific test drifts.

## Scope

This remains a local project with deterministic fixtures. It does not depend on credentials, hosted services, or live data. Future work should add richer malformed inputs before widening the public API.
