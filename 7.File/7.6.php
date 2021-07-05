<?php

$filename = "d:\\PHP-Practise\\7.File\\rw-file\\7.6.txt";

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

/*============= Write the file =============*/

// $fp = fopen( $filename, "w" );
// foreach ( $students as $student ) {
//     $data = sprintf( "%s,%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll'] );
//     fwrite( $fp, $data );
// }

// %s,%s,%s,%s,%s => it's called comma separate value (csv).

// fclose( $fp );

/*============= Read the file =============*/

// $fp = fopen( $filename, "r" );
// while ( $data = fgets( $fp ) ) {
//     $student = explode( ",", $data );
//     printf( "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4] );
// }
// fclose( $fp );

/*============= Use fputcsv function to write the file =============*/

// $fp = fopen( $filename, "w" );
// foreach ( $students as $student ) {
//     fputcsv( $fp, $student );
// }

/*============= Use fgetcsv function to read the file =============*/

// $fp = fopen( $filename, "r" );
// while ( $student = fgetcsv( $fp ) ) {
//     printf( "Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3], $student[4] );
// }
// fclose( $fp );

/*============= Add a student in the students array =============*/

// $student = [
//     'fname' => 'haniful',
//     'lname' => 'islam',
//     'age'   => 214,
//     'class' => 9,
//     'roll'  => 04,
// ];

// $fp = fopen( $filename, "a" );
// fputcsv( $fp, $student );
// fclose( $fp );

/*============= Delete a student in the students array =============*/

$data = file( $filename );
unset( $data[1] );
print_r( $data );
$fp = fopen( $filename, "w" );
foreach ( $data as $line ) {
    fwrite( $fp, $line );
}
fclose( $fp );
