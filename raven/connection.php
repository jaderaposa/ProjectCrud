<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="crud";

    $conn = new mysqli ($server, $username, $password, $database);

    if (!$conn) {   
        echo "Connection failed!";
    }else{
        echo "Connection Succesfully";
    }
?>

