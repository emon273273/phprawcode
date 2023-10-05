<?php
$student = array(

    "rahim",
    "karim",
    123,
    "monir"
);
//->data operation  

//array shift

$studentspop = array_pop($student);
echo "poped element is : $studentspop";
echo "\n";
for ($i = 0; $i < $n; $i++) {
    # code...

    echo $student[$i] . "\n";
}

echo "\n";

// first element roemove korte chaile


$studentshift = array_shift($student);
echo "shifted  element is : $studentshift";
echo "\n";
for ($i = 0; $i < $n; $i++) {
    # code...

    echo $student[$i] . "\n";
}

echo "\n";

//array push
$student . array_push($student, "emon"); // pushed emon


for ($i = 0; $i < $n; $i++) {
    # code...

    echo $student[$i] . "\n";
}

//first a element dhukate chaile

// array_unshift($student,"emonsab");

$student . array_unshift($student, "emonsab", "leeman"); // uporer way teo dhukano jay abar nicher method akareo dhukano jay

echo "\n";
for ($i = 0; $i < $n; $i++) {
    # code...

    echo $student[$i] . "\n";
}