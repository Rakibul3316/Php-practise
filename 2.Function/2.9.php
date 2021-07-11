<?php

// GLOBAL SCOPE

// $name = "Earth";

// function doSomething() {
//     echo $name;
// }

// doSomething();

// এইভাবে কোন var. কে ফাংশনের ভিতর থেকে কল করা যায় না। Warning: Undefined variable $name। এই সকল var. কে ব্যবহার করার জন্য global অথবা $GLOBALS নামে super global array কে ব্যবহার করা হয়।
// $GLOBALS ব্যবহার করা good practice.

// $name = "Earth";

// function doSomething() {
//     global $name;
//     echo $GLOBALS ['name']; / ‍super global variable.
//     echo $name;
// }

// doSomething();

// LOCAL SCOPE

function doSomething() {

    global $name;
    $name = "Earth"; // Local scope
    echo $name . "\n";
}

doSomething();
echo $name;
// যেহেতু এই var. টি লোকাল। তাই ফাংশনের বাইরে এটিকে কল করলে Undefined দেখাবে। কিন্তু যদি আবার ফাংশনের ভিতরে এটিকে global করা হয় তাহলে আবার ফাংশনের বাইরেও এটির access পাওয়া যাবে।

// STATIC SCOPE

// function doSomething() {
//     static $i;      // এর কাজ হলো var. এর মান স্টোর করা।
//     $i = $i ?? 0;  // ১. এই লাইনে প্রথমে চেক হবে যে, i এর মান আছে কি না। যদি না থাকে তাহলে ০ কে নিবে।
//     $i++;         // ২. এখানে i এর মান বের ১ হবে।
//     echo $i;      // ৩. i এর মান প্রিন্ট হবে।
//     echo "\n";
// }

// doSomething();   // এখানে যতবারই ফাংশনকে কল করা হবে তত বারই i এর মান ১ হবে। কারণ কোথায় i মান স্টোর করার সিস্টেম নেই। কিন্তু var.কে যখন static করা হবে তখন এটি var. এর মান জমা করতে থাকবে। এবং ফাংশনটা যতবার চলবে ততবার var. এর মান বারতে থাকবে।
// doSomething();
// doSomething();
// doSomething();
