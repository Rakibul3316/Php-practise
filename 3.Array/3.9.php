<?php

// check, if have any value in a variable.

// isset($name) and is_numeric($name) return boolean value.

// use name value: -1, '', 0, null

$name = '';

if(isset($name)) {
    echo 'name is set';
} else {
    echo 'name is not set';
}

echo "\n";

if(empty($name)){
    echo 'name is empty';
} else {
    echo 'not empyt';
}

echo "\n";

if(isset($name) && (is_numeric($name) || $name != '')) {
    echo 'name is set and it\'s not empty';
} else {
    echo 'name is either not set or it\'s empty';
}