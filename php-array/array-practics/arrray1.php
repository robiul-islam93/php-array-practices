<?php

//index array

$index = array("Ismail vai", "Imtiaz Vai", "Anika Vabi","Rahat","Robi.");
$person = $index;
// echo " I Like a Person " . $person[0] . "  " .$person[1]. "  " .$person[2]. " and " .$person[3]. " " .$person[4];


//associative array

$associative = array( 

    "ismail hossain" => "Founder & M.D at CodeNext IT Solution",
    "imtiaz ahmed"  => "Founder & CEO at CodeNext IT Solution",
    "anika vabi" => "Chief Administrative Officer at CodeNext IT ",
);

foreach($associative as $person => $name){
    echo $person. ":" .$name;
}
