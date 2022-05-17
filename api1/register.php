<?php
    include("connect.php");
    
    $name = $_POST['fname'];
    $pancard = $_POST['pancard'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $mob = $_POST['mob'];
    $add = $_POST['add'];
    $dob = $_POST['bday'];
    $role = $_POST['role'];
    $status = "0";
    $votes = "0";

    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($cpass!=$pass){
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image uploadedddddddddddddddddddddddddddddddd - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
        $insert = mysqli_query($connect, "insert into user (`name`, `pan no`, `password`, `phone  no`, `address`, `dob`, `photo`, `role`, `status`, `votes`)
         values('$name','$pancard','$pass','$mob','$add','$dob','$target_dir','$role','$status','$votes') ");
         if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "";
                </script>';
        }
    }
       

?>