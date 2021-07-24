<?php

spl_autoload_register( function ( $fileName ) {
    // echo $fileName;
    $path = strtolower( str_replace( "CloudStorage\\", "", $fileName ) ) . ".php";
    $path = str_replace( "\\", DIRECTORY_SEPARATOR, $path );
    include_once ( $path );
    // echo $path;
    // die();
} );
