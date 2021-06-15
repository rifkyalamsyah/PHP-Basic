<?php

// Nul Coalescting Operator

// Example
// Tanpa Nul Coalescting Operator
// $data = [];

// if (isset($data['action'])) {
//     $action = $data['action'];
// } else {
//     $action = 'nothing';
// }

// echo $action . PHP_EOL;

// Example
// Nul Coalescting Operator
$data = [
    "action" => "create"
];
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;
