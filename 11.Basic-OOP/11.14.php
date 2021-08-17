<?php

class A {
    static function sayHi() {
        echo "Hi form parent\n";
    }
}

class B extends A {
    static function sayHi() {
        echo "Hi form child\n";
        parent::sayHi(); // static function এ child থেকে parent method কে কল করার নিয়ম।
    }
}

B::sayHi();

// parent এর কোন static function ফাংশনকে যদি override করতে চাই তাহলে অব্যশই child এ ঐ ফাংশনকে static হতে হবে।
