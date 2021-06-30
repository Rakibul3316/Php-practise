<?php

// this function is using for findout even or odd number.

function isEven ($n) {
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

function factorial ($n) {
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}