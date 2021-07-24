<?php

class Shape {

}

class Shapes {
    private $shapes;

    function __construct() {
        $this->shapes = [];
    }

    function addShape( Shape $shape ) { // এভারে চেক করার পর আমরা সঠিক রেজাল্ট পাবো। তখন আর Student এটা count হবে না।
        array_push( $this->shapes, $shape );
    }

    function totalShapes() {
        return count( $this->shapes );
    }
}

class Rectangle extends Shape {

}

class Triangle extends Shape {

}

class Student {

}

$shapesCollections = new Shapes();
$shapesCollections->addShape( new Rectangle() );
$shapesCollections->addShape( new Triangle() );
// $shapesCollections->addShape( new Student() );

echo $shapesCollections->totalShapes();

// এখানে Rectangle এবং Triangle হলো Shape কিন্তু Student কোন Shape না। তারপরও এখানে count দেখাচ্ছে ৩। এটা একটা সমস্যা। সমস্যার সমাধান হলো এখানে addShape আরগুমেন্টগুলোকে চেক করতে হবে যে, এগুলো আসলেও Shape কি না।
