<?php
    include "connect2.php";

    if (isset ($_GET['signin_form_get'])){
         
        $email = $_GET['email'];
        $password = $_GET['password'];

        echo "$email - $password";

        $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

        if ($conn -> query ($query) === TRUE){

            echo "INSERTED SUCCESSFULLY";
            echo '<script>Window.alert("INSERTED SUCCESSFULLY")</script>';
            echo "<script>Window.history.go (-1);</script>";
            header ('location: students2.php');
        }
        else{
            
            echo "ERROR!!!";
            echo '<script>Window.alert("ERROR!!!")</script>';
        }
    }
?>