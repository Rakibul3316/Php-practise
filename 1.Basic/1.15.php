<?php

$n = 13;

$isNumberTwelve = (12 == $n) ? "Twelve" : (14 == $n) ? "Fourteen" : "It's a number";

echo "{$isNumberTwelve} \n";

$m = 15;

$isEvenOrOdd = ($m % 2 == 0) ? "Even Number" : "Odd Number";

echo "Checking even or odd number = {$isEvenOrOdd}";