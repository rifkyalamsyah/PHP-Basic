<?php

// Perulangan
// For Each Loop

// Example
// Tanpa for each
$names = ["Nima", "Design", "Studio"];

for ($i = 0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}


// Menggunakan For Each
// kalo tidak butuh index
foreach($names as $name){
    echo "Data $name" . PHP_EOL;
}

// kalo butuh index
foreach($names as $index => $name){
    echo "Data ke $index = $name" . PHP_EOL;
}


// For Each denganKey
$person = [
    "firsh_name" => "Rifky",
    "middle_name" => "A",
    "last_name" => "Alamsyah"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}
