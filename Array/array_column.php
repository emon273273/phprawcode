<?php
// An array that represents a possible record set returned from a database
$a = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);


//first name niye alada arekta array banabo

$newarray = array_column($a, "first_name", 'id');
/*
Array
(
    [5698] => Peter
    [4767] => Ben
    [3809] => Joe
)

 */

print_r($newarray, );