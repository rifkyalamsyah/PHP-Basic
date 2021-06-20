<?php

// Mengakses Variable di luar Closure

$firshName = "Rifky";
$lastName = "Alamsyah";

$sayHi = function () use ($firshName, $lastName) {
    echo "Hi $firshName $lastName" . PHP_EOL;
};
$sayHi();

$firshName = "Nima";
$lastName = "Visual";
$sayHi();