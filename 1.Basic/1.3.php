<?php
// Variable in php is "mutable" (পরিবর্তনশীল)

$task = "Read \n";
echo $task;

$task = "Write \n";
echo $task;


// Constant writing system;

// define ('constant name', constant value)

define('PI', 3.14159);

echo "Value of PI = ".PI; // dote system;
echo "\n";

echo PI; // only variable name
echo "\n";

echo constant('PI'); // by constant function
echo "\n";

$constant = "constant";
echo "Advanced system PI = {$constant('PI')}";


