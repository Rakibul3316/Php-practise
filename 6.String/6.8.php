<?php

$string = "  hello \n,";
// $string = trim( $string );
// echo $string;
// echo "Data";

// trim এর কাজই হলো non printable character গুলো remove করে ফেলে।

// আমরা চাই white space কে বাদ দিতে এবং \n রাখতে
// trim($string, কি কি বাদ দিতে চাই);

$string = trim( $string, " ," );
echo $string;
echo "Data";

// এখানে সে white space এবং কমাকে বাদ দিয়ে দিবে কিন্তু \n রাখবে।
