<?php

class Color {
    public $color;
    function __construct( $color ) {
        $this->color = $color;
    }

    function setColor( $color ) {
        $this->color = $color;
    }
}

class FavColor {
    public $data;
    public $color;

    function __construct( $data, $color ) {
        $this->data  = $data;
        $this->color = new Color( $color );
    }

    function updataColor( $color ) {
        $this->color->setColor( $color );
    }

    function __clone() {
        $this->color = clone $this->color;
    }
}

$fc1 = new FavColor( "some data", 'red' );
print_r( $fc1 );

$fc2 = clone $fc1; // শুধুমাত্র ক্লোন করার সময় প্রিমেটিভ ডেটা টাইপগুলো ক্লোন হয়। কিন্তু নন প্রিমেটিভ ডেটা টাইপগুলো ক্লোন হয় না। তাই (লাইন ২৩) এই ধরণের পদ্ধতি অবলম্বন করতে হয়।
print_r( $fc2 );

$fc2->updataColor( 'green' );
print_r( $fc1 );
print_r( $fc2 );
