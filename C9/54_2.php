<?php

// Variable Scope
// Globsl Keyword
// GLOBAL Variable

$name = "Rifky"; // Global Scope

function sayHello()
{
    global $name;  // Global Keyword
    echo $name . PHP_EOL;

    // GLOBALS Variable
    var_dump($GLOBALS);
    echo $GLOBALS["name"] . PHP_EOL;
}

SayHello();