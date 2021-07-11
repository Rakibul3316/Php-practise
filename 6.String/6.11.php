<?php
$name = 'Rakibul Islam 01888684341 mathrakib3316@gmail.com';

$parts = sscanf( $name, "%s %s %11s %s" );
print_r( $parts );

sscanf( $name, "%s %s %11s %s", $fname, $lname, $mobile, $email );
echo $email . "\n";

$hexColor = "#FF2F44";

sscanf( $hexColor, "#%2x%2x%2x", $red, $green, $blue );
echo $blue;
