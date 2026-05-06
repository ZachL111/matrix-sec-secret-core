# Matrix Sec Secret Core Walkthrough

The fixture is intentionally compact, so the review starts with the cases that pull farthest apart.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 125 | watch |
| stress | claim drift | 182 | ship |
| edge | replay exposure | 171 | ship |
| recovery | policy width | 217 | ship |
| stale | trust boundary | 166 | ship |

Start with `recovery` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

`recovery` is the optimistic case; use it to make sure the scoring path still rewards strong signal.
