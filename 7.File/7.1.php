<?php

$filename = 'd:\\PHP-Practise\\7.File\\rw-file\\read.txt';
if ( is_readable( $filename ) ) {
// প্রথমে ফাইটাকে খুলতে হবে।

// fopen(name of file, mode(link read => r, write => w, append => a));
    // যদি ফাইটা বাইনারি ফাইল হতো যেমন png,jpack তাহলে r সাথে b দেওয়া যেতো।
    $fp = fopen( $filename, 'r' );
// $line = fgets( $fp ); // এটা হলো একটা লাইন প্রিন্ট করার নিয়ম। এর কাজ হলো সে ফাইল গিয়ে এটা নতুন লাইন পাওয়ার আগ পর্যন্ত পড়বে। আবার সে কতগুলো কেরকটার পড়তে সেটা চাইলে আমরা ২য় প্যারামিটার হিসেবে বলে দিতে পারি। fgets( $fp, 3 )
    // echo $line;
    // $line = fgets( $fp );
    // echo $line;
    // $line = fgets( $fp );
    // echo $line;
    // $line = fgets( $fp );
    // echo $line;

// ফাইলটা যদি একবারে পড়তে চাই তাহলে

    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    rewind( $fp );
    fseek( $fp, -1, SEEK_END ); // এটা আবার cursor টা শেষে পাঠিয়ে দিবে।
    // fseek($fp, 8) // print this for understan or see the vedio for ones(10:00)

    while ( $line = fgets( $fp, 5 ) ) {
        echo $line . "-";
    }
// আমরা জানি fgets যদি কোন কিছু না পাই তাহলে সে শেষে চলে আসবে এবং false return করবে।

// এখানে cursor টা Miraz এসে থমে গেছে। এখন যদি cursor আবার কোন ভাবে শুরুর দিকে নিতে পারি তাহলে সে আবার নতুন করে ফাইলটা পড়বে। cursor আবার শুরু দিকে নেওয়ার পদ্বতি হলো। rewind();
    fclose( $fp );

// পুরো ফাইল একবারে পড়ে ফেলার জন্য

    $data = file( $filename );

    print_r( $data );

// OR

    $data = file_get_contents( $filename );

    echo $data;
}