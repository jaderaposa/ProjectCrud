<?php 
    include "connect2.php";

    $target_dir="../../images";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //Check if image file is an actual image or a fake image
    if (isset($_POST["submit_form_get"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        }
    }

?>