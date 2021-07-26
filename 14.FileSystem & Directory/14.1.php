<?php

/* get current working directory */
// echo getcwd();

/* see the file and folder in the directory. */

$entries = scandir( getcwd() );
// print_r( $entries );

foreach ( $entries as $entry ) {
    // '.' = is current directory & '..' = is parent directory
    if ( "." != $entry && ".." != $entry ) {
        if ( is_dir( $entry ) ) { // is_dir = is it directory ?
            echo "[d] {$entry} \n";
        } else {
            echo "[f] {$entry} \n";
        }
    }
}

function countDir( $dir ) {
    $count   = 0;
    $entries = scandir( $dir );
    foreach ( $entries as $entry ) {
        if ( "." != $entry && ".." != $entry ) {
            if ( is_dir( $entry ) ) { // is_dir = is it directory ?
                $count++;
            }
        }
    }
    return $count;
}

echo countDir( getcwd() ) . "\n";

/* another way to see the file and folder in the directory. */

$entries2 = opendir( getcwd() );
// print_r( $entries2 );

while ( false !== ( $entry = readdir( $entries2 ) ) ) {
    echo $entry . "\n";
}
;
