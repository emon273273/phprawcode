<?php

class person
{

    public $name, $age;

    function __construct($name, $age)
    {

        $this->name = $name;
        $this->age = $age;
    }

    function show()
    {

        echo $this->name . "and\n" . $this->age;
    }



}


$person1 = new person("emon", 25);

$person1->show();