<?php

class ParentClass {

    function sayHi() {
        echo "Hi from parent class!\n";
    }
}

class ChildClass extends ParentClass {
    function sayHi() {
        parent::sayHi(); // যদি ParentClass ক্লাসের কোন মেথডকে ChildClass থেকে কল করতে হয় তাহলে এভাবে কল করতে হয়।
        echo "Hello from child class!\n";
    }
}

$cc = new ChildClass();
$cc->sayHi();

// এখানে ParentClass এবং ChildClass ক্লাস এর মধ্যে একই মেথড sayHi() আছে। যখন Child Object তৈরি করে sayHi() মেথড কে কল করা হবে। তখন সে ParentClass এর sayHi() মেথডকে override করে ChildClass এর sayHi() মেথড রান করেবে।
