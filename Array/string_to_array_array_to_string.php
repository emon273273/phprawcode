<?php

$vegetable = "brinjal,brocolli,carrot,capsicum";

echo $vegetable;
echo PHP_EOL;

//string theke array te convert

$arrayvegetable = explode(",", $vegetable);

echo PHP_EOL;

echo $arrayvegetable[1];

// string theke array
echo PHP_EOL;
$arratostring = join($arrayvegetable);

echo $arratostring;
echo PHP_EOL;
echo count($arrayvegetable); //4


echo PHP_EOL;

//-> amon jodi hoy string ogocalo so kivabe tokhon ami etake alada array te nibo mane , dhorte hbe abar space duita delimeter 

//sekhetre built in funcion preg_split use korbo 

$vegetable1 = "brinjal ,  brocolli , carrot,capsicum"; // carrot er por space ase

$arrayvegetable1 = explode(",", $vegetable1);

foreach ($arrayvegetable1 as $a) {

    echo "\nnew :$a\n";
}

