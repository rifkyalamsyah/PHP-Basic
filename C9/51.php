<?php

// Array Function


$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Array_map
$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

// Versi Simple
$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);


// rsort
rsort($data);
var_dump($data);

// array_keys
var_dump(array_keys($data));
// array_values
var_dump(array_values($data));

$person = [
    "firshName" => "Rifky",
    "lastName" => "Alamsyah"
];

// array_keys
var_dump(array_keys($person));
// array_values
var_dump(array_values($person));