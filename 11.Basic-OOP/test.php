<?php

class Planet {
    static function printName() {
        echo self::getName();
    }

    static function getName() {
        echo "Planet\n";
    }
}

class Earth extends Planet {
    static function getName() {
        echo "Call from earth\n";
    }
}

class Earth2 extends Planet {
    static function printName() {
        echo "Call form earth2\n";
    }
}

echo Earth::printName();
echo Earth2::printName();
