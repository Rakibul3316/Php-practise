<?php

define( 'DB_NAME', 'D:\\PHP-Practise\\8.CRUD-Project\\data\\db.txt' );

function seed() {
    $data = [
        [
            'fname' => 'rakib',
            'lname' => 'sarker',
            'roll'  => 16,
        ],
        [
            'fname' => 'ragib',
            'lname' => 'pial',
            'roll'  => 27,
        ],
        [
            'fname' => 'arifin',
            'lname' => 'abir',
            'roll'  => 22,
        ],
        [
            'fname' => 'safin',
            'lname' => 'junaid',
            'roll'  => 05,
        ],
        [
            'fname' => 'shawon',
            'lname' => 'ahmed',
            'roll'  => 12,
        ],
    ];
    $serialized_data = serialize( $data );
    file_put_contents( DB_NAME, $serialized_data, LOCK_EX );
};