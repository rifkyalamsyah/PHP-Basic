<?php

// Anonymous Function

// Example 1
$sayHello = function(string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Rifky");
$sayHello("Manda");

// Example 2
function sayGodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGodBye("Rifky", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtolower($name);
};

sayGodBye("Rifky", $filterFunction);

