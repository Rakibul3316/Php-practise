<?php

$fruits = ['a'=>'Apple','b'=>'Banana','c'=>'Cherry','d'=>'Dates','e'=>'Elderberry'];

shuffle($fruits);
print_r($fruits);

// আমরা associative array তে যদি shuffle ব্যবহার করি তাহলে সে key গুলোকে সংরক্ষণ করবে না। তাই associative array ক্ষেত্রে এটাকে ব্যবহার করা যাবে না। 

// random key print করার একটা ফাংশন হলো array_rand(). এর মাধ্যমে associative array তে random key gerneate করা যায়। 

$key = array_rand($fruits);
// echo $key;

echo $fruits[$key];