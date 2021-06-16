<?php

// Perulangan
// While Loop

while ($counter <= 10){
    echo "Ini adalah for while ke = $counter" . PHP_EOL;
    $counter++;
}


// Syntax Alternative
while ($counter <= 10) :
    echo "Ini adalah for while ke = $counter" . PHP_EOL;
    $counter++;
endwhile;