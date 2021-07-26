<?php
// ক্লাসের common method গুলোকে trait মধ্যে রাখা হয়।
trait NumberSeriesOne {
    function numberSeriesA() {
        echo "Number Series A\n";
    }

    function numberSeriesB() {
        echo "Number Series B\n";
    }
}

trait NumberSeriesTwo {
    // একটি trait কে অন্য trait এর ভিতরে use করা যায়।
    use NumberSeriesOne;
    function numberSeriesC() {
        echo "Number Series C\n";
    }

    function numberSeriesD() {
        echo "Number Series D\n";
    }
}

class NumberSeries {
    use NumberSeriesOne, NumberSeriesTwo;
}

$ns = new NumberSeries();
$ns->numberSeriesA();
// যদি NumberSeriesTwo কে use করা না হয় তাহলে এখানে error আসবে।
$ns->numberSeriesC();

// trait কে use করা যায় কিন্তু instantiate করা যায় না।
// $nst = new NumberSeriesOne();
