<?php

class MotorCycle {
    private $parameters;

    function __construct( $displacement, $capacity, $milage ) {
        $this->parameters                 = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity']     = $capacity;
        $this->parameters['milage']       = $milage;
    }

    function __get( $name ) {
        return $this->parameters[$name];
    }

    function __set( $name, $value ) {
        $this->parameters[$name] = $value;
    }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} is not found\n";
            return false;
        }
        return true;
    }

    function __unset( $name ) {
        print_r( $this->parameters );
        unset( $this->parameters[$name] );
        print_r( $this->parameters );
    }

    function __call( $name, $arguments ) {
        if ( 'run' == $name ) {
            if ( $arguments ) {
                echo "I am running {$arguments[0]}\n";
            } else {
                echo "I am running";
            }
        }
    }

    static function __callStatic( $name, $arguments ) {
        echo "Static call for wash";
    }
}

$pulsar = new MotorCycle( '150cc', '16', '40kmph' );

$pulsar->displacement = "160cc\n";

echo $pulsar->displacement;

if ( isset( $pulsar->tireSize ) ) { // এখান কার isset ফাংশনটা ক্লাসের ভিতরের __isset মেথড কে কল করবে।
    echo "Found\n";
} else {
    echo "Not found\n";
}

unset( $pulsar->milage );

$pulsar->run( '100kmph' ); // এইধরনের সকল মেথডকে ধরার জন্য __call মেথড কে ব্যবহার করা হয়। মানে সকল inaccessable method কে invoke করার জন্য __call মেথড ব্যবহার করা হয়।

MotorCycle::wash();
