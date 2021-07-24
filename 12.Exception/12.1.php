<?php

class Student {
    function __construct( $name, $age ) {
        $this->name = $name;

        if ( $age < 4 ) {
            throw new Exception( "Invalid Age", 1001 );
        }
        $this->age = $age;
    }
}

// এখানে আমরা age যাই পাঠাইনা কেন কোন এরর আসবে না। কিন্তু আমরা চাচ্ছি যে, যদি age ৪ এর কম হয় তাহলে একটা এরর আসবে। এটার জন্য exception ব্যবহার করবো।

/*
এটা হলো বেসিক গঠন exception দেখানোর এবং exception এর এরর ধরার।
try {

} catch () {

} finally {

}
 */

try {
    // আমরা যে কোডটা রান করতে চাই সেটা আমরা এখানে রাখবো। এবং এখানেই আমরা আমাদের অবজেক্ট তৈরি করবো।
    $student = new Student( "Rahim", 1 );
} catch ( Exception $e ) {
    // এই ব্লকে মূলত এরর গুলোকে ধরা হয় বা যদি কোন Exception আসে তাহরে এখানে তা ধরা হয়।
    echo $e->getCode() . ":" . $e->getMessage();
} finally {
    // এটা সাধারণত ব্যবহার করা হয় না। এটা সবসময় রান হবে।
}
