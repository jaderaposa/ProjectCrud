<?php
  
  // Include database connectivity
      
  include ("connect2.php");
  
  if (isset($_POST['register'])) {
      
      $errorMsg = "";
    
      $email    = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $password = password_hash($password, PASSWORD_DEFAULT);
      
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $execute = mysqli_query($conn, $sql);
        
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errorMsg = "Email in not valid try again";
      }else if(strlen($password) < 6) {
          $errorMsg  = "Password should be six digits";
      }else if($execute->num_rows == 1){
          $errorMsg = "This Email is already exists";
      }else{
          $query= "INSERT INTO users (email,password) 
                  VALUES('$email','$password')";
          $result = mysqli_query($conn, $query);
      if ($result == true) {
        echo "<script>window.alert('Successfully Registered!');</script>";
        echo "<script>window.location.replace('signin2.php');</script>";
      }else{
          $errorMsg  = "You are not Registred..Please Try again";
      }
    }
  }

?>