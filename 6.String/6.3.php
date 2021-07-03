<?php

// php তে string কে array হিসেবে treat করা যায়।

$string = 'Hello World';

// echo $string[0];
// echo $string[1];
// echo $string[-5];

// ধনাত্নক এর ক্ষেত্রে index শুরু হয় 0 থেকে আর ঋনাত্নক ক্ষেত্রে index শুরু হয় -1 থেকে।

// strlen($string);

// string এ কিছু অংশ কেটে বের করা।

// substr(name of string, starting index, length(if the number is positive,) or till then(if the number is negative));

echo substr( $string, 1 ) . "\n";
echo substr( $string, 1, -5 ) . "\n";
echo substr( $string, -1, -5 ) . "\n";