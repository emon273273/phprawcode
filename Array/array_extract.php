<?php


$fruits = array("apple", "banana", "orange", "plum", "dates", "mango");


$someFruits = array_slice($fruits, 2, 3);

print_r($someFruits); //notun akta array toiri hoye gese


$someFruits2 = array_slice($fruits, 0, -2); //mango and dates bad

$someFruits3 = array_slice($fruits, -4, 2); //orange banana

echo PHP_EOL;

print_r($someFruits2);

echo PHP_EOL;

print_r($someFruits3);

// jodi index jeta jemon silo oita soho ante chai sekhetre amake arketa option hisebe add korte hbe  true dite hbe 



echo PHP_EOL;

$someFruits4 = array_slice($fruits, 3, NULL, true);


print_r($someFruits4);
/*
 Array
(
    [3] => plum
    [4] => dates
    [5] => mango
)
 */

echo PHP_EOL;
$random = array("a" => 12, "b" => 45, "c" => 34, "d" => 55);


$random_slice = array_slice($random, 1, Null);

print_r($random_slice);

//key value easily preserve hosse but jodi amon thake konotay key na thake sekhetre

