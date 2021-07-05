<?php

$filename = "d:\\PHP-Practise\\7.File\\rw-file\\7.7.txt";

$students = [
    [
        'fname' => 'rakibul',
        'lname' => 'sarker',
        'age'   => 16,
        'class' => 10,
        'roll'  => 34,

    ],
    [
        'fname' => 'shofiul',
        'lname' => 'hasan',
        'age'   => 27,
        'class' => 12,
        'roll'  => 23,

    ],
    [
        'fname' => 'hasibul',
        'lname' => 'sarker',
        'age'   => 22,
        'class' => 9,
        'roll'  => 76,

    ],
];

$student = [
    'fname' => 'haniful',
    'lname' => 'islam',
    'age'   => 214,
    'class' => 9,
    'roll'  => 04,
];

/*=========== Write data to the file ===========*/

// $data = serialize( $students );
// file_put_contents( $filename, $data, LOCK_EX );

/*=========== Read data from the file ===========*/

$data_from_file = file_get_contents( $filename );
$all_students = unserialize( $data_from_file );
print_r( $all_students );

/*=========== Push an student in the array ===========*/

// array_push( $all_students, $student );

/*=========== Delete data from the file ===========*/

// unset( $all_students[1] );
// $data = serialize( $all_students );
// file_put_contents( $filename, $data, LOCK_EX );
