<?php

// switch (condition) {
//     case (check condition):
//         echo "print result";
//         break;
//     default :    
// }

$color = 'blue';

// switch($color) {
//     case 'red':
//         echo "This my favorite color";
//         break;
//     case 'green':
//         echo "This my favorite color";
//         break;
//     case 'blue':
//         echo "This not my favorite color";
//         break;
//     default:
//         echo "This only a color";
// }

// এখানে সবুজ আর লাল এর কন্ডিশন একই তাই এদেরকে একসাথে লেখা যায়। যেমন :

switch($color) {
    case 'red':
    case 'green':
        echo "My favorite color is {$color}";
        break;
    case 'blue':
        echo "{$color} is not my favorite color";
        break;
    default:
        echo "{$color} is only a color";
}

