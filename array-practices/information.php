

<?php

$student= array(
    'firstname'=> 'Robiul',
    'lastname' => 'Robi',
    'age' => 21,
    'class' => 12,
    'section'=> 'B'
);

// printf('%s %s', $student['firstname'] , $student['lastname']);
$serialize = serialize($student);
$newstudent = unserialize($serialize);
print_r ($newstudent);


$jsondata = json_encode($student);
$newjsondata = json_decode($jsondata, true);
print_r ($newjsondata);