<?php

$student = [
    'fname'=> 'Rakibul',
    'lname'=> 'Islam',
    'age'=> '23',
    'class'=> 'Hon,s(1st)',
    'subject'=> 'Mathmatics'
];

print_r($student);

printf("%s %s \n", $student['fname'],$student['lname']);

$serialize = serialize($student);

$newstudent = unserialize($serialize);

print_r($newstudent);

// Json to associative array & associative array to Json

$jsondata = json_encode($student);
echo $jsondata;
echo "\n";

$student2 = json_decode($jsondata,true);
print_r($student2) ;
// যখন জেসন ডাটাকে ডিকোড করা হয় তখন তা ‍stdClass Object আকারে প্রিন্ট হয়। অ্যারের তে কনভ্রাট করা জন্য true লেখা হয়েছে। 
