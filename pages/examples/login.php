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

  //  require 'connect2.php';

  //  if(isset($_POST["submit"])){

  //    $uname = $_POST["username"];
  //    $pass = $_POST["password"];
  //    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$uname'");
  //    $row = mysqli_fetch_assoc($result);
     
  //    if(mysqli_num_rows($result) > 0){

  //      if($pass == $row['password']){
  //       session_start();
  //       $_SESSION["users"] = true;
  //       $_SESSION["id"] = $row["id"];
  //       if (isset($_SESSION["users"])) {
  //         $_SESSION["login"] = true;
  //       }
  //       echo "<script>window.location.assign('students2.php');</script>";
  //       exit;
  //      }

  //      else{ 
  //       echo "<script>window.location.assign('signin2.php');</script>";
  //      }
       
  //    }
  //    else{
  //      echo "<script> alert('User not Registered'); </script>";
  //      echo "<script>window.location.assign('signin2.php');</script>";
  //    }
  //  }
?>

<!-- <style>

    #dialogBox {
        position: fixed;
        top: 10%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 30px;
        background-color: #fff;
        border: 1px solid #ccc;
        z-index: 9999;
    }

</style> -->

       
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

<?php

  if (isset($_SESSION['id'])) {
      header("Location:students2.php");
  }
    
  include ("connect2.php");
  
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";

      $email    = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']); 
      
  if (!empty($email) || !empty($password)) {
        $query  = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
          while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                  session_start();
                  $_SESSION["email"] = true;
                  $_SESSION["id"] = $row["id"];

              if (isset($_SESSION["email"])) {
                $_SESSION["login"] = true;
                echo "<script>window.location.assign('students2.php')</script>" ;
              }
            }else{
                $errorMsg = "Email or Password Is Invalid";
            }    
          }
        }else{
          $errorMsg = "No user found on this email";
        } 
    }else{
      $errorMsg = "Email and Password is required";
    }
  }
?>