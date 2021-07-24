<?php

abstract class Our_class {
    function sayHi() {
        echo "Hi!";
    }

    abstract function eat();
}

class My_class extends Our_class {
    function eat() {
        echo "I am eating.";
    }
}

$mc = new My_class();
$mc->eat();

// এখানে Our_class হলো parent class এবং My_class child class. যেহেতু parent class এর একটা মেথড এ abstract ব্যবহার করা হয়েছে, তাই অব্যশই child class এর body declare করতে হবে। abstract মেথড যদি কোন প্যারামিটার পাস করা হয় তাহলে child class এর ঐ একই ফাংশন এ ঐ মেথডগুলা পাস করাতে হবে কিন্তু মান ভিন্ন হতে পারে এতে কোন সমস্যা নেই।
