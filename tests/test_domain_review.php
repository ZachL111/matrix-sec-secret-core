<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(46, 36, 27, 78);
assert(DomainReviewLens::score($item) === 125);
assert(DomainReviewLens::lane($item) === "watch");
