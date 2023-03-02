<?php

// session_start();

// $username = $_POST["username"];
// $error = "username/password incorrect";

// if($username == "admin"){
//     $_SESSION["username"] = $username;
//     header("location: students2.php"); //send user to homepage, for example.
// }else{
//     $_SESSION["error"] = $error;
//     header("location: signin2.php"); //send user back to the login page.
// }

?>



<?php
   session_start();
   require 'connect2.php';

   if(isset($_POST["submit"])){

     $uname = $_POST["username"];
     $pass = $_POST["password"];
     $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$uname'");
     $row = mysqli_fetch_assoc($result);
     
     if(mysqli_num_rows($result) > 0){

       if($pass == $row['password']){
         $_SESSION["users"] = true;
         $_SESSION["id"] = $row["id"];
         header("Location: students2.php");
       }
       else{
         echo
         "<script> alert('Wrong Password'); </script>";
       }
     }
     else{
       echo
       "<script> alert('User not Registered'); </script>";
     }
   }
?>

    

    
    <!-- $server="localhost";
    $username="root";
    $password="";
    $database="projectcrud";

    $conn = mysql_connect($server,$username,$password);
    $conn = mysql_select_db($db);

    if(isset($_POST['username'])){
        
        $uname=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
        
        $result=mysql_query($sql);
        
        if(mysql_num_rows($result)==1){
            echo " You Have Successfully Logged in";
            exit();
        }
        else{
            echo "You Have Entered Incorrect Password";
            exit();
        }
    } -->




    



    <!-- // if (isset ($_GET['signin_form_get'])){
         
    //     $email = $_GET['email'];
    //     $password = $_GET['password'];

    //     echo "$email - $password";

    //     $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    //     $query = "INSERT INTO users VALUES ('', '$email', '$password')";

    //     if ($conn -> query ($query) === TRUE){

    //         echo "INSERTED SUCCESSFULLY";
    //         echo '<script>Window.alert("INSERTED SUCCESSFULLY")</script>';
    //         echo "<script>Window.history.go (-1);</script>";
    //         header ('location: students2.php');
    //     }
    //     else{
            
    //         echo "ERROR!!!";
    //         echo '<script>Window.alert("ERROR!!!")</script>';
    //     }
    // }
?> -->