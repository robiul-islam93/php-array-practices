<?php

//Data Extract

//array_slice the arrat start

$fruit = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

$fruit = array_slice($fruit,2,3);
// $sunfrutics = array_slice($fruit,2);
// $sunfrutics = array_slice($fruit,-5,5,true);

// print_r($fruit);
echo "<br>";
echo "<br>";
//array_slice the arrat end

//Data Extract end

// array_splice the array

$fruit = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array ("a" => 12, "b"=> 20,  "c" => 25 , "b"=> 30, "e"=> 35, "f" => 40, "g"=>50);

$addfoods = array("avogado" , "tometo" , "Peyara", "helloo");
$sumfruits = array_splice($fruit, -3 , 2, $addfoods);
print_r($sumfruits);
print_r($fruit);

echo "<br>";
echo "<br>";


// $new_fruits = array("Avokado","Tomato","Peyara");
// $sunfrutics = array_splice($fruit, -5, 2, $new_fruits);
// print_r($sunfrutics);
// print_r ($fruit);
// echo "<br>";
// echo "<br>";

// // array_splice the array end


// $student_name = [
//     'MD MALITHA',
//     'MD ROBIUL ISLAM',
//     'SAGOR VAI',
//     'SAKIB',
//     'RASEL',
//     'NAFI',
//     'EVAN',
//     'ROHAN'
// ];


// $student_name [4] = 'james' .'<br>'.  'Rasmus Lerdrof';
// $new_student = count($student_name);
// for($i = 0; $i<$new_student; $i++){
//     echo $student_name [$i];
//     echo "<br>";
// }




// // $student_name [2] = 'Imtiaz vai' .'<br>' . 'Ismail vai';

// // // $new = array_shift($student_name);
// // $new_student = count($student_name);
// // for($i=0; $i<$new_student; $i++){
// //     echo $student_name [$i];
// //     echo "<br>";
// // }




// $information =[
//     "name" => "Robiul",
//     "Roll" => "125454",
//     "1985",
//     "css"
// ];

// print_r($information);