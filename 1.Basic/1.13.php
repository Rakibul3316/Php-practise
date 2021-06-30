<?php

// 1. divisible by - 4 ?
// 2. divisible by - 100 ?
// 3. divisible by - 400 ?

$year = 2011;

// This code is readble.
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is leap year";
} else if ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not leap year";
} else if ($year % 4 == 0) {
    echo "{$year} is leap year";
} else {
    echo "{$year} is not leap year";
}

echo PHP_EOL;

// This code is standard.

if ($year % 4 == 0 && ($year % 100 != 0 && $year % 400 == 0)) {
    echo "{$year} is leap year";
} else {
    echo "{$year} is not leap year";
}

echo PHP_EOL;



for ($i = 1900; $i <= 2020; $i++) {
    if($i % 4 == 0 && $i % 100 == 0) {
        echo $i;
        echo PHP_EOL;
    }
    
}