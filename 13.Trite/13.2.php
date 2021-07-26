<?php

trait NumberSeriesOne {
    function numberSeriesA() {
        echo "Number Series A\n";
    }

    function numberSeriesB() {
        echo "Number Series B\n";
    }
}

class SomeClass {
    function numberSeriesA() {
        echo "Printing + Printing Number Series A";
    }
}

class NumberSeries extends SomeClass {
    use NumberSeriesOne;

    // function numberSeriesA() {
    //     echo "Printing Number Series A";
    // }
}

$ns = new NumberSeries();
$ns->numberSeriesA(); // এখানে ক্লাসের ভিতরের numberSeriesA() মেথডটা প্রিন্ট হবে। কারণ trait এর কোন মেথড যদি ক্লাসের ভিতরে পুনরায় লেখা হয় তাহলে সেটা trait এর ঐ মেথডকে override করে। (লাইন নম্বর ১৬)।

// আবার extends কোন ক্লাসের ক্ষেত্রে trait এর কোন মেথড কে যদি override করা হয় তাহলে trait ঐ মেথডটাই কল হবে।
