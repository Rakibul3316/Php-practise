<?php

class Animal {

    protected $name; // এখানে protected ব্যবহার করা হয়েছে যাতে Dog ক্লাসেও আমরা $name টাকে ব্যবহার করতে পারি।

    public function __construct( $name ) {
        $this->name = $name;
    }

    public function eat() {
        echo "{$this->name} is eating";
    }

    public function sleep() {
        echo "{$this->name} is sleeping";
    }

    public function walk() {
        echo "{$this->name} is walking";
    }

    public function greet() {}

}

class Dog extends Animal {
    public function greet() {
        echo "{$this->name} says bow";
    }
}

// extends এর কাজ হলো, সে একটা ক্লাসের সবধরণের মেথডকে এবং প্রোপারটিকে অন্য যেকোন ক্লাসে ব্যবহার করতে ব্যবহার করা হয়।

$bull_dog = new Dog( "Tommy" );
$bull_dog->greet();
