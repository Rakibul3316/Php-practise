<?php

interface BaseAnimal {
    function canAlive();
    function canEat( $param1, $param2 );
    function breed();
    // এখানে শুধু মেথড এ কল করা হয়। এখানে মেথডের বডি থাকে না।
}

// একটা ক্লাস interface কে extends করতে পারে না implements করে।

class Animal implements BaseAnimal {
    function canAlive() {}
    function canEat( $param1, $param2 ) {}
    function breed() {}
}

// একটা interface আর একটা interface কে extens করতে পারে।

interface BaseHuman extends BaseAnimal {
    function canWalk();
}

// class Human extends BaseHuman {
//     // Class Human cannot extend from interface BaseHuman (error)
// }

// class Human implements BaseHuman {
//     function canAlive() {}
//     function canEat( $param1, $param2 ) {}
//     function breed() {}
//     function canWalk() {}
// }

// $h1 = new Human();
// echo $h1 instanceof BaseAnimal;

// instanceof keyword এর মাধ্যমে চেক করা হয় যে, এটা base interface কোনটা। এটা সত্য হল ১ হবে নতুবা -১ হবে।

// একটা অবজেক্ট যদি একাধিক interface কে ধারণ করে, তাহলে ঐ অবজেক্টকে polymorphizom বলে।

// abstract class interface কে implements করতে পারে।

abstract class AbstractHuman implements BaseHuman {
    abstract public function run();
    function eat() {
        echo 'i am eating';
    }
}

class Human extends AbstractHuman {
    function canAlive() {}
    function canEat( $param1, $param2 ) {}
    function breed() {}
    function canWalk() {}
    function run() {}
}

$h1 = new Human();

// abstract class and interface are similar.
