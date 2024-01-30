<?php


echo "unlimited argument pass in the  php function";

function unlimited(...$n){

    $result=0;
    for($i=0;$i<count($n);$i++){

        $result=$result+$i;
    }

    return $result;
}

echo("\n");

echo unlimited(1,2,3,4,5,6,7,5,4,2,100); // unlimited pass 