<?php

$age = array("peter" => "35", "Ben" => "37", "joe" => "53");

print_r(array_change_key_case($age, CASE_UPPER));


$newupperage = (array_change_key_case($age, CASE_UPPER));

print_r($newupperage);