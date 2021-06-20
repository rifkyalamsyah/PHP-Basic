<?php

// Arrow Function
// Alternative Anonymous Function

// Example
$firshName = "Rifky";
$lastName = "Alamsyah";

$anonymousFunction = function () use ($firshName, $lastName) : string {
    return "Helllo $firshName $lastName" . PHP_EOL;
};

// Arrow Function
$arrowFunction = fn() => "Hello $firshName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();