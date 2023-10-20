<?php

class calculation
{

    public $a, $b, $c; // properties

    function sum()
    { // method

        $this->c = $this->a + $this->b;
        return $this->c;

    }
}


$c1 = new calculation(); //new object

$c1->a = 20;
$c1->b = 30;

echo $c1->sum(); //50


$c2 = new calculation(); //new object
$c2->a = 20;
$c2->b = 1;

echo PHP_EOL;
echo $c2->sum(); //21