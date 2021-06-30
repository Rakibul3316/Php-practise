<?php

$color = array(122,266,34);

/*

$red = $color[0];
$green = $color[1];
$blud = $color[2];

echo $green;

এই জিনিসটা আরো সহজ করে লেখার জন্য list ফাংশনটা ব্যবহার করা যায়। এটার কাজ অনেকটা javascript এর destructure মত
*/

list($red, $green, $blue) = $color;

echo $red."\n";

$aPersonDetails = array('Rakibul','Islam','mathrakib3316@gmail.com','01888684341');

list($firstName, $lastName, $email, $phone) = $aPersonDetails;

echo $firstName."\n";
echo $lastName."\n";
echo $email."\n";
echo $phone."\n";