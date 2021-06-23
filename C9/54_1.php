<?php

// Variable Scope
//local scope

function createname()
{
    $name = "Rifky"; //local scope
}

createname();
echo $name; //error