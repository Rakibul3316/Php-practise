<?php

$string = "Contrary to popular belief, Lorem \n Ipsum is not simply random \n text. It has roots in a \n piece of classical Latin literature from \n 45 BC, making it over 2000 years old";
echo nl2br( $string );

// nl2br => new line break;

// এই স্ট্রিংটা যদি আমরা ওয়েবপেইজ এ প্রিন্ট করি তাহলে আমরা এই নিউ লাইনগুলো দেখতে পাবো না। নিউ লাইনগুলো ওয়েবপেইজে দেখার জন্য nl2br() ব্যবহার করা হয়। এটার কাজ হলো এটি \n কে <br/> tag convert করে ফেলে।