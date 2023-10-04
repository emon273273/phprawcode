<?php
$n = 12;

if ($n % 2 == 0) {

    echo "$n is even";
} else {

    echo "$n is not even";

}

echo "\n";
if (true && true) {
    echo "wow1";
}

echo "\n";
if (false && true) {
    echo "wow2";
}

echo "\n";
if (false && false) {
    echo "wow3";
}

echo "\n";
if (false or true) {
    echo "wow2";
}

echo "\n";


//ternary operator

$n = 12;

$numberinword = (12 == $n) ? "tweleve" : "other";

echo $numberinword; //twelve



//another example

echo "\n";

$result = ($n % 2 == 0) ? "even" : "odd";

echo $result;

//multiple check
echo "\n";
$result2 = (12 == $n) ? "twelve" : ((13 == $n) ? "thirteen" : "othoer");
echo $result2;
echo "\n";
$foo = 1;
$bar = ($foo == 1) ? "1" : (($foo == 2) ? "2" : "other");
echo $bar;

echo PHP_EOL; // end of the line

echo "hello";

// if else aro easy way te


if ($n%2==0):
    echo "even";
elseif($n==0):

    echo "another";
else:
    echo "odd";

endif;