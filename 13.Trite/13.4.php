<?php

trait MyTrait {
    static $number;
    abstract function sayHi();
}

class MyClassA {
    use MyTrait;

    function sayHi() {
        echo "Hi\n";
    }
}

class MyClassB {
    use MyTrait;

    function sayHi() {
        echo "Hi\n";
    }
}

MyClassA::$number = 2;
echo MyClassA::$number; // এখানে $number এর মান আসতেছে ২। কিন্তু যদি নতুন MyClassB::$number এর মান চেক করা হয় তাহলে কোন মান পাওয়া যাবে না। কারণ নতুন করে যদি কোন অবজেক্ট তৈরি করা হয় এবং সেখানের কোন static variable মান আগের কোন অবজেক্ট এর মাধ্যমে ডিফাইন করা থাকে তাও সেটা নতুন অবজেক্ট এর ক্ষেত্রে blank হবে।
echo MyClassB::$number;

// একটা trait ভিতরে যদি কোন static property থাকে এবং সেই trait যদি অন্য কোন ক্লাস ব্যবহার করে তবে প্রতিটা ক্লাসের জন্য সেই static property instance টা আলাদা আলাদা হবে।
