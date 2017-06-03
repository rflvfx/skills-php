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
- Improve error handling — iteration 45 (2016)
- Extend coverage — iteration 47 (2016)
- Minor cleanup — iteration 48 (2016)
- Improve naming — iteration 53 (2016)
- Add example — iteration 59 (2016)
- Extend coverage — iteration 2 (2017)
- Minor cleanup — iteration 7 (2017)
- Add helper — iteration 9 (2017)
- Refactor module — iteration 13 (2017)
- Update dependencies — iteration 19 (2017)
