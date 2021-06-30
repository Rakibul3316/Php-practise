<?php

$fruits = array('apple', 'banana', 'orange', 'plums', 'dates', 'mango');

$newFruits = array('jackfruit','tamarind','pineapple');

// array_splice('name of array', starting index, length of items(if number is positive,it's means length of items or number is negative, it's means till that index),if you need to insert new element, you can);

// $someFruits = array_splice($fruits,-5,3);

$someFruits = array_splice($fruits, -5, 3, $newFruits); // added some new elements of the cutting part in the main array.

print_r($fruits);
print_r($someFruits);