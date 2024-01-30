<?php

function myfunction() {
    echo "this text comes from a function";
}

$cars = array("volvo", "bmw", "toyota", 'myfunction');

// Accessing the function at index 3
if (is_callable($cars[3])) {
    $cars[3]();
}

// Printing the entire array
print_r($cars);

// Printing additional text
print("emon");

//count the element 
echo PHP_EOL; //4;
echo count($cars);

var_dump($cars);

//loop through index array

array_push($cars,"marcities");
foreach($cars as $x){

    echo "$x".PHP_EOL;
}

var_dump($cars);

echo "associative array";

echo PHP_EOL;

$car=array("brand"=>"Ford","model"=>"mustang","year"=>1994);
//var_dump($car);
print_r($car);

$car["year"]=2024;

print_r($car);

echo "loop through an associative array";

foreach($car as $x=>$y){

    echo "key is ".$x." and value is ".$y;
    echo PHP_EOL;
}

//new way array
echo "change all value in volvo";
echo PHP_EOL;


foreach($cars as &$x){
$x="Ford";
}

// unset($x);
print_r($cars);
//var_dump($cars);

//remove array item

unset($cars[0],$cars[1]); //0,1 gayeb hoye jabe

print_r($cars);

//array splice dara delete

$cars1 = array("Volvo", "BMW", "Toyota");

array_splice($cars1,1,2); //just volvo thakbe

print_r(($cars1));


//remove item from associative array

$cars2=array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars2['model'],$cars2['brand']);
print_r($cars2);

//sorting arrays
?>
