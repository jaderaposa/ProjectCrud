<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="projectcrud";

    $conn = new mysqli ($server, $username, $password, $database);

    if (!$conn) {   
        echo "Connection failed!";
    }else{
        echo "";
    }
?>

