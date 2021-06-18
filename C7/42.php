<?php 

// Return Type Declaration

// Function Return Value 1
// tambahkan : int
function sum(int $firsh, int $second): int
{
    $total = $firsh + $second;
    return $total;
}

$result = sum(10, 10);
var_dump($result);

$result = sum(100, 100);
var_dump($result);


// Function Return Value 2
// tambahkan : string
function getFinalValue(int $value): string
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70) {
        return "B";
    } else if ($value >= 60) {
        return "C";
    } else if ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    echo "Ups" . PHP_EOL;
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(30);
var_dump($score);