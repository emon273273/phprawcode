<?php

$person = array(

    "fname" => "hello",
    "lname" => "world"
);


$newperson = $person;

$newperson['lname'] = "pluto";
print_r($person);
print_r($newperson);

//akta variable a jokhn arekta variable copy korbo tokhn duita dui rokom hisebe kaj korbe

//jodi chai aktay change korle duitai change hok sekhtere

echo "new topic";
echo PHP_EOL;
$person1 = array(

    "fname" => "hello",
    "lname" => "world"
);


$newperson1 =& $person1; //copy by ref ba shallow copy 

$newperson1['lname'] = "pluto";
print_r($person1);
print_r($newperson1);