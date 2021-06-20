<?php

// Callback Function

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rifky", "strtoupper");
sayHello("Rifky", "strtolower");
sayHello("Rifky", function(string $name): string{
    return strtoupper($name);
});
sayHello("Rifky", fn($name) => strtolower($name));
