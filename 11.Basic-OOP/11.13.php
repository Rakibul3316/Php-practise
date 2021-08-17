<?php

// আমরা যদি factorial অথবা fibonacci কে কল করতে চাই তাহলে বারবার আমাদের অবজেক্ট তৈরি করে তারপর তাদের কল করতে হবে, এতে করে র‌্যামের জায়গা নষ্ট হয় এবং প্রোসেস হতেও অনেক সময় লাগে। আমরা যদি চাই তাহলে এদেরকে অবজেক্ট তৈরি না করেও কল করতে পারি। তখন আমাদের static ব্যবহার করতে হবে।

class MathCalculator {
    private $number;
    static $name;
    static function fibonacci( $n ) {
        // $this->number = 12; // এখানে এই ফাংশনটা static, public না তাই এখানে this ব্যবহার করলে error আসবে।
        // static function এর ভিতর থেকে private or public variable কে self দিয়েও কল করা যাবে না। static function এর ভিতর অবশ্যই ‍static variable কেই কল করতে হবে।
        self::$name;
        self::doSomething();
        echo "Fibonacci series is up to {$n}\n";
    }

    static function doSomething() {
        echo "Doing something\n";
    }

    function factorial( $m ) {
        self::$name = "ABCD"; // static property access করার নিয়ম।
        self::doSomething(); // এভাবে কল করা যাবে
        $this->doSomething(); // এভাবে কল করা যাবে
        $this->number = 12;
        echo "Factorial of {$m}\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial( 5 );

MathCalculator::fibonacci( 8 );
//static method এর ক্ষেত্রে ক্লাস তৈরি না করেই ফাংশনকে কল করা যায়।
echo MathCalculator::$name;
