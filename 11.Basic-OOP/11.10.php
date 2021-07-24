<?php

abstract class OurClass {
    final function doSomething() {
        echo "Doing Something";
    }
}

class MyClass extends OurClass {
    // function doSomething() {
    //     echo "Doing Nothing";
    // }
}

$cc = new MyClass();
$cc->doSomething(); // result => Doing Nothing.

// parent class কোন মেথড কে যদি child class আবার ডিক্লেয়ার করা হয় তাহলে child class এর ডিক্লেয়ারকৃত মেথড parent class এর মেথডকে override করে ফেলে।

// কিন্তু যদি parent class ক্লাসের ঐ মেথডের আগে final keyword ব্যবহার করা হয় তাহলে child class ঐ মেথডকে আর ডিক্লেয়ার করা যাবে না।

// এটা সাধারণ এবং abstract ক্লাস এর ক্ষেত্রে প্রযোজ্য।
