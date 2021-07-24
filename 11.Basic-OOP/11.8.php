<?php

class Shape {
    protected $name;
    protected $area;

    public function __construct( $name ) {
        $this->name = $name;
        $this->calculate_area();
    }

    public function get_area() {
        echo "This {$this->name}'s area is {$this->area}.";
    }

    public function calculate_area() {}

}

class Triangle extends Shape {
    private $a, $b, $c;

    public function __construct( $a, $b, $c ) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct( "Triangle" );
    }

    public function calculate_area() {
        $perimeter  = ( $this->a + $this->b + $this->c ) / 2;
        $this->area = sqrt( $perimeter * ( $perimeter - $this->a ) * ( $perimeter - $this->b ) * ( $perimeter - $this->c ) );
    }
}

class Rectangle extends Shape {
    private $a, $b;

    public function __construct( $a, $b ) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct( "Rectangle" );
    }

    public function calculate_area() {
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle( 4, 7 );
$r->get_area();

$t = new Triangle( 5, 6, 7 );
$t->get_area();
