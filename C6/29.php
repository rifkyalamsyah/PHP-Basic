<?php


// Perulangan
// For Loop


// Example For Loop
// for ( ; ; ){
//     echo "Ini adalah for loop" . PHP_EOL;
// }


// Example
// Perulangan dengan Kondisi
$counter = 1;

for ( ; $counter <= 10 ; ){
    echo "Ini adalah for loop ke:$counter" . PHP_EOL;
    $counter++;
}

// Init Statement
for ($counter = 1 ; $counter <= 10 ; ){
    echo "Ini adalah for loop ke - $counter" . PHP_EOL;
    $counter++;
}


// Post Statement
for ($counter = 1 ; $counter <= 10 ; $counter++){
    echo "Ini adalah for loop ke = $counter" . PHP_EOL;
}
for ($counter = 10 ; $counter >= 1 ; $counter--){
    echo "Ini adalah for loop ke - $counter" . PHP_EOL;
}



// Syntax Alternatif
// For loop
for ($counter = 1 ; $counter <= 10 ; $counter++):
    echo "Ini adalah for loop ke = $counter" . PHP_EOL;
endfor;

for ($counter = 10 ; $counter >= 1 ; $counter--):
    echo "Ini adalah for loop ke - $counter" . PHP_EOL;
endfor;
