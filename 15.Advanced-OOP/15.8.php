<?php

/*
L => Liskov Substitution Principle (LSP)
(কোন একটা ফাংশন বা ক্লাস বা অবজেক্ট যদি একটা নির্দিষ্ট ধরণের অবজেক্ট নেয় [আর্গুমেন্ট হিসেবে] তাহলে ইচ্ছা করলে ঐ অবজেক্টটার সাব ক্লাসগুলোও পাস করা যাবে। অথবা একটা অবজেক্ট দিয়ে যদি কোন কাজ হয় তাহলে অবজেক্টর সাব ক্লাস বা child class দিয়েও সেই একই ধরণের কাজ হবে। অথবা কোন একটা অবজেক্টকে যদি প্যারামিটার হিসেবে পাস করি তাহলে ঐ অবজেক্ট এর সাব ক্লাসগুলোকেও প্যারামিটার হিসেবে পাস করতে পারবো। )
 */

abstract class Bird {
    abstract function eat();
    abstract function sleep();
    // abstract function fly();
}

abstract class FlyingBrid extends Bird {
    abstract function fly();
}

abstract class WalkingBrid extends Bird {
    abstract function walk();
}

class BirdManager {
    function maintainBird( Bird $b ) {
        $b->eat();
        $b->sleep();
        // $b->fly();
    }

    function moveFlyingBird( FlyingBrid $fb ) {
        $fb->fly();
    }

    function moveWalkingBird( WalkingBrid $fb ) {
        $fb->walk();
    }
}

class Eagle extends FlyingBrid {
    function eat() {}
    function sleep() {}
    function fly() {}
}

class Penguin extends WalkingBrid {
    function eat() {}
    function sleep() {}
    /*
    function fly() {
    // walk the bird;
    }
     */

    function walk() {}
}

// এখানে ঈগল fly করতে পারলেও প্যাংগুয়িন কিন্তু fly করতে পারবে। তো আমরা আমাদের ক্লাসে লিখছে fly কিন্তু প্যাংগুয়িনের ক্ষেত্রে করাচ্ছি walk তাহলে এটা ঠিক হলো না। তাই এই ক্লাসের ডিজাইন প্যাট্রান ঠিক নেই। এই সমস্যার সমাধানের জন্য আমাদের Liskov Substitution Principle ব্যবহার করতে হবে।
