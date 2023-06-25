<?php

$name_age = array ("Robiul Islam" => "22", "Rahat MAlitha" => "22", "Sagor Hossain" => "25");
foreach($name_age as $name => $age){
    echo " My Name Is " . $name  . "  Age:  " . $age;
    echo"<br>";
}



$food = [

    'Food' => 'Apple', 'Orang', 'Benana', 'Pappe',
    'Eat'  =>  'rice', 'beaf','morog polaw',
    'drink' => 'water', 'milk',
];

foreach($food as $name=>$valuse){
    echo $name. '='  .$valuse;
    echo "<br>";
}

$name = array_keys($food);
print_r($name);

echo "<br>";
echo "<br>";






$food = explode(',',' rice , beaf, morogpolaw, cocola, beaf, morogpolaw, cocola');

//Delimetar ','

var_dump($food);

$foodstring = join(',' , $food);
echo $foodstring;

echo count($food);

echo "<br>";
echo "<br>";

$food = preg_split('/(,|,)/',' rice , beaf, morogpolaw, cocola, beaf, morogpolaw, cocola');
print_r($food);

echo "<br>";
echo "<br>";


//Copy by value and copy by reference

$form = array("firstname"=> "Robiul islam", "lastname" => "Robi", "age" => 21 );
$newperson = $form;
$newperson ['lastname']='Aladin';
print_r ($form);
print_r($newperson);

//Removing data from an associative array

unset($form['lastname']);
print_r($form);
