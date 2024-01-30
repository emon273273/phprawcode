<?php
function evenodd($n)
{

    if ($n % 2 == 0) {

        return true;
    } else {
        return false;
    }
}

$x = 12;
if (evenodd($x)):

    echo " this is even number";
else:
    echo "not evennumber";

endif;


//function er argument er type change

function emon(int $n)
{
    echo ("\n");
    echo "$n";
}

echo "hello world";

//emon("abc"); // error dibe karon type ta bole deya hoise

emon(33);

// abar amrachaile built in method diyeo etake thik rakhte pari


function emon2($x)
{

    if (gettype($x) != "integer") {

        echo "\ninvalid";
    }
    ;

    echo "\n result is $x";
}

emon2("e"); // invalid dibe


echo "\nfunction a defalut parameter value add\n";

function emon3($a, $b = 4)
{

    echo "{$a} and {$b}";
}


emon3(3);
//mone rakhbo first parameter jodi default dei sekhetre 2nd guli keo default dite hbei 


echo "\n unlimited argument accept kora\n";

function emon4(...$n)
{
    $result = 0;
    for ($i = 0; $i < count($n); $i++) {

        $result = $result + $i;

    }

    return $result;

}

echo ("\n");

echo emon4(1, 2, 3, 4, 5, 6);

//function er baire value nite chaile
echo "\n";
$name1 = "Earth";

function dosomething()
{

    global $name1;
    echo $name1;
}

dosomething();

// super global name built in asociated array ase


function dosomething1()
{

    echo $GLOBALS["name1"];
}

dosomething1();

// local scope

echo "\n";
function dosomething2()
{
    global $name3;
    $name3 = "this is local";
}


dosomething2();

echo $name3; // global declare er fole ekhn call hbe


//static scope man rekhe day


function dosomething3()
{

    static $i;
    $i = $i ?? 0;
    $i++;
    echo "\n $i";
}

dosomething3(); //1 
dosomething3(); //2

// -> static na dile always 1 dito


//function er  return value set kore deya

function a(...$y)
{
    $result = 0;


    for ($i = 0; $i <= count($y); $i++) {

        $result += $y[$i];
    }
    return $result;



}
echo "\n";
echo a(1, 2, 3, 5,9);