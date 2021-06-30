<?php

// remove an element from associative array.

$person = [
    'fname' => 'Rakibul',
    'lname' => 'Sarker'
];

print_r($person);

// unset(name of array['keyname'])
unset($person['lname']);

print_r($person);