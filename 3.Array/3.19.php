<?php

// print an array like this [12,13,14,15,16,17,18,19,20];

/*
$numbers = array();

for($i=12; $i<21; $i++){
    array_push($numbers,$i);
}

print_r($numbers); 
*/

// এই কাজটা সহজ করা জন্য range() function ব্যবহার করা যায়। 

/* range(starting point, ending point, stepping) */

$numbers = range(12,20);

print_r($numbers);

// print even numbers form 2 to 50;

// foreach(range(0,30,2) as $evenNumbers) {
//     if($evenNumbers>0){
//         echo $evenNumbers."\n";
//     }
// }

foreach(range(0,60,11) as $numbers) {
    if($numbers>0){
        echo $numbers."\n";
    }
}
