<?php

//Data Extract

$fruit = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

//$sunfrutics = array_slice($fruit,2,3);
//$sunfrutics = array_slice($fruit,2);
$sunfrutics = array_slice($fruit,-5,5,true);

print_r($sunfrutics);

//Data Extract end

//Sorting the array

$fruit = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array ("a" => 12, "b"=> 20,  "c" => 25 , "b"=> 30, "e"=> 35, "f" => 40, "g"=>50);

$addfoods = array("avogado" , "tometo" , "Peyara");
$sumfruits = array_splice($fruit, -5 , 2, $addfoods);
print_r($sumfruits);
print_r($fruit);



$new_fruits = array("Avokado","Tomato","Peyara");
$sunfrutics = array_splice($fruit, -5, 2, $new_fruits);
print_r($sunfrutics);
print_r ($fruit);

// Sorting the array end


$student_name = [
    'MD MALITHA',
    'MD ROBIUL ISLAM',
    'SAGOR VAI',
    'SAKIB',
    'RASEL',
    'NAFI',
    'EVAN',
    'ROHAN'
];

$student_name [2] = 'Imtiaz vai' .'<br>' . 'Ismail vai';

$new = array_shift($student_name);
$new_student = count($student_name);
for($i=0; $i<$new_student; $i++){
    echo $student_name [$i];
    echo "<br>";
}
