<?php
    include "connect2.php";

    if (isset ($_GET['submit_form_get'])){
         
        $firstname = $_GET['firstname'];
        $middlename = $_GET['middlename'];
        $lastname = $_GET['lastname'];
        $birthdate = $_GET['birthdate'];
        $sex = $_GET['sex'];
        $school = $_GET['school'];
        $address = $_GET['address'];

        $query = "INSERT INTO students (firstname, middlename, lastname, birthdate, sex, school, address) VALUES ('$firstname', '$middlename', '$lastname', '$birthdate', '$sex', '$school', '$address')";


        if ($conn -> query ($query) === TRUE)
        {
            echo "<script>window.alert('Student Record Successfully Added!');</script>";
            echo "<script>window.location.assign('students2.php');</script>";
        }
    }
?>