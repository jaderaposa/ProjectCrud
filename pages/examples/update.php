<!--
$fname = $_GET['fname'];



     // $database = mysqli_connect('localhost', 'root', '', 'projectcrud');

        // $query = "UPDATE students SET  WHERE id = ?";
        // $stmt = mysqli_prepare($database, $query);
        // mysqli_stmt_bind_param($stmt, "i", $id);
        // mysqli_stmt_execute($stmt);
        // mysqli_stmt_bind_result($stmt, $images);
        // mysqli_stmt_fetch($stmt);


    // $target_dir="../../images/";
    // $target_file = $target_dir . basename($_FILES["image"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // // Check if image file is an actual image or a fake image
    // if (isset($_POST["submit_form_get"])) {
    //     $check = getimagesize($_FILES["image"]["tmp_name"]);
    //     if($check !== false) {
    //         echo "File is an image - " . $check["mime"] . ".";
    //         $uploadOk = 1;
    //     } else {
    //         echo "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }

    // // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    // // Check file size
    // if ($_FILES["image"]["size"] > 9999999999999999) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    // // Allow certain file formats
    // if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    //     echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
    //     $uploadOk = 0;
    // }

    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //     echo "Sorry, your file was not uploaded.";
    // // if everything is ok, try to upload file
    // } else {
    //     if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
           
    //         $filename = htmlspecialchars (basename($_FILES["image"]["name"]));

    //         $id = $_POST['id'];
    //         $firstname = $_POST['firstname'];
    //         $middlename = $_POST['middlename'];
    //         $lastname = $_POST['lastname'];
    //         $birthdate = $_POST['birthdate'];
    //         $sex = $_POST['sex'];
    //         $school = $_POST['school'];
    //         $address = $_POST['address'];

    //         $query = "UPDATE 'students' SET firstname='$firstname', middlename='$middlename', lastname='$lastname', birthdate='$birthdate', sex='$sex', school='$school', address='$address', image='$filename' WHERE id='$id'";


    //             if($conn->query($query) === TRUE) {
    //                 header('Location: students2.php?msg=Successfully Uploaded!');
    //             } else {
    //                 echo '<script>window.alert("ERROR!")</script>';
    //             }

    //         } else {
    //             echo "Sorry, there was an error uploading your file.";
    //         }
    //     } -->


    <!-- // // // Connect to the database
    // // $db = new mysqli("hostname", "username", "password", "database_name");
    
    // // Get the file data
    // $data = file_get_contents($_FILES['image']['tmp_name']);
    
    // // Prepare the query
    // $stmt = $db->prepare("INSERT INTO images (image) VALUES (?)");
    
    // // Bind the data
    // $stmt->bind_param('s', $data);
    
    // // Execute the query
    // $stmt->execute();
    
    // // Close the connection
    // $stmt->close();
    // $db->close(); -->


    <?php
    include "connect2.php";

            $id =$_POST['id'];
            if (isset($_POST['submit_form_get'])) {
                                 
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $birthdate = $_POST['birthdate'];
                $sex = $_POST['sex'];
                $school = $_POST['school'];
                $address = $_POST['address'];

                $filename = htmlspecialchars (basename($_FILES["image"]["name"]));

                $student_query = "SELECT * FROM students WHERE id='$id'";
                $student_query_run = mysqli_query($conn, $student_query);
                foreach($student_query_run as $stud_row)
                {
                    // echo $stud_row['image'];
                    if($filename == NULL)
                    {
                        // UPDATE WITH EXISTING IMAGE
                        $image_data = $stud_row['image'];
                    }
                    else 
                    {
                        // UPDATE WITH NEW IMAGE AND DELETE WITH OLD IMAGE
                        if($img_path = "../../images/".$stud_row['image'])
                        {
                            unlink($img_path);
                            $image_data = $filename;
                        }
                        
                    }
                }
                

            mysqli_query($conn," UPDATE students SET firstname='$firstname', middlename='$middlename', lastname='$lastname', birthdate='$birthdate', sex='$sex', school='$school', address='$address', image='$image_data' WHERE id = '$id' ");
            
            $result=mysqli_query($conn,"SELECT * FROM students");
            $row=mysqli_num_rows($result);

            if($result)
            {
                if($filename == NULL)
                {
                    // UPDATE WITH EXISTING IMAGE
                    echo "<script>window.alert('Student Record Successfully Added!'); </script>";
                    echo "<script>window.location.assign('students2.php');</script>";
                }
                else 
                {
                    // UPDATE WITH NEW IMAGE AND DELETE WITH OLD IMAGE
                    move_uploaded_file($_FILES["image"]["tmp_name"],"../../images/" . $_FILES["image"]["name"]);
                    echo "<script>window.alert('Student Record Successfully Added!'); </script>";
                    echo "<script>window.location.assign('students2.php');</script>";
                } 
                // echo "<script>alert('Student Record Successfully Updated!'); window.location.assign('students2.php'); </script>";
            }
            else 
            {
            $_SESSION['status'] = "Student Record Failed to Update";
            header('Location: students.php');
            }





            // echo '<div id="dialogBox"> 
            // <p>Successfully Updated Student Info!</p>
            // </div> 
            
            // <script>
            // setTimeout(function() {
            //     document.getElementById("dialogBox").remove();
            //   }, 3500);
              
            //   </script>
            // ';

            
            
              

            
                            
										

            // move_uploaded_file($_FILES["image"]["tmp_name"],"../../images/" . $_FILES["image"]["name"]);			
            // $profile=$_FILES["image"]["name"];
                                    
                                }
?>

<style>

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

</style>