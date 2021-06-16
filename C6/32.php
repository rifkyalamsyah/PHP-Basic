<?php

// Break & Continue


// Break
$counter = 1;

while (true){
    echo "Ini adalah for while ke = $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10){
        break;
    }
}

// Continue
for ($counter = 1; $counter <= 100; $counter++){
    if($counter % 2==0){
        continue;
    }
    echo "counter ke : $counter" . PHP_EOL;
}