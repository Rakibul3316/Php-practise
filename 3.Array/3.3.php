<?php

// Associative Array => key: value;

// $students = [
//     "12"=> "Jalal",
//     "13"=> "Kamal",
//     "14"=> "Rahim"
// ];

// echo $students ['12']; => Jalal


$foods = [
    "vagetables" => 'brinjal, carrot, capsicum',
    "fruits" => "banana, orange, coconut",
    "drinks" => "7up, cocacola, fanta"
];

// echo $foods["vagetables"]."\n";
// echo $foods["drinks"]."\n";

// অ্যাসোসিয়েটিভ অ্যারেতে লুপ চালানোর জন্য foreach ব্যবহার করা হয়। 
// foreach($foods as $key=>$value){
//     echo $key." = ".$value."\n";
// }

// দুইটি গুরুত্বপূর্ণ অ্যাসোসিয়েটিভ অ্যারে ফাংশন
// array_keys()  [using for get out associative array keys only]
// array_values()  [using for get out associative array values only]
// অ্যাসোসিয়েটিভ অ্যারেকে প্রিন্ট কারার জন্য এই ফাংশনটা ব্যবহার করা হয় print_r(). 

// অ্যাসোসিয়েটিভ অ্যারেতে কোন ইলিমেন্ট যোগ করার নিয়ম। 

$foods["drinks"] = $foods["drinks"].", mojo";

echo $foods['drinks'];

