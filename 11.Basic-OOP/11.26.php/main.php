<?php

function autoLoad( $name ) {
    if ( strpos( $name, "Planet_" ) !== false ) {
        $filename = str_replace( "Planet_", "", $name );
        include strtolower( "planets/{$filename}.php" );
    } else {
        include "{$name}.php";
    }
}

spl_autoload_register( "autoLoad" );

( new SpaceShip )->launch();
( new Planet_Mars )->getName();
( new Bike )->getType();
