<?php

$string = 'hello world, how are you';
// প্রতিটা শব্দকে প্রিন্ট করা
// explode(delimeter, name of string);
// $part = explode( ' ', $string );

// print_r( $part );

// শব্দগুলো যদি আবার জোড়া লাগাতে চাই।
// join(glue, name of string) or implode(glue, name of string)
// $original_string = join( ' ', $part );

// echo $original_string;

// $string2 = 'abcdefghij';
// এই টাইপের string থেকে প্রতি বর্ণ বের করে আনার জন্য str_split() ব্যবহার করা হয়।

// str_split(name of string);
// $part2 = str_split( $string2 );
// print_r( $part2 );

// একাধিক delemeter যুক্ত string থেকে প্রতিটি শব্দকে আলাদা করার জন্য ‍strtok() ব্যবহার করা যায় অথবা regular expression ব্যবহার করা যায়।

// strtok(name of string, multiple delemeter);
// it's link an iterator;
// $part3 = strtok( $string, ' ,' );
// while ( $part3 != false ) {
//     echo $part3 . "\n";
//     $part3 = strtok( ' ,' );
// }
// এখান থেকে যে আউটপুট পাওয়া যাবে সেগুলোকে আবার join করা যাবে না।

$part4 = preg_split( "/\s|,/", $string );
print_r( $part4 );

// \s => white space এর সমতুল্য।