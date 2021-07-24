<?php

// ক্লাসের ভিতরে ধ্রুবক লেখার সময় define ব্যবহার না করে const ব্যবহার করতে হবে।

class MyClass {
    const CITY = 'Dhaka';

    function sayHi() {
        echo "Hi form" . self::CITY . "\n"; // const সবসময় static scope এ থাকে।
    }
}

$m = new MyClass();
$m->sayHi();
echo MyClass::CITY;
