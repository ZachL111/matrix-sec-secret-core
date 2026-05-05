<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(68, 104, 11, 19, 8);
assert(Policy::score($signal_case_1) === 163);
assert(Policy::classify($signal_case_1) === "accept");
$signal_case_2 = new Signal(75, 96, 16, 22, 13);
assert(Policy::score($signal_case_2) === 169);
assert(Policy::classify($signal_case_2) === "accept");
$signal_case_3 = new Signal(87, 99, 12, 5, 5);
assert(Policy::score($signal_case_3) === 249);
assert(Policy::classify($signal_case_3) === "accept");
