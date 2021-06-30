<?php

// যখন ফাংশনের ভিতরে return ব্যবহার করা হয়, তখন ফাংশন return এর পরের কোডগুলো আর রান করে না। 

// Here $n is functional parameter and $x is functional argument.

include_once "functions.php"; // that is the export path of main function file.

$x = 12;

if (isEven($x)) {
    echo "{$x} is an even number";
} else {
    echo "{$x} is an odd number";
}