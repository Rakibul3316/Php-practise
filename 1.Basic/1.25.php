<?php

$result = 1;
$j = 1;

for ($n = 1; $n<=20; $n++) {
    $result *= $n;
    printf("The factorial of %d is %d", $n, $result);
    echo "\n";
    $j++;
}

echo "The number of operation is {$j}";

