<?php

// $array1 = array("emon", "khalid", "emon");

// $key = array_search("emon", $array1);

// echo ($key);

// print_r(array_keys($array1));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

echo PHP_EOL;
print_r(array_values($array));
