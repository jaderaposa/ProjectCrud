<?php   
    session_start(); 
    session_destroy(); 
    echo "<script>window.alert('User Logged Out!');</script>";
    echo "<script>window.location.replace('signin2.php');</script>";
    exit();
?>