<?php

$name = 0;
if (isset($name)) {
    echo "name is set";
} else {

    echo "not set ";
}

//but empty check korte gele 
echo PHP_EOL;
if (empty($name)) {
    echo "name is empty";
} else {
    echo "not empty";
}
//name is empty dibe jeta somossa eta theke bachte hole

echo PHP_EOL;

if (isset($name) && (is_numeric($name) || $name != '')) {

    echo "name is set and not empty";
} else {
    echo "name is empthy";
}