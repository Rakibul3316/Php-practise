<?php

$fruits = array('apple', 'banana', 'mango', 'pineapple', 'guava');
$numbers = array(23, 2, 4, 45, 555, 56, 3, 34, 97, 46, 56);

/* sort() method is the bulidin method of php.
কোন অ্যারেকে sort করলে এটা মূল অ্যারেকে পরিবর্তন করে ফেলে। */
// sort($fruits);
// print_r($fruits);


// sort($numbers);
// print_r($numbers);

$animals = array('a'=>'tiger', 'b'=>'lion', 'c'=>'hen', 'd'=>'cock', 'e'=>'elephent', 'f'=>'dog');

// if you want to keep key & value, you will use asort(). it's sorted on vlaue.

// asort($animals);
// print_r($animals);

// যদি numbers এর উপর asrot() ব্যবহার করা হয় তাহলে তা key and value preserve করবে। 
// কিন্তু এই numbers array এর উপর for loop চালালে এটা ডাটাগুলোকে ‍asort() থেকে প্রাপ্ত অ্যারে এর উপর ভিত্তি করে প্রিন্ট করবে না, প্রিন্ট করবে numbers array এর উপর ভিত্তি করে। তাই এখানে সবসময় for loop না চালিয়ে foreach loop চালানেই ভাল। তখন সে ডাটাকে asort() থেকে প্রাপ্ত অ্যারে এর উপর ভিত্তি করে প্রিন্ট করবে। 

// arsort() => asort() reverse.
// rsort() => sort() reverse.
// ksort() => sort array by key.
// krsort() => sort array by key reverse.
// usort() => আমরা আমাদের নিজেদের ‍style এ compare করে ‍sort করতে পারি। 

// sort($numbers, SORT_STRING); // print this for understand.
// print_r($numbers);

/* Sort is Case Sensitive */

$random = array('apple', 'Apple', 'banana', 'Banana', 'Pineapple');
// sort($random);
// print_r($random);

/* Case InSensitive Sort */

// sort($random, SORT_STRING | SORT_FLAG_CASE);
// print_r($random);