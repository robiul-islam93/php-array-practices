<?php

// sort() - sort arrays in ascending order.
// rsort() - sort arrays in descending order.
// asort() - sort associative arrays in ascending order, according to the value
// krsort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// ksort() -  sort associative arrays in descending order, according to the key




// sort() - sort arrays in ascending order start

$sort = array("Monir", "Sagor", "Imtiaz", "Anika" , "Rahat", "Robi");
sort($sort);
print_r($sort);

// sort() - sort arrays in ascending order end


// rsort() - sort arrays in descending order start

$rsort = array(1,21,56,41,25,30,15,42,60,);
rsort($rsort);
print_r($rsort);

// rsort() - sort arrays in descending order end


// asort() - sort associative arrays in ascending order, according to the value start

$asort = array("Name" => "Robiul Islam", "State" => "Pabna", "Degination" => "Full stact");

asort($asort);

foreach($asort as $key => $value){
    echo $key . " " .$value;
    // echo "<br>" ;
}

// asort() - sort associative arrays in ascending order, according to the value end



// krsort() - sort associative arrays in ascending order, according to the key start


$krsort = array(1,21,56,41,25,30,15,42,60,);
print_r($krsort);

// krsort() - sort associative arrays in ascending order, according to the key end



// arsort() - sort associative arrays in descending order, according to the value start


$arsort = array("Degination" => "Full stact",  "Name" => "Robiul Islam", "State" => "Pabna" );
arsort($arsort);
foreach($arsort as $key => $value){
    echo $key. " " .$value;
}

// arsort() - sort associative arrays in descending order, according to the value end



// ksort() -  sort associative arrays in descending order, according to the key start


$krsort = array("Degination" => "Full stact" , "State" => "Pabna" ,  "Name" => "Robiul Islam");
krsort($krsort);
foreach($krsort as $value => $key){
    echo $value. " " . $key;
}

$biscuit = array("oreo", "energy", "pineapple");


// ksort() -  sort associative arrays in descending order, according to the key end