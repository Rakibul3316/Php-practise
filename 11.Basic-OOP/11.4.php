<?php

/*
অবজেক্টের মেথড এবং প্রোপারটিগুলো ৩ ভাগে ডিক্লেয়ার করা যায়।
1. public
2. private
3. protected (এটা ইনহেরিটেন্স করার সময় বুঝবো)।
 */

class Fund {
    private $fund;

    function __contruct( $initial_fund = 0 ) {
        $this->fund = $initial_fund;
    }

    public function add_fund( $money ) {
        $this->fund += $money;
    }

    public function deduct_fund( $money ) {
        $this->fund -= $money;
    }

    public function get_total() {
        if ( $this->fund ) {
            echo "Total fund is {$this->fund} taka.\n";
        } else {
            echo "Total fund is 0 taka.\n";
        }
    }
}

$our_fund = new Fund();
// $our_fund->get_total();
$our_fund->add_fund( 100 );
$our_fund->deduct_fund( 30 );
$our_fund->get_total();

// ক্লাস এর কোন মেথড এবং প্রোপারটিকে যদি ক্লাস এর বাইরে থেকে access করতে হয় তাহলে তাকে পাবলিক রাখতে হবে, আর যদি বাইরে থেকে access করতে না হয় তাহলে তাকে private রাখতে হবে।
// পাবলিক অথবা প্রাইভেট কোন কিছু বলে না দিলে এটা সবসময় পাবলিকই হবে।
