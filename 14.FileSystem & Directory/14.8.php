<?php

function copyDir( $source, $destination ) {
    $source      = rtrim( $source, '/' );
    $destination = rtrim( $destination, '/' );

    if ( !file_exists( $destination ) ) {
        mkdir( $destination );
    }

    foreach ( scandir( $source ) as $file ) {
        if ( "." != $file && ".." != $file ) {
            $sourcePath      = $source . DIRECTORY_SEPARATOR . $file;
            $destinationPath = $destination . DIRECTORY_SEPARATOR . $file;

            if ( is_dir( $sourcePath ) ) {
                copyDir( $sourcePath, $destinationPath );
            } elseif ( is_file( $sourcePath ) ) {
                copy( $sourcePath, $destinationPath );
            }
        }
    }
}

$source      = getcwd() . "/14.FileSystem & Directory/test";
$destination = getcwd() . "/14.FileSystem & Directory/target";

copyDir( $source, $destination );
