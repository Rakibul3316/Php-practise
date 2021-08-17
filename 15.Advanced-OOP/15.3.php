<?php

interface BaseStorage {
    function setFileName( $fn );
    function writeData( $data );
    // function appendData( $data );
    function setMode( $mode );
}

class Storage implements BaseStorage {
    private $fn;
    private $mode;

    function __construct( $fn, $mode = null ) {
        $this->setFileName( $fn );
        $this->mode = $mode;
    }

    function setFileName( $fn ) {
        $this->fn = $fn;
    }

    function writeData( $data ) {
        file_put_contents( $this->fn, $data, $this->mode );
    }

    // function appendData( $data ) {
    //     file_put_contents( $this->fn, $data, FILE_APPEND );
    // }

    function setMode( $mode ) {
        $this->mode = $mode;
    }
}

// class WriteDataManager {
//     function saveData( $filename, $data ) {
//         $storage = new Storage( $filename );
//         $storage->writeData( $data );
//     }
// }

class WriteDataManager {
    function saveData( BaseStorage $storage, $data ) {
        $storage->writeData( $data );
    }
}

$file = new Storage( '/tmp/abcd.txt' );
$file->setMode( FILE_APPEND );
$dm = new WriteDataManager();
$dm->saveData( $file, 'My Data' );
