<?php

// $allDirs = scandir( getcwd() );
// print_r( $allDirs );

// foreach ( $allDirs as $dir ) {
//     if ( "." != $dir && '..' != $dir ) {
//         if ( is_dir( $dir ) ) {
//             echo "[d] => {$dir}\n";
//         } else {
//             echo "[f] => {$dir}\n";
//         }
//     }
// }

$allDirs = opendir( getcwd() );

while ( false !== ( $dir = readdir( $allDirs ) ) ) {
    echo "{$dir} \n";
}
