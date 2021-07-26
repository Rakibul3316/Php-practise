<?php

trait NumberSeriesOne {
    function numberSeriesA() {
        echo "print A";
    }
    function numberSeriesB() {
        echo "print B";
    }
}

trait NumberSeriesTwo {
    function numberSeriesC() {
        echo "print C";
    }
    function numberSeriesD() {
        echo "print D";
    }
}

class NumberSeries {
    use NumberSeriesOne, NumberSeriesTwo;
}

$ns = new NumberSeries;
$ns->numberSeriesA();
$ns->numberSeriesC();
