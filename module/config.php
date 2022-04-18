<?php 
    include('./constant.php');
    include('./helper.php');
    $conn = mysqli_connect(LOCALHOST, ROOT, PASSWORD, DATABASE);

    if(!$conn){
        echo "Error connecting to database";
        exit;
    }
?>