<?php

// Array
// Example 1
$values = array(10,9,8,7.5);
var_dump($values);

// Example 2
$names = ["Rifky","kiki","sem"];
var_dump($names);


// menampilkan/mengakses array ke 1
var_dump($names[0]);


// mengganti array
$names[0] = "nima";
var_dump($names);


// menghapus array
unset($names[1]);
var_dump($names);


// menambahkan data ke dalam array
$names[] = "Rifky";
var_dump($names);


// mengambil/menampilkan total data di array
var_dump(count($names));


// -----------------------------------------------//


// Array sebagai Map
// contoh map
$kiki = array(
    "id" => "kiki",
    "name" => "Kiki nima",
    "age" => 20
);
var_dump($kiki);
var_dump($kiki["name"]);


$nima = [
    "id" => "nima",
    "name" => "nima visual",
    "age" => 24
];
var_dump($nima);
var_dump($nima["name"]);


// --------------------------------------------------//


// Array di dalam array
$kiki = array(
    "id" => "kiki",
    "name" => "Kiki nima",
    "age" => 20,
    "address" => array(
        "city" => "jakarta",
        "country" => "indonesia"
    )
);
var_dump($kiki);
// cara menampilkan array di dalam array
// contohnya menampilkan nama dan address country
var_dump($kiki["name"]);
var_dump($kiki["address"]["country"]);



$nima = [
    "id" => "nima",
    "name" => "nima visual",
    "age" => 24,
    "address" => [
        "city" => "jakarta",
        "country" => "indonesia"
    ]
];