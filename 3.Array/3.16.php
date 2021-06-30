<?php

// এই অধ্যায়ে এর কোন ফাংশনই মূল অ্যারেকে মডিফাই করবে না। শুধু অ্যারের প্রতিটা ইলিমেন্টের উপর কাজ করবে। 

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

function square($n) {
    printf("Square of %d is %d \n",$n, $n*$n);
}

// array_walk($numbers, 'square');


/* 
array_walk (name of array, name of callback function as 'String');

array_walk এর কাজ হচ্ছে যে, তুমি $numbers array এর প্রতিটা ইলিমেন্ট square নামের ফাংশনটা রান কর। array_walk এর কাজই হচ্ছে কোন অ্যারের প্রতিটা ইলিমেন্টের কাজ করে সেটাকে প্রিন্ট করা। 
*/


/* 
যদি অ্যারের প্রতিটা ইলিমেন্টের উপর কাজ করে সেটাকে return করতে চাই তাহলে array_map() ব্যবহার করতে হবে। 

array_map(name of callback function as 'String', name of array);
*/

function cube($n) {
    return $n*$n*$n;
}

$returnCubeArray = array_map('cube', $numbers);

// print_r($returnCubeArray);

/*
এখানে even function টা numbers অ্যারের প্রতিটা ইলিমেন্ট এর উপর কাজ করবে। কাজ করার পর যে ইলিমেন্ট এর জন্য even function ফাংশন সত্য হবে সেটাকে সে রির্টান করবে। 

array_filter(name of array, name of function as 'String');
*/

function even($n) {
    return $n%2 == 0;
}

function odd($n) {
    return $n%2 == 1;
}

$evenNumbers = array_filter($numbers, 'even');
$oddNumbers = array_filter($numbers, 'odd');

print_r($evenNumbers);
print_r($oddNumbers);


$persons = array('sujon','kabir','sabab','roni','jamal','kamal','sayma');

// php তে যেকোন string কে array হিসেবে treat করা যায়।
function filterByS($name) {
    return $name[0] == 's';
}

$newPersons = array_filter($persons, 'filterByS');

print_r($newPersons);