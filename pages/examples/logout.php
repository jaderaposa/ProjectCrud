<?php   
    session_start(); 
    session_destroy(); 
    header("location: signin2.php"); 
    exit();
?>