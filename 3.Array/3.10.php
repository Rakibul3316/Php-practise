<?php

$fruite = array('apple', 'banana', 'orange', 'plums', 'dates', 'mango');

// array_slice('name of array', starting index, length of items(if number is positive,it's means length of items or number is negative, it's means till that index),get original index of every element set value {true});

// $someFruites = array_slice($fruite, 0);
// print_r($someFruites);

// $someFruites2 = array_slice($fruite, 2, 2);
// print_r($someFruites2);

// $someFruites3 = array_slice($fruite, 1, -1);
// print_r($someFruites3);

// $someFruites4 = array_slice($fruite, 1, -2);
// print_r($someFruites4);

// $someFruites5 = array_slice($fruite, -5, -2);
// print_r($someFruites5);

// $someFruites6 = array_slice($fruite, -5, 2);
// print_r($someFruites6);

// $someFruites7 = array_slice($fruite, 2, 4);
// print_r($someFruites7);

$random = array('a'=>12, 'b'=>16, 'c'=>43, 'd'=>84, 'e'=> 83, 12=>63, 'f'=>20);

$someData = array_slice($random, 1, 5, true);
print_r($someData);

// true না দিলে ১২ এর নান আসতো ০, কিন্তু true দিলে মান আসবে ১২ ই। না বুঝলে একবার প্রিন্ট করে দেখলেই হবে। 