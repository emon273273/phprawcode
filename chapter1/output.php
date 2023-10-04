<?php

$name = "emon";

var_dump($name); // var dumb sob information day

$age = 12.3;
echo ("\n");

var_dump(($age));

//duita variable er information o aksathe dekhte pari

var_dump($name, $age);


//string er uppercase .. 

echo "my name is {strtoupper($name)}"; // but ekhane amar method cholse na. sekhetre ami akta kaj korte pari seta hosse ami printf use korte pari
echo ("\n");
printf("my upper case nam is %s", strtoupper($name)); //evabe amra easily kaj korte pari bivinno method 



//bivinno way te print

$planet1="Mercury";
$planet2="Jupiter";

echo "The smallet planet is ".$planet1."and the biggest planet is".$planet2."\n";

echo "The smallet planet is {$planet1}and the biggest planet is{$planet2}\n";

printf("The smallest planet is %s and the biggest planet is %s\n",$planet1,$planet2);

