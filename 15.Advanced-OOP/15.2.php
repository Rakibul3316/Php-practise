<?php

interface BaseStudent {
    function displayName();
}

class ImprovedStudent implements BaseStudent {
    private $name;
    private $title;
    function __construct( $name, $title ) {
        $this->name  = $name;
        $this->title = $title;
    }

    function displayName() {
        echo "Hello from {$this->title}. {$this->name}\n";
    }
}

class Student implements BaseStudent {
    private $name;

    function __construct( $name ) {
        $this->name = $name;
    }

    function displayName() {
        echo "Hello from" . $this->name . "\n";
    }
}

// class StudentManage {
//     function introduceStudent( $name ) {
//         $st = new Student( $name );
//         $st->displayName();
//         // hard dependency...........
//     }
// }

class StudentManage {
    function introduceStudent( BaseStudent $student ) { // এর মানে যারা BaseStudent কে implements করেছে, তারাই শুধুমাত্র এখানে আসতে পারবে এবং তাদের মাঝে অব্যশই displayName() মেথডটা থাকতে হবে।
        $student->displayName();
    }
}

/* for hard dependency */
// $sm = new StudentManage();
// $sm->introduceStudent( "Jhon Doe" );

$st  = new Student( "Jhon Doe" );
$ist = new ImprovedStudent( "Jhon Doe", "Mr" );
$sm  = new StudentManage();
$sm->introduceStudent( $st ); // এখানে introduceStudent হলো StudentManage অবজেক্ট এর একটা মেথড। StudentManage অবজেক্ট এর ভিতরে আমরা Student অবজেক্টটাকে পাস করছি। এটাই হলো dependency injection.
$sm->introduceStudent( $ist );
