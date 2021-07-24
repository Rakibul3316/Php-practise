<?php

class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct( $color_code = '' ) {
        // echo "I am construct\n";
        $this->color = ltrim( $color_code, '#' );
        $this->parse_color();
    }

    function get_color() {
        return $this->color;
    }

    function get_RGB_color() {
        return [$this->red, $this->green, $this->blue];
    }

    function read_RGB_color() {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    function set_color( $color_code ) {
        echo "I am set color\n";
        $this->color = ltrim( $color_code, '#' );
        $this->parse_color();
    }

    private function parse_color() {
        // echo "I am parser\n";
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, '%02x%02x%02x' );
        } else {
            list( $this->red, $this->green, $this->blue ) = [0, 0, 0];
        }
    }

    function get_red() {
        return $this->red;
    }

    function get_green() {
        return $this->green;
    }

    function get_blue() {
        return $this->blue;
    }
}

$my_color = new RGB( '#ef22e4' );
echo $my_color->get_color( '#ef22e4' );
// $my_color->read_RGB_color();
