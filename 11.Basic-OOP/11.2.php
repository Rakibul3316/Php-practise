<?php
// class হচ্ছে basic building block. class কে iniatilize করা হলে তাকে object বলে।

// class হলো object এর একটা skeleton.

// ক্লাস এর দুইটা জিনিস থাকে একটি method এবং অন্যটি হচ্ছে property।

// method হচ্ছে একটা ফাংশন যে কোন কিছু একটা করবে।
// property হচ্ছে এর একটা বৈশিষ্ট্য।

// ক্লাস নাম সবসময় বড় অক্ষরে লিখতে হয়।

// sayHi() হলো Human এবং Cat এর method.

class Human {
    public $name; // এটা হলো Human class এর একটা property. public করলে সেটা বাইরে থেকে access করা যায় কিন্তু private হলে বাইরে থেকে access করা যায় না।
    function sayHi() {
        echo "salam\n";
        $this->sayName();
    }

    function sayName() {
        // echo "My name is {$name}"; // this is throw an error like this (undefined variable.)
        echo "My name is {$this->name}\n"; // ক্লাসের ভিতরের কোন প্রোপারটি বা মেথড কে ধরতে হলে $this key word ব্যবহার করতে হয়।
    }
}

class Cat {
    function sayHi() {
        echo "Meow\n";
    }
}

$h1       = new Human();
$h1->name = 'Rakibul'; // set the value of name;
$c1       = new Cat();

// এখানে Human, Cat হলো ক্লাস এবং $h1, $c1 হলো object.

$h1->sayHi(); // (->) এই চিহ্নের মাধ্যমে object এর method, property ‍access করা যায়।
echo $h1->name; // get the value of name;
$c1->sayHi();
