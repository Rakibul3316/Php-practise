<?php

// Part-1

/*
অ্যারে পরিবর্তনশীল। অর্থ্যাৎ অ্যারের প্রত্যেকটি উপাদানকে পরিবর্তন করা যায়। 
*/

$students = ["rahim", "karim","monir","jamal"];

$students[2] = "kabir"; // the final students arr is [rahim, karim, kabir,jamal]

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i]. "\n";
}

// Part-2

// array_shift() => অ্যারের প্রথম ইলিমেন্টকে বের করে আনে এবং return করে দেয় 
// $student = array_shift($students) => rahim

// array_unshift() => অ্যারের প্রথম দিকে ইলিমেন্ট ঠুকায় 
// ‍array_unshift($students, "shofiul")

// array_push() =>  অ্যারের শেষ দিকে ইলিমেন্ট যোগ করা  
// array_push($students, "sajib") 
// এই পদ্ধতিতেও অ্যারের শেষে ইলিমেন্ট যোগ করা যায় $students[] = "jamal";

// array_pop() => অ্যারের শেষ ইলিমেন্টকে বের করে আনে এবং return করে দেয়।
// $student = array_pop($students) => jamal

// উপরের সবগুলো propertity অ্যারেকে modify করে দেয়। 