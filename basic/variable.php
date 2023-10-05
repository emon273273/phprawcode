<?php

$name = "Banglades";
$age = 123;

echo $name, $age;

//string er sathe  variavle
echo "\n";
echo "my age is " . $age;

echo "\n";
echo "my country name is $name";



//constant

define('PI', 3.14159);

echo "\n";
echo PI;

//constant ke string a rakhte pari na

//echo "value of pi {$PI}"; //hbe na


echo "value of pi" . PI; //evabe hbe 

//better way

$constant = 'constant';
echo "\n";
echo "value of pi ={$constant('PI')}";

//sprintf eta return kore

echo "\n";
$output = sprintf("his name is " . $name);


echo $output;

//ekhn chaile boro output o show korte pari
echo ("\n");
echo (strtoupper($output));