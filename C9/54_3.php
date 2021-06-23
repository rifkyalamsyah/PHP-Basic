<?php

// Variable  Static Scope

function increment()
{
    static $counter = 1; // Static Scope

    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();
