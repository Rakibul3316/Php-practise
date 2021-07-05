<?php

$filename = "d:\\PHP-Practise\\7.File\\rw-file\\7.8.txt";

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
/*=========== Write data to the file ===========*/

$en_code_data = json_encode( $students );
file_put_contents( $filename, $en_code_data, LOCK_EX );

/*=========== Read data from the file ===========*/

$data = file_get_contents( $filename );
$all_students = json_decode( $data, true );
print_r( $all_students );