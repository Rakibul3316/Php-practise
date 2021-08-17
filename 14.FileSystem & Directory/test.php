<?php

mkdir( 'test1/d1/d2/d3', 0777, true );
file_put_contents( "test1/g.txt", 'hello world' );
file_put_contents( "test1/d1/g.txt", 'hello world' );
file_put_contents( "test1/d1/d2/g.txt", 'hello world' );
file_put_contents( "test1/d1/d2/d3/g.txt", 'hello world' );
sleep( 5 );

function deleteDir( $path ) {
    $allDirs = scandir( $path );
    if ( count( $allDirs ) > 0 ) {
        foreach ( $allDirs as $file ) {
            if ( '.' != $file && '..' != $file ) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if ( is_dir( $filePath ) ) {
                    deleteDir( $filePath );
                } else {
                    unlink( $filePath );
                }
            }
        }
    }
    rmdir( $path );
}

deleteDir( getcwd() . DIRECTORY_SEPARATOR . '/test1' );
