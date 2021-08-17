<?php

include_once "config.php";
// echo DB_PASSWORD;

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    throw new Exception( "Cannot connect to the database" );
    // echo "not connected";
} else {
    echo "connected";
    // echo mysqli_query( $connection, "INSERT INTO tasks (task, date) VALUES ('Do Something more', '2019-05-20')" );
    $result = mysqli_query( $connection, "SELECT * FROM tasks" );
    // echo "length of data" . count( $result );
    while ( $data = mysqli_fetch_assoc( $result ) ) {
        echo "<pre>";
        print_r( $data );
        echo "</pre>";
    }
    // mysqli_query( $connection, "DELETE FROM tasks" );
}
