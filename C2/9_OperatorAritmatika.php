<?php

// Operator Aritmatika (1)

// +$variabel                   = positif
// -$variabel                   = negatif
// $variabel + $variabel        = penambahan
// $variabel - $variabel        = pengurangan
// $variabel * $variabel        = perkalian
// $variabel / $variabel        = pembagian


// Operator Aritmatika (2)
// $variabel % $variabel        = sisa bagi
// $variabel ** $variabel       = pangkat

// ----------------------------------------------------//

// contoh
$a = 10;
$b = 5;
// penambahan
$result = $a + $b;
var_dump($result);

// result negatif
$resultNegative = -$result;
var_dump($resultNegative);
// result positif
$resultPositive = +$result;
var_dump($resultPositive);

// contoh
// pembagian / sisa bagi
$resultModulo = 100 % 3;
var_dump($resultModulo);