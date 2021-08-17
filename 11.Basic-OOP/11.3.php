<?php

class Human {
    public $name;
    public $age;

    function __construct( $person_name, $person_age = 0 ) {
        echo "New Human object is created\n";
        $this->name = $person_name;
        $this->age  = $person_age;
    }
// __construct() ক্লাস থেকে যখন কোন অবজেক্ট তৈরি করা হয় তখন এই ফাংশনটা একবার কল হয়। এটাকে কল করা লাগে না, এটা অটোমেটিকই রান করবে।

    function sayName() {
        if ( $this->age ) {
            echo "My name is {$this->name}, I am {$this->age} years old.\n";
        } else {
            echo "My name is {$this->name}, I don't know how old I am.\n";
        }
    }

    function sayHi() {
        // echo "Salam\n";
        $this->sayName();
    }
}

$h1 = new Human( 'Rakibul', 23 ); // আমরা যদি Human এর ভিতরে কোন নাম argument আকারে পাস করতে চাই তাহলে __construct() ফাংশন ব্যবহার করতে হবে।
$h2 = new Human( 'Shofiul', 27 ); // আমরা যদি দুইটা argument এর পরিবর্তে একটা argument দেই তাহলে একটা error আসবে। কারণ এখানে অবশ্যই দুইটা argument পাস করতে হবে। তাই যদি একটা argument পাস করতে চাই তাহলে $person_age=0 বা default parameter ব্যবহার করতে হবে।
$h3 = new Human( 'Saddam' );
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();
