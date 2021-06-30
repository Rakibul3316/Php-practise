<?php

$string = '8balls';

switch($string) {
    case (string) '9balls':
        echo 'Nine balls';
        break;
    case (string) 8:
        echo '8';
        break;
    case (string) '8balls':
        echo 'Eight balls';
        break;
}

// এখানে ‍(string) ব্যবহার করা আগে প্রিন্ট হবে 8 । কারণ switch case -এ 8balls evaluate হওয়ার কারণে 8 হিসেবে গণ্য করে তাই case কে সে execute করে। 