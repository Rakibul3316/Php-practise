<?php

class Planet {
    static function echoName() {
        echo self::getName();
    }

    static function getName() {
        return "Planet\n";
    }
}

class Earth1 extends Planet {
    static function echoName() {
        echo "Earth\n";
    }
}

class Earth2 extends Planet {
    static function getName() {
        return "Earth";
    }
}

Earth2::echoName(); // এখানে Planet থেকে Earth2 কে তৈরি করা হয়েছে। যখন echoName() মেথডটাকে কল হয় তখন সে দেখতে পাই Earth2 এর ভিতরে এই নামে কোন মেথড নেই তখন সে Planet parent class এ খোজ করে তখন দেখে echoName() ভিতরে self::getName() ভাবে দেওয়া আছে। self::getName() এটা আসলে মিন করে যে, Planet ভিতরে ‍যদি কোন getName() মেথড থাকে তাহলে তাকে কল কর। এটাই আর্লি বাইন্ডিং।

// কিন্তু যদি self::getName() এর পরিবর্তে static::getName() দেওয়া হয় তাহলে তখন Planet তার child এর getName() মেথডকে ইনডিকেট করবে। মানে Earth2 এর getName() মেথডকে কল হবে। এটাই লেট বাইন্ডিং।

Earth1::echoName(); // এইক্ষেত্রে Earth ই প্রিন্ট হবে কারণ এখানে সরাসরি echoName() ফাংশনটাকে কল করা হয়েছে।

Planet::echoName(); //reuslt => Planet
