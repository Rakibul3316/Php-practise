<?php 
// print random number by using mt_rand();

$numbers = range(40,72);
// echo count($numbers);

$random = mt_rand(0,33);

// echo $numbers[$random];

$luck = $numbers[$random];

if($luck%2 === 0) {
    echo "Head \n";
} else {
    echo "Tail \n";
}


// another way to print random numbers by using shuffle().

shuffle($numbers);
// shuffle() ফাংশন মূল অ্যারেকেই পরিবর্তন করে ফেলে। 
print_r($numbers);

$randomNumbers = $numbers[3];

echo $randomNumbers;

// যদি random number এর জন্য mt_rand() এবং shuffle() মধ্যে তুলনা করা হয় তাহলে shuffle() ফাংশন বেশি সময় নেয় mt_rand() তুলনায়। তাই mt_rand() ব্যবহার করাই ভাল। 