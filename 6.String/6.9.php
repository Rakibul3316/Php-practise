<?php

$string = 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old';
echo wordwrap( $string, 26 );

echo PHP_EOL;
echo PHP_EOL;

// wordwrap(name of string, কতঘর পর পর ভাঙ্গবে,),

// তবে যদি কোন একটি শব্দের মাঝখানে break point টি পরে তাহলে সে সেই শব্দকে ভাঙ্গবে না বরং তার আগের শব্দকে ভাঙ্গবে।

// আবার একটি শব্দের দৈঘ্যই যদি ২৬ অক্ষরের বেশি হয় তাহলে সেই অক্ষরকে ভাঙ্গার জন্য 3rd parameter এ এর ধরণ বা কি দিয়ে ভাঙ্গবে এবং 4th patameter এ true লিখতে হবে। যেমন:

$string1 = 'Contrary to popularrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old';
echo wordwrap( $string1, 26, "\n", true );
