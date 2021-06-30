<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

function sum ($oldValue=0, $newValue) {
    return $oldValue + $newValue;
}

$result = array_reduce($numbers, 'sum');

echo $result."\n";

/*
array_reduce(name of array, name of function as "String");

sum(0,1) => result = 1
sum(1,2) => result = 3
sum(3,3) => result = 6
sum(6,4) => result = 10
sum(10,5) => result = 15
sum(15,6) => result = 21
sum(21,7) => reuslt = 28
sum(28,8) => reuslt = 36
sum(36,9) => reuslt = 45
sum(45,10) => reuslt = 55
sum(55,11) => reuslt = 66
sum(66,12) => reuslt = 78
*/

function sumAllEvenNumbers ($oldValue=0, $newValue) {
    if($newValue%2 == 0){
        return $oldValue + $newValue;
    }
    return $oldValue;
    
}

$resultOfAllEvenNumbers = array_reduce($numbers, 'sumAllEvenNumbers');

echo $resultOfAllEvenNumbers;
