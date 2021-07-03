<?php

// search and replace.

$string = 'Quick brown Brown Fox fox jums over the lazy dog';

// str_replace(যাকে পরিবর্তন করবো, যার মাধ্যমে পরিবর্তন করবো, কোন string মধ্যে পরিবর্তন করবো, পরিবর্তনের সংখ্যা);

// $replace_string = str_replace( 'brown', 'red', $string, $count );
// echo $replace_string;

// echo PHP_EOL;

// echo "Total Replacement: {$count}";

// str_replace caseSensitive তাই brown পরিবর্তন হয়েছে কিন্তু Brown পরিবর্তন হয়নি।

// caseInSensitive and mutiple change in one line;
// $string = str_ireplace( ['brown', 'fox', 'dog'], ['red', 'cat', 'hen'], $string );

$string = str_ireplace( ['brown', 'fox', 'dog'], 'hen', $string );

echo $string;