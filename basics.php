<?php
// Arrays e funções úteis
$nums = [1, 2, 3, 4, 5];
$doubled = array_map(fn($n) => $n * 2, $nums);
$evens = array_filter($nums, fn($n) => $n % 2 === 0);
$total = array_sum($nums);
var_dump($doubled, $evens, $total);
- Minor cleanup — iteration 14 (2015)
- Refactor module — iteration 32 (2015)
- Improve error handling — iteration 35 (2015)
- Polish code — iteration 40 (2015)
- Tweak implementation — iteration 41 (2015)
