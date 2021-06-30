<?php

// ফিবোনাক্কি সিরিজ = 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 .......

/* initial loop */

// v0 = 0
// o0 = 1
// n0 = 1

/* 1st loop */

// v1 = o1 = 1
// o1 = n0 = 1
// n1 = 01 + v0 = 0 +1 = 1

/* 2nd loop */

// v2 = o1 = 1
// o2 = n1 = 1
// n2 = 02 + v1 = 1 +1 = 2

/* 3rd loop */

// v3 = o1 = 2
// o3 = n0 = 2
// n3 = 03 + v2 = 2 +1 = 3

/* 4th loop */

// v4 = o1 = 3
// o4 = n3 = 3
// n4 = 04 + v3 = 3 +2 = 5

/* 5th loop */

// v5 = o5 = 5 
// o5 = n4 = 5
// n5 = o5 + v4 = 5 + 3 = 8

$veryOld = 0;
$old = 1;
$new = 1;

for ($i = 0; $i < 9; $i ++) {
    echo $veryOld. " ";
    $old = $new;
    $new = $veryOld + $old;
    $veryOld = $old;
}