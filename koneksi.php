<?php
/**
 * Created by PhpStorm.
 * User: alfi
 * Date: 26/03/18
 * Time: 15:08
 */
    $host = "localhost";
    $username = "root";
    $password = "1sampai9!";
    $db_name = "dsc";
    $mysqli = new mysqli($host, $username, $password, $db_name);
    if(mysqli_connect_errno()) {
        //echo "Error: Could not connect to database. ";
        echo mysqli_connect_error();
        exit;
    }

?>