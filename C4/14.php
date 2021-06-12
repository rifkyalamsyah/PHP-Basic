<?php

// Operator Array

$firsh = [
    "firsh_name" => "Rifky"
];

$last =[
    "last_name" => "Alamsyah"
];

$full = $firsh + $last;
var_dump($full);


$a = [
    "firsh_name" => "Rifky",
    "last_name" => "Alamsyah"
];

$b = [
    "firsh_name" => "Rifky",
    "last_name" => "Alamsyah"
];

var_dump($a == $b);
