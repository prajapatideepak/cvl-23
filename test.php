<?php
   if(isset($_FILES['profile_pic'])){
    //   $errors= array();
    //   $file_name = $_FILES['image']['name'];
    //   $file_size = $_FILES['image']['size'];
    //   $file_tmp = $_FILES['image']['tmp_name'];
    //   $file_type = $_FILES['image']['type'];
    //   $file_ext= strtolower(end(explode('.',$_FILES['image']['name'])));
      
    //   $extensions= array("jpeg","jpg","png");
      
    //   if(in_array($file_ext,$extensions)=== false){
    //      $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    //   }
      
    //   if($file_size > 2097152) {
    //      $errors[]='File size must be excately 2 MB';
    //   }
      
    //   if(empty($errors)==true) {
    //      move_uploaded_file($file_tmp,"public/images/profile_pics/".$file_name);
    //      echo "Success";
    //   }else{
    //      print_r($errors);
    //   }
        $target_dir = "./public/images/profile_pics/";
        $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image

        // $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
        // if($check !== false) {
        //     // echo "File is an image - " . $check["mime"] . ".";
        //     $uploadOk = 1;
        // } else {
        //     // echo "File is not an image.";
        //     $uploadOk = 0;
        // }
        

        // Check if file already exists
        // if (file_exists($target_file)) {
        //     setFlastData('error', 'Sorry, file already exists');
        //     exit;
        // }

        // Check file size
        if ($_FILES["profile_pic"]["size"] > 2097152) {
            echo "Please upload file less than 2 MB";
            exit;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG & PNG files are allowed";
            exit;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "error";
        } 
        if (!move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
            echo "Sorry, there was an error uploading your file";
            exit;
        }
        else{
            echo "Success";
        }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "profile_pic" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['profile_pic']['name'];  ?>
            <li>File size: <?php echo $_FILES['profile_pic']['size'];  ?>
            <li>File type: <?php echo $_FILES['profile_pic']['type'] ?>
            <li>File path: <?php echo $_FILES['profile_pic']['tmp_name'] ?>
         </ul>
			
      </form>
      
   </body>
</html>