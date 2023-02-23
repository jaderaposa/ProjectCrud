<?php   
    include "connect2.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE from students where id=$id";
        $conn->query($query);
    }
    header('location: students2.php');
    exit;
?>