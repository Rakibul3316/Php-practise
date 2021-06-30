<?php
// Variable Swapping
// যদি %2$s %1$s এগুলোকে ডাবল কোটেশনের ভিতরে রাখা হয়, তাহলে $s এটিকে     variable হিসেবে গণ্য করা হবে। তাই এটাকে সিঙ্গেল কোটের ভিতরে রাখতে হবে। 

// $fname = "Rakibul";
// $lname = "Islam";
// printf ('His name is %2$s %1$s', $fname,$lname);
// echo "\n";

// printf('The binary equivalent of %1$d is %1$b',12);
// echo "\n";


$n = 45.1234; // দশমিকের পরের দুই ঘর। 
printf("%.2f",$n); // 45.12
echo "\n";

$m = 45.1253;
printf("%.2f",$m); // 45.13
echo "\n";

$s = 67;
$p = 1236.654;
$q = 27.456;

printf("%05d \n", $s);
printf("%08.2f \n",$p); // 01236.65
printf("%08.2f \n",$q); // 00027.45