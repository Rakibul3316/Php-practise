<?php

// mkdir = make directory.
// rmdir = remove directory.

mkdir( 'test', 0777, true );
file_put_contents( 'test/f.txt', 'hello' );
sleep( 10 );
// rmdir( 'test' );

// কোন একটা ডিরেক্টটরির মধ্যে যদি ফাইল বা ফোলডার থাকে তাহলে সেই ডিরেক্টটরিকে rmdir() মাধ্যমে ডিলেট করা যায় না।

// যেকোন ফাইল ডিলেট করার জন্য unlink ব্যবহার করা হয়।

deleteDir( getcwd() . DIRECTORY_SEPARATOR . 'test' );

function deleteDir( $path ) {
    // print_r( scandir( $path ) );
    $filesInPath = scandir( $path );
    if ( count( $filesInPath ) > 2 ) {
        foreach ( $filesInPath as $file ) {
            if ( "." != $file && ".." != $file ) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                unlink( $filePath );
            }
        }
    }
    rmdir( $path );
}
