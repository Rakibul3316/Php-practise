<?php

$fname = 'Isaac';
$lname = 'Newton';

printf('His name is %s %s', $fname, $lname);
echo "\n";

$storeData = sprintf('His fullname is %s %s', $fname, $lname);
echo "this is stroge data print = {$storeData}";