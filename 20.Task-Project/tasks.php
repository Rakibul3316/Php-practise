<?php

include_once 'config.php';

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    throw new Exception( "Cannot connect to the database" );
    // echo "not connected";
} else {
    $action = $_POST['action'] ?? "";
    if ( !$action ) {
        header( 'location: index.php' );
        die();
    } else {
        // echo $action;
        if ( 'add' == $action ) {
            // insert data
            $task = $_POST['task'];
            $date = $_POST['date'];

            if ( $task && $date ) {
                $query = "INSERT INTO " . DB_TABLE . " (task, date) VALUES ('{$task}','{$date}')";
                // echo $query;
                mysqli_query( $connection, $query );
                header( 'location: index.php?added=true' );
            }
        } elseif ( "complete" == $action ) {
            $taskid = $_POST["taskid"];
            // echo $taskid;
            if ( $taskid ) {
                $query = "UPDATE tasks SET complete=1 WHERE id={$taskid} LIMIT 1";
                mysqli_query( $connection, $query );
            }
            header( 'location: index.php' );
        } elseif ( "delete" == $action ) {
            $taskid = $_POST["taskid"];
            // echo "DELETING {$taskid}";
            // die();
            if ( $taskid ) {
                $query = "DELETE FROM tasks WHERE id={$taskid} LIMIT 1";
                mysqli_query( $connection, $query );
            }
            header( 'location: index.php' );
        } elseif ( "incomplete" == $action ) {
            $taskid = $_POST["taskid"];
            if ( $taskid ) {
                $query = "UPDATE tasks SET complete=0 WHERE id={$taskid} LIMIT 1";
                mysqli_query( $connection, $query );
            }
            header( 'location: index.php' );
        } elseif ( "bulkcomplete" == $action ) {
            $taskids  = $_POST["taskids"];
            $_taskids = join( ",", $taskids );
            // print_r( $taskids );
            if ( $taskids ) {
                $query = "UPDATE tasks SET complete=1 WHERE id in ($_taskids)";
                // echo $query;
                mysqli_query( $connection, $query );
            }
            header( 'location: index.php' );
        } elseif ( "bulkdelete" == $action ) {
            $taskids  = $_POST["taskids"];
            $_taskids = join( ",", $taskids );
            // print_r( $taskids );
            if ( $taskids ) {
                $query = "DELETE FROM tasks WHERE id in ($_taskids)";
                // echo $query;
                mysqli_query( $connection, $query );
            }
            header( 'location: index.php' );
        }
    }
}

mysqli_close( $connection );
