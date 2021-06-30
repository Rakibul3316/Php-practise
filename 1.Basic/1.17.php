<?php

// Check positive/negative ---- even/odd number.


$n = 12;
$r = $n % 2;

switch(true) {
    case ($r == 0 && $n > 0):
        echo "{$n} is a positive even number {$r}";
        break;
    case ($r == 1 && $n > 0):
        echo "{$n} is a positive odd number {$r}";
        break;
    case ($r == 0 && $n < 0):
        echo "{$n} is a negative even number";
        break;
    case ($r == -1 && $n < 0):
        echo "{$n} is a negative odd number";
        break;
}