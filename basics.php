<?php
// Arrays e funções úteis
$nums = [1, 2, 3, 4, 5];
$doubled = array_map(fn($n) => $n * 2, $nums);
$evens = array_filter($nums, fn($n) => $n % 2 === 0);
$total = array_sum($nums);
var_dump($doubled, $evens, $total);
