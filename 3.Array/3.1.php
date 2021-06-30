<?php

 

$students = ["rahim", "karim","monir","jamal"];

// Part-1

/*
php তে কোন element প্রিন্ট করার নিয়ম। আমরা যদি চাই পুরো অ্যারেটা প্রিন্ট করতে তাহলে তা করা যাবে না। 

echo $students[3]."\n";

echo $students; // through an error.
*/

// Part-2

/*
কোন একটি অ্যারের length বের করতে হলে count() function ব্যবহার করা হয়। এই count() function এর ভিতরে কোন অ্যারে কে দিলে এটি ঐ অ্যারের length বের করে দেয়। 

echo "length of this array ".count($students)."\n";
*/

// Part-3

/*
অ্যারের element print করার জন্য :

অ্যারেকে সামনে থেকে প্রিন্ট করার জন্য;
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i]. "\n";
}

অ্যারেকে পিছন থেকে প্রিন্ট করার জন্য;

$n = count($students);
for ($i = $n-1; $i >= 0; $i--) {
    echo $students[$i]."\n";
}
*/

