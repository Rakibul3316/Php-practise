<?php
/* Variable লেখার নিয়ম:
১. প্রথমে অবশ্যই $ থাকতে হবে। 
২. ক্যামেই কেইসে লেখা ভাল অথবা (_)। 
৩. প্রথমে কখনই নাম্বার থাকতে পারবে না। 
 "\n" means new line. */


$name = "Bangladesh";
$age = 22;
$profession = "Student";
$number = "age";
$myName = "Rakibul Islam";
$question = "How are you?";


//echo $$number;
// Here $$number = $ + $number
            //   = $age
            //   = 22

echo "Hello,".$myName; //(.) concatenate with string.
echo "\n";

echo "Hello,$myName"; // variable কে অবশ্যই ডাবল কোটের ("")মধ্যে লেখতে হবে।
echo "\n";   
 
echo 'Hello,$myName'; //সিঙ্কেল কোটের ('') মধ্যে লিখলে variable কে string হিসেবে গণ্য করা হবে।
echo "\n"; 
 
echo "Hello {$myName}, {$question}"; // good parctice {variable name}
echo "\n"; 

