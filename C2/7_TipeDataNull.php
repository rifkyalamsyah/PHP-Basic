<?php

// Null
$name = "Rifky";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// is Null
echo "is name null? : ";
var_dump(is_null($name));
echo "\n";

// menghapus variabel
$contoh = "Rifky";
unset($contoh);

echo $contoh;

// isset (mengecek variabel)
$contoh = "Alamsyah";
$contoh = null;

var_dump(isset($contoh));