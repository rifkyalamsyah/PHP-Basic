<?php

// Type Decralation 

// Example int
function sum(int $firsh, int $last)
{
    $total = $firsh + $last;
    echo "Total $firsh + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
// sum([], []) Tidak bisa mengkonversi otomatis dari aray ke int
// 