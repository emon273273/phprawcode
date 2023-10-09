<?php

//array_chunk() function splits an array into chunks of new arrays 

$cars = array("Volvo", "BMW", "Toyota", "Honda", "mercedes", "opel");

print_r(array_chunk($cars, 3));

/*
 
Array
(
    [0] => Array
        (
            [0] => Volvo
            [1] => BMW
            [2] => Toyota
        )

    [1] => Array
        (
            [0] => Honda
            [1] => mercedes
            [2] => opel
        )

)


*/


echo PHP_EOL;
$person = array(
    "Mohan" => "35",
    "Aman" => "36",
    "Ram" => "43",
    "salman" => "46"
);


$newperson = array_chunk($person, 2, true); //true diyesi fole nam key te preserve hbe 
print_r($newperson);

/*
Array
(
    [0] => Array
        (
            [Mohan] => 35
            [Aman] => 36
        )

    [1] => Array
        (
            [Ram] => 43
            [salman] => 46
        )

)

*/