<?php

// //index array

// $index = array("Ismail vai", "Imtiaz Vai", "Anika Vabi","Rahat","Robi.");
// $person = $index;
// echo " I Like a Person " . $person[0] . "  " .$person[1]. "  " .$person[2]. " and " .$person[3]. " " .$person[4];
// echo"<br>";
// echo"<br>";
// echo"<br>";

// //associative array

// $associative = array( 

//     "ismail hossain" => "Founder & M.D at CodeNext IT Solution",

//     "imtiaz ahmed"  => "Founder & CEO at CodeNext IT Solution",

//     "anika vabi" => "Chief Administrative Officer at CodeNext IT ",
// );

// foreach($associative as $person => $name){
//     echo $person. ":" .$name;
//     echo"<br>";
//     echo"<br>";
// }


// //Multidimensional array

// $details = array(
//     array(" ISmail vai", "Dhaka", "To", "Pabna")

// );

// echo $details[0][0]. " " .$details[0][1]. " " .$details[0][2]. " ".$details[0][3];


// echo"<br>";
// echo"<br>";

// $student_name = [
//     "sakib",
//     "nafi",
//     "siam",
//     "Rahul"
// ];


// $student_name [2] = "Robi";

// $newname = count($student_name);
// // for($i=0; $i < $newname; $i++){
// //     echo $student_name[$i];
// //     echo"<br>";
// // }

// $student = array_push($student_name);
// // echo $student;
// echo"<br>";


// array_unshift($student_name, 'Rahat', 'Robi');

// $newname = count($student_name);
// for($i=0; $i < $newname; $i++){
//     echo $student_name[$i];
//     echo"<br>";
// }






// $student_name =[
//     'john',
//     'hiliyo',
//     'brolik',
//     'insrota',
//     'james'
// ];

// $student_name[3] = ("Rahul");
// $newname = count($student_name);
// for($i=0; $i<$newname;$i++){
//     echo $student_name[$i];
//     echo "<br>";
// }



$student_name = [
    'john',

     'hiliyo',

     'brolik',

     'insrota',

     'james'
];

$newname = join($student_name );
echo $newname;
echo "<br>";

$student_name[3] = ("Rahul");
$name = count($student_name);
for($i=0; $i<$name; $i++){
    echo $student_name[$i];
    echo "<br>";
}
  

$food = explode(',',' rice , beaf, morogpolaw, cocola, beaf, morogpolaw, cocola');

//Delimetar ','

var_dump($food);