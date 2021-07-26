<?php

trait NumberSeriesOne {
    function numberSeriesA() {
        echo "Number Series A from one\n";
    }
}

trait NumberSeriesTwo {
    function numberSeriesA() {
        echo "Number Series A from two\n";
    }
}

class NumberSeries {
    use NumberSeriesOne, NumberSeriesTwo {
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::numberSeriesA as numberSeriesAAA;
    }

    function numberSeriesA() {
        echo "Printing Number from class\n";
    }
}

$ns = new NumberSeries();
$ns->numberSeriesA();
$ns->numberSeriesAA();
$ns->numberSeriesAAA();
