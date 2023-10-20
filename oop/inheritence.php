<?php

class employee{

    public $name;
    public $age;
    public $salary;


    function __construct($n,$a,$s){

        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }

    function info(){

        echo "employee profile\n";
        echo "name is ".$this->name;
        echo PHP_EOL;
        echo "age is ".$this->age;
        echo PHP_EOL;

        echo "salary is".$this->salary;

    }
}


class manager extends employee{

    



function info(){
    
    echo "employee profile\n";
    echo "name is ".$this->name;
    echo PHP_EOL;
    echo "age is ".$this->age;
    echo PHP_EOL;
     echo "id is".$this->age+$this->salary;
     echo PHP_EOL;
    echo "salary is".$this->salary;


}

}

$e1=new employee("emon",24,4000);

$e1->info();

$e2=new manager("shakib",23,400);
echo PHP_EOL;
$e2->info();

