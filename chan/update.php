<?php
    include "connection1.php";

    if(isset($_POST['submit'])){

        $u_id = $_POST['u_id'];
        $fname = $_POST['firstname'];
        $mname = $_POST['midname'];
        $lname = $_POST['lastname'];
        $school = $_POST['school'];
        $address = $_POST['address'];

        $sql_query = "UPDATE `students` SET `firstname`='$fname',`midname`='$mname'
        ,`lastname`='$lname',`school`='$school',`address`='$address' 
        WHERE ID = '$u_id'";

        if ($con -> query($sql_query) === TRUE){
            header ('Location: normal-tables.php');
        }
    }

?>