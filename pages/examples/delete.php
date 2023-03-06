<?php   
    include "connect2.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE from students where id=$id";
        if ($conn->query($query) === TRUE){
            echo "<script>window.alert('Student Record Successfully Deleted!');</script>";
            echo "<script>window.location.assign('students2.php');</script>";
        }
    } 
?>