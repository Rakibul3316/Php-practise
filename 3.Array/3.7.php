<?php

// It's called deep copy
// copy by value.
$person = array('fname'=> 'Hello', 'lname'=> 'World');
$newPerson = $person; // এখানে person var. এর ডাটা কপি হয়ে newPerson var. চলে এসেছে। তাই এখন newPerson var. কোন ডাটা পরিবর্তন করলেও তা person var. কোন প্রভাব ফেলবে না। 
// copy by value.
// $newPerson['lname']='Pluto';

// print_r($person);

// print_r($newPerson);

// copy by reference
// shallow copy

$person2 = array('fname'=> 'Hello', 'lname'=> 'World');
$newPerson2 = &$person2; // এখানে $person2 এর data পুরোপুরি $newPerson2 তে কপি হবে না। $person2 এর মেমরি অ্যাডরেসটা $newPerson2 reference হিসেবে থাকবে। অর্থাৎ, $person2 র‌্যামের যে জায়গায় আছে $newPerson2 তার একটা reference। তাই $newPerson2 তে কোন কিছু পরিবর্তন করলে তা $person2 তেও পরিবর্তন হয়ে যাবে। 

$newPerson2['lname']='Pluto';

// print_r($person2);

// print_r($newPerson2);

/********************
Example
********************/

function printData(&$person) {
    $person['fname'] .= ' changed';
    print_r($person);
}

printData($person2);

/********************
Output

Array
(
    [fname] => Hello changed
    [lname] => Pluto
)
********************/
// এখানে ফাংশনের ভিতরে fname পরিবর্তন হয়ে গেছে। কিন্তু মূল অ্যারে ঠিক আছে। 


print_r($person2);


/********************
Output

Array
(
    [fname] => Hello
    [lname] => Pluto
)
********************/
// যদি by reference হতো তাহলে তা মূল অ্যারেতেও প্রভাব ফেলতো।

// 30 number line এ printData($person) এর পরিবর্তে printData(&$person) দিলে তা বুঝা যাবে। 