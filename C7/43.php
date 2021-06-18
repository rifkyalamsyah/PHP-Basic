<?php

// Variable Function

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDiambil = "foo";
$functionYangAkanDiambil();

$functionYangAkanDiambil = "bar";
$functionYangAkanDiambil();

// Penggunaan Variable Function
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rifky", "strtoupper");
sayHello("Rifky", "strtolower");