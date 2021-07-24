<?php

class MyException extends Exception {};
class NetworkException extends Exception {};

function testException() {
    throw new NetworkException();
}

try {
    testException();
} catch ( Exception $e ) {
    // MyException, NetworkException এই দুইটা ক্লাসই Exception থেকে extends হয়েছে তাই এখানে catch ব্লক এ প্রথমে Exception catch হবে। আর catch ব্লক এর ক্ষেত্রে কোন একটা catch ব্লক যদি execute হয় তাহলে বাকি catch block গুলো আর কাজ করে না।
    // আমরা যদি আমাদের কাস্টম Exception গুলোকে আগে execute করাতে চাই তাহলে সেই কাস্টম Exception গুলোকে আগে লিখতে হবে। এবং সবার শেষে Exception ব্লক লিখতে হবে। তাহলে হবে কি যদি কোন কাস্টম Exception কাজ না করে, সবশেষ Exception ব্লকটা execute হবে।
    echo "Exception Caught";
} catch ( MyException $e ) {
    echo "MyException Caught";
} catch ( NetworkException $e ) {
    echo "NetworkException Caught";
}
