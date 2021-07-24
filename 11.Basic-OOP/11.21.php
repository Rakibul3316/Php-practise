<?php

class Color {
    public $color;
    function __construct( $color ) {
        $this->color = $color;
    }

    function setColor( $color ) {
        $this->color = $color;
    }

    function __toString() {
        return "The color is {$this->color}.";
    }
}

$c = new Color( 'green' );

echo $c; // যদি অবজেক্ট এর ভিতরে __toString টা থাকে, তাহলে সে ঐ অবজেক্টটাকে অটো স্ট্রিং এ কনভ্রাট করে ফেলে। কিন্তু echo কোন অবজেক্টকে স্ট্রিং এ কনভার্ট করতে পারে না।
