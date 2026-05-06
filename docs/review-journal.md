# Review Journal

The cases below are the review handles I would use before changing the implementation.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 125, lane `watch`
- `stress`: `claim drift`, score 182, lane `ship`
- `edge`: `replay exposure`, score 171, lane `ship`
- `recovery`: `policy width`, score 217, lane `ship`
- `stale`: `trust boundary`, score 166, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.
