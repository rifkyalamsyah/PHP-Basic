<?php

// Function Argument

function sayHello($name) {
    echo "Hello $name" . PHP_EOL;
}

sayHello("Rifky");
SayHello("Nima");



// Default Function Argument
function sayHi($name = "Anonymous")
{
    echo "Hi $name" . PHP_EOL;
}

sayHi("Manda");
SayHi("Nima");
sayHi();



// Kesalahan Default Function Argument

// function sayHey($firshname = "Anonymous", $lastName)
// {
//     echo "Hello $firshname $lastName" . PHP_EOL;
// }

// sayHey("Rifky");
// sayHey("Manda");
// sayHey( , "Alamsyah");



// yg benar
function sayHey($firshname, $lastName = "")
{
    echo "Hey $firshname $lastName" . PHP_EOL;
}
sayHey("Rifky");
sayHey("manda");
sayHey("Rifky", "Alamsyah");