<?php

// string is a character set.

// অনেকগুলো character যখন single quote or double quote rape করে দেই তখন তাকে string বলে। 

$name = 'Rakibul';

$string1 = 'my name is $name \n \t new data';

$string2 = "my name is $name \n \t new data";

// single quote এর মধ্যে $name, \n, \t কাজ করে না। কিন্তু double quote মধ্যে এগুলো কাজ করে। এটাই হলো single quote এবং double quote মধ্যে সবচেয়ে বড় পার্থক্য। 

// php তে string লেখার আরও দুইটা নিয়ম আছে। heredoc and nowdoc

// if you want to print multiple line, you will use heredoc. it's supported variable \n \t etc.



$heredoc = <<<EOD
data 1
my name is {$name}
more text
EOD; // এর আগে কোন space থাকতে পারবে না। 

echo $heredoc;

// যদি EOD কে 'EOD' লিখা হয় তাহলে সেটা nowdoc. তখন আর $name, \n, \t এগুলো কাজ করবে না কিন্তু multiple line print হবে। এটা single quote এর মতই কাজ করে। 

$nowdoc = <<<'EOD'
data 1
my name is {$name}
more text
EOD; // এর আগে কোন space বা text থাকতে পারবে না। 

echo $heredoc;