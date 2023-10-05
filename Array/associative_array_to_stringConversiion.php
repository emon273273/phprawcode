<?php

$student = array(
    "fname" => "jamal",
    "lname" => " Ahmed",
    "age" => "15",
    "class" => 8,
    "section" => "A"
);


print_r($student); // array print kore dibe human readable 




//associative array ke string a print korte hole

echo join(",", $student); // eta diye kora jabe na
echo PHP_EOL;
// serialization kore

echo serialize($student);
echo PHP_EOL;

echo "\n convert to json\n";
//json a convert kore easily string korte pari
$jsondata = json_encode($student);

echo $jsondata;

//json to ager obosth
echo PHP_EOL;
$student1 = json_decode($jsondata, true);

echo "Json to Array\n";

print_r($student1); // tobe ekhane somossa hosse se stdclass object a convert kore  to amader ki korte hbe json_decode a 2nd parameter hisebe true dile hoye jabe ager moto array