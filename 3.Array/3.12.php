<?php

$fruits = array('apple', 'banana', 'orange', 'plums', 'dates', 'mango');

$random = array('a'=>12, 'b'=>16, 'c'=>43, 'd'=>84, 'e'=> 83, 12=>63, 'f'=>20);

/***** This is the way to marge multiple array. ******/

$newFruits1 = array_slice($fruits, 0, 3);
$newFruits2 = array_slice($fruits, 3, null);

$mergeFruits = array_merge($newFruits1, $newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
print_r($mergeFruits);

/***** Merge array by using '+' symbol ******/

$newFruits3 = array_slice($fruits, 0, 3, true);
$newFruits4 = array_slice($fruits, 3, null, true);

$mergeFruits2 = $newFruits3 + $newFruits4;

print_r($newFruits3);
print_r($newFruits4);
print_r($mergeFruits2);

/* এখানে আমরা আশা করতেছি ফলাফল হবে =>
    [0] => apple
    [1] => banana
    [2] => orange
    [3] => plums
    [4] => dates
    [5] => mango

কিন্তু ফলাফল হবে এটা =>
    [0] => apple
    [1] => banana
    [2] => orange

কারণ $newFruits3 এবং $newFruits4 এই দুই অ্যারের ইনডেক্সই হচ্ছে একই 
$newFruits3 => [0] => apple
               [1] => banana
               [2] => orange

$newFruits4 => [0] => plums
               [1] => dates
               [2] => mango

যদি লাইন নম্বর ২০ এবং ২১ এ true ব্যবহার করা হয় তখন তারা তাদের অরিজিনাল ইনডেক্স নম্বর এ প্রিন্ট হবে । তখন আর এই সমস্যাটা হবে না। তখন কাক্ষিত ফলাফল আসবে। 
    [0] => apple
    [1] => banana
    [2] => orange
    [3] => plums
    [4] => dates
    [5] => mango
*/