<?php 
    include('./connection.php');

    $email = $_GET['email'];
    $token = $_GET['token'];

    $query_verify = $db->con->prepare("select email,token from user where email = ? and token = ?");
    $query_verify->execute([$email, $token]);
            
    if($query_verify->rowCount()){
        $query = $db->con->prepare("update user set verified=?, isVisitor=?, token= ? where email = ? ");
        $query_verify->execute([1, 1, NULL, $email]);

        mysqli_query($conn, $query);
        setFlastData('success', 'Registration successful');
        header("location: ./home.php");
    }
    else{
        echo "
            <html>
                <body>
                    <div style='display: flex; justify-content: center; align-items:center; height: 100%; width: 100%;'>
                        <h2>Sorry! Your Link is expired.</h2>
                    </div>
                </body>
            </html>";
    }
?>