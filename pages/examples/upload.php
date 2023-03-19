<?php 
    include "connect2.php";

    $target_dir="../../images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    // Check if a file has been uploaded
    // if(isset($_FILES['image'])) {

      // Make sure the file was sent without errors
    //   if($_FILES['uploaded_file']['error'] == 0) {
    //     // Connect to the database
    
    
            // Check if image file is an actual image or a fake image
            if (isset($_POST["submit_form_get"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                
                    $filename = htmlspecialchars (basename($_FILES["image"]["name"]));

                            
                    $firstname = $_POST['firstname'];
                    $middlename = $_POST['middlename'];
                    $lastname = $_POST['lastname'];
                    $birthdate = $_POST['birthdate'];
                    $sex = $_POST['sex'];
                    $school = $_POST['school'];
                    $address = $_POST['address'];

                    // // No file was uploaded so select this instead
                    // if(!isset($_FILES['image'])) {
                    //     $image = "../../images/blank.png";
                    // } else {
                    //     $image = $_FILES['image'];
                    // }

                    $query = "INSERT INTO students VALUES ('','$firstname', '$middlename', '$lastname', '$birthdate', '$sex', '$school', '$address', '$filename')";


                        if($conn->query($query) === TRUE) {
                            echo "<script>window.alert('Student Record Successfully Added!'); </script>";
                            echo "<script>window.location.replace('students2.php');</script>";
                        } else {
                            echo '<script>window.alert("ERROR!")</script>';
                        }
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
        // /* WORKING */

        // if (isset ($_POST['submit_form_get'])){
             
        //     $id = $_POST['id'];
        //     $firstname = $_POST['firstname'];
        //     $middlename = $_POST['middlename'];
        //     $lastname = $_POST['lastname'];
        //     $birthdate = $_POST['birthdate'];
        //     $sex = $_POST['sex'];
        //     $school = $_POST['school'];
        //     $address = $_POST['address'];
        //     $image = $_FILES['image'];
    
        //     $query = "UPDATE students SET firstname='$firstname', middlename='$middlename', lastname='$lastname', birthdate='$birthdate', sex='$sex', school='$school', address='$address', image='$image' WHERE id='$id'";
    
           
    
        //     if ($conn -> query($query) === TRUE ){
        //         echo "<script>window.alert('Student Record Successfully Updated!');</script>";
        //         echo "<script>window.location.assign('students2.php');</script>";
        //     }
        // }
    
        /* WORKING ENDS*/

?>