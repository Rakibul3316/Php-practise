<?php

$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,41,44,3,28,1,2,7);

$fruits1 = array('a'=>'apple','b'=>'banana','e'=>'lemon');
$fruits2 = array('d'=>'pineapple','b'=>'malta','g'=>'grapes','e'=>'lemon');

$common = array_intersect($numbers1, $numbers2);
$commonFruitsOnlyValue = array_intersect($fruits1, $fruits2);
$commonFruitsKeyAndValue = array_intersect_assoc($fruits1, $fruits2);

print_r($common);
print_r($commonFruitsOnlyValue);
print_r($commonFruitsKeyAndValue);

$difference = array_diff($numbers1, $numbers2); // $numbers1 যে উপাদানগুলো $numbers2 তে নাই। 
$difference2 = array_diff($numbers2, $numbers1); // $numbers2 যে উপাদানগুলো $numbers1 তে নাই।
$differenceFruitsOnlyValue = array_diff($fruits2, $fruits1);
$differenceFruitsKeyAndValue = array_diff_assoc($fruits1, $fruits2);

print_r($difference);
print_r($differenceFruitsOnlyValue);
print_r($differenceFruitsKeyAndValue);

