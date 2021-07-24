<?php

// See the vedio for understand this code.

class DistrictCollection implements IteratorAggregate, Countable {
    private $districts;

    function __construct() {
        $this->districts = [];
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    function getIterator() {
        return new ArrayIterator( $this->districts );
    }

    function count() {
        return count( $this->districts );
    }
}

$districts = new DistrictCollection();
$districts->add( "Kishorgong" );
$districts->add( "Shylet" );
$districts->add( "Khulna" );
$districts->add( "Chittagong" );

foreach ( $districts as $district ) {
    echo $district . "\n";
}

echo "Number of districts added = " . count( $districts );
