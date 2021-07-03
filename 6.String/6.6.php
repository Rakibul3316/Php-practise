<?php
// search string in a string;
$string = 'Quick brown Fox jumps over the lazy dog';

// strpos(haystack, needle);
$offset = strpos( $string, 'fox' );
echo $offset; // result => 12;

// string এ fox ছোট অক্ষরে না হয়ে যদি বড় অক্ষরে হয় Fox তাহলে result পাওয়া যাবে না। কারণ strpos caseSensitive। এটাকে caseInSensitive করার জন্য ‍stripos লিখলেই হবে। তখন বড় অক্ষরের Fox এর জন্যও result 12 পাওয়া যাবে।

// এখন আমরা fox পরিবর্তে যদি Quick খুজতে যাই তাহলে result আসবে 0। আর php তে 0 এবং false সমতুল্য। আর strpos কোন কিছু খেজে না পেলে সে false return করে। তাই strpos ব্যবহার করলে সবসময় type check করতে হবে।

$offset1 = strpos( $string, 'Quick' );

if ( $offset1 !== false ) {
    echo "\n Word was found \n";
} else {
    echo "\n Word was not found \n";
}

// reverse caseInSensitive search
$offset3 = strripos( $string, 'The' );

echo $offset3; // search form the start;