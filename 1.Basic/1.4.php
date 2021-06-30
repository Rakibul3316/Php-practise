<?php
// usese of "printf"

$fname = "Isaac";
$lname = "Newton";

printf("His %s name is %s %s","Full",$fname,$lname);
echo "\n";
// Here "%s" is placeholder and "Full", $fname, $lname are arguments;

// If you put more arguments than placeholder php through error;
// printf("His %s name is %s %s %s","Full",$fname,$lname);