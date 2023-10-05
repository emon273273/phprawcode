<?php

// key value thakbe

$student = [

    "12" => "hasan",
    "13" => "jalal",
    "20" => "emon"
];

// acess

echo $student['12']; //hasan

//more example

$food = [
    'vegetable' => "brinjal,brocolli,carrot,capsicum",
    "fruit" => "orange,banana,apple",
    "drinks" => "cocacola,pepsi"
];

echo "\n";

echo $food['vegetable']; //brinjal,brocolli,carrot,capsicum

//array er modhe loop

// for ($i = 0; $i < count($food); $i++) {

//     echo $food[$i]; // evabe pabo na amake for each loop chalate hbe
// }



foreach ($food as $key => $value) {

    echo "$key = $value\n";
}

echo "\n";
// aro ekta system

$keys = array_keys($food);
print_r($keys);

//ekhon chaile normal loop chalate pari

echo "normal loop chaliye\n";
for ($i = 0; $i < count($keys); $i++) {

    echo $keys[$i] . "\n"; // key guli pabe
} //vegetable
//fruit
//drinks


echo "\nkey guli diye value acess\n";

for ($i = 0; $i < count($keys); $i++) {

    echo $food[$keys[$i]] . "\n"; //all value print
}

// method er madhome
echo "\n method er madhome \n";

$values = array_values($food);

for ($i = 0; $i < count($values); $i++) {

    echo $values[$i] . "\n";
}

//for each is vary easy



//-> element add suppose amake drinks er modhe orange juice add korte hbe


echo "\n";
$food["drinks"] .= ",orange juice";
echo $food["drinks"];


//associative array theke data remove;

echo PHP_EOL;


unset($food['drinks']); // drink er data delete hoye gese


print_r($food);