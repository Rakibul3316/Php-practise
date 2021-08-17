<?php

/* Method chaining */

class StringUtility {
    private $string;
    private $search;

    function __construct( $string ) {
        $this->string = $string;
    }

    function search( $string ) {
        $this->search = $string;
        return $this; // current object;
    }

    function replace( $string ) {
        if ( !isset( $this->search ) ) {
            throw new Exception( "Nothing to replace" );
        }

        $this->string = str_replace( $this->search, $string, $this->string );
        return $this;
    }

    function upperCase() {
        $this->string = strtoupper( $this->string );
        return $this;
    }

    function lowerCase() {
        $this->string = strtolower( $this->string );
        return $this;
    }

    function print() {
        echo $this->string;
    }
}

$s = new StringUtility( "Hello World" );
$s->search( 'Hello' )->replace( 'Hi' )->upperCase()->print();
// it's called method chaining.
