<?php
session_start();
include_once 'config.php';

$action     = $_POST["action"] ?? '';
$statusCode = 0;
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
mysqli_set_charset( $connection, 'utf8' );

if ( !$connection ) {
    throw new Exception( "Cannot connect to the database" );
} else {
    if ( 'register' == $action ) {
        $username = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ( $username && $password ) {
            $hash  = password_hash( $password, PASSWORD_BCRYPT );
            $query = "INSERT INTO users (email, password) VALUES ('{$username}','{$hash}') ";
            // echo $query;
            mysqli_query( $connection, $query );
            if ( mysqli_error( $connection ) ) {
                $statusCode = 1;
            } else {
                $statusCode = 3;
            }
        } else {
            $statusCode = 2;
        }
        header( "Location: index.php?status={$statusCode}" );
    } else if ( 'login' == $action ) {
        $username = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if ( $username && $password ) {
            $query  = "SELECT id, password FROM users WHERE email='{$username}'";
            $result = mysqli_query( $connection, $query );
            if ( mysqli_num_rows( $result ) > 0 ) {
                $data      = mysqli_fetch_assoc( $result );
                $_password = $data['password'];
                $_id       = $data['id'];
                // echo $_password;
                if ( password_verify( $password, $_password ) ) {
                    $_SESSION['id'] = $_id;
                    header( "Location: words.php" );
                    die();
                    // $statusCode = 6;
                } else {
                    $statusCode = 4;
                }
            } else {
                $statusCode = 5;
            }
        } else {
            $statusCode = 2;
        }
        header( "Location: index.php?status={$statusCode}" );

    } else if ( 'addword' == $action ) {
        $word    = $_REQUEST['word'] ?? '';
        $meaning = $_REQUEST['meaning'] ?? '';
        $user_id = $_SESSION['id'] ?? 0;
        if ( $word && $meaning && $user_id ) {
            $query = "INSERT INTO words (user_id, word, meaning) VALUES ('{$user_id}','{$word}','{$meaning}')";
            // echo $query;
            mysqli_query( $connection, $query );
            // if ( mysqli_error( $connection ) ) {
            //     echo mysqli_error( $connection );
            // }
        }

        header( "Location: words.php" );
    }
}
