<?php 
    include('./config.php');

    $email = $_GET['email'];
    $token = $_GET['token'];

    $query = "select email,token from user where email = '$email' and token = '$token'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)){
        $query = "update user set verified='1', token=NULL where email = '$email'";
        mysqli_query($conn, $query);

        // header("location: ./login.php");
        ?>
            <html>
                <body>
                    <div style="display: flex; justify-content: center; align-items:center; height: 100%; width: 100%;">
                        <h1>Thankyou! Your Email is verified. Click<a href="./login.php"> here</a> to login.</h1>
                    </div>
                </body>
            </html>
        <?php
    }
    else{
        echo "
            <html>
                <body>
                    <h3>Sorry! Your Link is expired.</h3>
                </body>
            </html>";
    }
?>