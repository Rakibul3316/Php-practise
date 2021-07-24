<?php

class A {
    public static $name;
    static function sayHi() {
        self::$name = 'rakibul';
        echo "Hi form parent\n";
    }
}

class B extends A {
    static function sayHi() {
        echo "Hi form child\n";
        parent::sayHi();
    }
}

B::sayHi();
echo B::$name;

// public static -> access form every where
// private static -> only for specific function
// protected static -> allow also child class
