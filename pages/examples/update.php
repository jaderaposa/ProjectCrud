<?php
    include "connect2.php";

    if (isset ($_POST['submit_form_get'])){
         
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $birthdate = $_POST['birthdate'];
        $school = $_POST['school'];
        $address = $_POST['address'];

        $query = "UPDATE students SET firstname='$firstname', middlename='$middlename', lastname='$lastname', school='$school', address='$address' WHERE id='$id'";

        if ($conn -> query($query) === TRUE ){
            header ('location: students2.php');
        }
    }
?>