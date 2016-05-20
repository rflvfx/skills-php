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
- Add tests — iteration 48 (2015)
- Fix lint warnings — iteration 49 (2015)
- Polish code — iteration 55 (2015)
- Improve error handling — iteration 7 (2016)
- Fix lint warnings — iteration 18 (2016)
- Tweak implementation — iteration 26 (2016)
- Update dependencies — iteration 28 (2016)
- Update config — iteration 29 (2016)
- Update docs — iteration 32 (2016)
- Fix lint warnings — iteration 39 (2016)
