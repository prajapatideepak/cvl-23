<?php 
    require_once('connection.php');
    $db = new DB();
//----------------------------------------------------------------------------
// --------------------------- Registration ----------------------------------
//----------------------------------------------------------------------------

    // check email if already exist or not
    if(isset($_POST['check_email_exists']) && $_POST['check_email_exists'] == 1){
        $email = $_POST['email'];
        
        $query = $db->con->prepare("select * from user where email = ? ");
        $query->execute([$email]);
        
        if($query->rowCount()){
            echo json_encode(['status' => 'error', 'msg' => 'Email already exists']);
            exit;
        }
        else{
            echo json_encode(['status' => 'success', 'msg' => '']);
            exit;
        }
    }

    if(isset($_POST['userType']) && $_POST['userType'] != ""){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if(empty($name) || empty($email) || empty($mobile) || empty($password) || empty($confirmPassword)){
             echo json_encode(['status' => 'error', 'msg' => 'all fields are required.']);
             exit;
        }
        elseif(!(preg_match(" /^[a-zA-Z ]+$/" , $name))){
            echo json_encode(['status' => 'error', 'msg' => 'Name contains only letters']);
             exit;
        }
        elseif (!filter_var($email , FILTER_VALIDATE_EMAIL)){
            echo json_encode(['status' => 'error', 'msg' => 'Enter valid email']);
             exit;
        }
        elseif ($password !== $confirmPassword ){
            echo json_encode(['status' => 'error', 'msg' => 'password not matched']);
             exit;
        }
        elseif(!(preg_match(" /^(\+\d{1,3}[- ]?)?\d{10}$/" , $mobile))){
            echo json_encode(['status' => 'error', 'msg' => 'Enter valid mobile number']);
             exit;
        }else{

            $email = $_POST['email'];

             $query = $db->con->prepare("select * from user where email = ? ");
            $query->execute([$email]);
            
            if($query->rowCount()){
                echo json_encode(['status' => 'error', 'msg' => 'Email already exists']);
                exit;
            }

            if($_POST['userType'] == 'visitor'){
                // function declared in helper.php
                userRegister($name, $email, $password, $mobile);
            }
            else{
                

                $_SESSION['name'] = $name;
                $_SESSION['mobile'] = $mobile;
                $_SESSION['email'] = $email;                
                $_SESSION['password'] = $password;

                if($_POST['userType'] == 'player'){
                    echo json_encode(['status' => 'success', 'msg' => 'player']);
                    exit;
                }
                else if($_POST['userType'] == 'team'){
                    echo json_encode(['status' => 'success', 'msg' => 'team']);
                    exit;
                }
                else if($_POST['userType'] == 'tournament'){
                    echo json_encode(['status' => 'success', 'msg' => 'tournament']);
                    exit;
                }
            }
            
            
        }
             
    }

//----------------------------------------------------------------------------
// --------------------------- Login -----------------------------------------
//----------------------------------------------------------------------------

    if(isset($_POST['login_btn'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashedPassword = md5($password);
        $query = $db->con->prepare("select * from user where email = ? and password = ?");
        $query->execute([$email, $hashedPassword]);
            
            if($query->rowCount()){
                $data = $query->fetch(PDO::FETCH_ASSOC);
                if($data['verified'] == 0){
                    setFlastData('error', 'Please verify your email sent to you');
                    header("location: ".$_SERVER['HTTP_REFERER']);
                    exit; 
                }
                $SESSION['userId'] = $data['userId'];
                $SESSION['name'] = $data['name'];
                $SESSION['mobile'] = $data['mobileNo'];
                $SESSION['email'] = $data['email']; 

                setcookie('userId', $data['userId'], time() + 86400, "/");
                setcookie('userName', $data['name'], time() + 86400, "/");
                setcookie('userEmail', $data['email'], time() + 86400, "/");

                setFlastData('success', 'Login successful');
                header("location: ./playerReg.php");
                exit;
                
            }
            else{
                setFlastData('error', 'Invalid email or password');
                header("location: ".$_SERVER['HTTP_REFERER']);

                exit;
            }
    }

    //----------------------------------------------------------------------------
    // --------------------------- Player Registration 1 -------------------------
    //----------------------------------------------------------------------------

    // if(isset($_POST['check_file_valid'])){
    
    //     //--------------------checking file------------------
    //     //---------------------------------------------------
    //     $target_dir = "./public/images/profile_pics/";
    //     $target_file = $target_dir . basename($_POST["profile_pic"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //     // Check if image file is a actual image or fake image

    //     // $check = getimagesize($_POST["profile_pic"]["tmp_name"]);
    //     // if($check !== false) {
    //     //     // echo "File is an image - " . $check["mime"] . ".";
    //     //     $uploadOk = 1;
    //     // } else {
    //     //     // echo "File is not an image.";
    //     //     $uploadOk = 0;
    //     // }
        

    //     // Check if file already exists
    //     // if (file_exists($target_file)) {
    //     //     setFlastData('error', 'Sorry, file already exists');
    //     //     exit;
    //     // }

    //     // Check file size
    //     if ($_POST["profile_pic"]["size"] > 2097152) {
    //         echo json_encode(['status' => 'error', 'msg' => 'Please upload file less than 2 MB']);
    //         exit;
    //     }

    //     // Allow certain file formats
    //     if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    //         echo json_encode(['status' => 'error', 'msg' => 'Sorry, only JPG, JPEG & PNG files are allowed']);
    //         exit;
    //     }

    //     // Check if $uploadOk is set to 0 by an error
    //     if ($uploadOk == 0) {
    //         echo json_encode(['status' => 'error', 'msg' => 'Sorry, your photo was not uploaded']);
    //         exit;
    //     } // if everything is ok, try to upload file
      
    // }  
    //  //--------------------END------------------

    if(isset($_POST['playerReg_next_btn']))
    {
        if($_POST['alter_nativ'] != ''){
            $_SESSION['alter_nativ'] = $_POST['alter_nativ'];
        }
        else{
            $_SESSION['alter_nativ'] = NULL;
        }

        $_SESSION['profile_pic'] = $_FILES['profile_pic'];
        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['mname'] = $_POST['mname'];
        $_SESSION['lname'] = $_POST['lname'];
        $_SESSION['mobile'] = $_POST['mobile'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['dob'] = $_POST['dob'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['pincode'] = $_POST['pincode'];

        header('Location: playerRegNext_final.php');
        
    }


    //----------------------------------------------------------------------------
    // --------------------------- Player Registration Next ----------------------
    //----------------------------------------------------------------------------

    if(isset($_POST['playerRegNext_submit_btn']))
    {
        //---------- checking cookie -------------
        if(!isset($_COOKIE['userId'])){ // if cookie not set, then it means user registered from register page
            userRegister($_SESSION['name'], $_SESSION['email'], $_SESSION['password'], $_SESSION['mobile']);
            $query_getUserDetails = $db->con->prepare("select * from user where email = ? and mobileNo = ?");
            
            $query_getUserDetails->execute([$_SESSION['email'], $_SESSION['mobile']]);

            $data = $query_getUserDetails->fetch(PDO::FETCH_ASSOC);

            $userId = $data['userId'];

        }
        else{ // if cookie set, then it means user registered from 'Register as' menu of navbar
            $userId = $_COOKIE['userId'];
        }
        //-----------------------------------------------

        //00000000000000000000000000000000000000000000000000000000000000000
        $target_dir = "./public/images/profile_pics/";
        $target_file = $target_dir . basename($_SESSION["profile_pic"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check file size
        if ($_SESSION["profile_pic"]["size"] > 2097152) {
            setFlastData('error', 'Something went wrong. Please try again');
            exit;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            setFlastData('error', 'Something went wrong. Please try again');
            exit;
        }

        // Check if $uploadOk is set to 0 by an error
    
        if (!move_uploaded_file($_SESSION["profile_pic"]["tmp_name"], $target_file)) {
            setFlastData('error', 'Something went wrong. Please try again');
            exit;
        }
        pr($_SESSION['profile_pic']);
        
        //00000000000000000000000000000000000000000000000000000000000000000

        //--------------------checking file------------------
        // $target_dir = "./public/images/profile_pics/";
        // $target_file = $target_dir . basename($_SESSION["profile_pic"]["name"]);

        // //-----------------Uploading File-------------------
        // move_uploaded_file($_SESSION["profile_pic"]["tmp_name"], $target_file);
        // $file_tmp = $_SESSION["profile_pic"]["tmp_name"];
        // $file_name = $_SESSION["profile_pic"]["name"];

        // if () {
            // Setting uploaded file path
            // move_uploaded_file($file_tmp,"./public/images/profile_pics/".$file_name);
            $profile_path = "./public/images/profile_pics/".$_SESSION["profile_pic"]["name"];
        // }
        // else{
        //     setFlastData('error', 'Sorry, there was an error uploading your file');
        //     $profile_path=NULL;
        // }

        //------fetching terms and condition id
        $query_termId = $db->con->prepare("select termId from terms_and_condition where userRole = ? ");
        $query_termId->execute(["visitor"]);
        if($query_termId->rowCount()){
            $data = $query_termId->fetch(PDO::FETCH_ASSOC);
            $termsAndConditionId = $data['termId'];
        }
        else{
            setFlastData('error', 'Something went wrong. Please try again');
            exit;
        }
        
        if($_SESSION['alter_nativ'] == ""){
            $_SESSION['alter_nativ'] = NULL;
        }
        
        //-----------insert in player table----------
        $query_insert_player = $db->con->prepare("insert into player(fName, mName, lName,  photo, altMobileNo, dob, gender, city, state, country, pincode, height, weight, playingPosition, playingLevel, jerseyNo, experience, playerUserId, termId) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $result = $query_insert_player->execute([ $_SESSION['fname'],$_SESSION['mname'],$_SESSION['lname'], $profile_path, $_SESSION['alter_nativ'], $_SESSION['dob'], $_SESSION['gender'], $_SESSION['city'], $_SESSION['state'], $_SESSION['country'], $_SESSION['pincode'], $_POST['height'], $_POST['weight'], $_POST['playingPosition'], $_POST['playingLevel'], $_POST['jerseyNo'], $_POST['experience'], $userId, $termsAndConditionId]);
        
        if($result){
            setFlastData('success', 'Player registration successful');
            // Redirect to player dashboard

            $query_getUserDetails = $db->con->prepare("update user set isPlayer=? where userId = ?");
            $query_getUserDetails->execute([1, $userId]);
            
            if(isset($_COOKIE['userId'])){
                header("location: ./playerDashboard.php");
                exit;
            }
            else{
                header("location: ./login.php");
                exit;
            }
        }
        
    }

    //-----------------------Forgot Password------------------------
    //--------------------------------------------------------------
    if(isset($_POST['forgotPass_send_btn'])){
        $email = $_POST['forgot_email'];

        $query = $db->con->prepare("select * from user where email = ?");
        $query->execute([$email]);
        
        if($query->rowCount()){
            $data = $query->fetch(PDO::FETCH_ASSOC);

            if($data['verified'] == 1){
                $token = randomString(32);
                $query = $db->con->prepare("update user set token = ? where email = ?");
                $result = $query->execute([$token, $email]);
                
                if($result){
                    $url = "http://localhost/LiveProject/cvl/resetPassword.php?email=$email&token=$token";
                    $to = $email;
                    
                    $subject = "Reset Password";
                    $body = 
                        "<html>
                        <body>
                            <div>
                                <div>
                                    <p>
                                        Please click below link to reset your password.
                                    </p>
                                </div>
                                <div>
                                    <a href=$url>Reset Password</a>
                                </div>
                                <div>
                                    <h5>The CVL Team.</h5>
                                </div>
                            </div>
                        </body>
                        </html>";
                    
                    include("./php-mailer/index.php");
                    if($status){
                        setSweetAlert("success", "Check your email to reset your password");
                        header("Location: ./login.php");
                        exit;
                    }
                    else{
                        setFlastData('error', 'Failed to send email. Please try again.');
                    }
                    exit;
                }
                else{
                    setFlastData('error', 'Something went wrong. Please try again.');
                    exit;
                }
            }
            else{
                setFlastData('error', 'Please verify your email first to reset your password');
                header('Location: ./forgotPassword.php');
            }
        }
        else{
            setFlastData('error', 'Your email is not registered');
            header('Location: ./forgotPassword.php');
            exit;
        }

    }

    //-----------------------Reset Password------------------------
    //--------------------------------------------------------------
    if(isset($_POST['resetPassword_btn'])){
        $email = $_GET['email'];
        $token = $_GET['token'];
        $newPassword = $_POST['newPassword'];

        $hashedNewPassword = md5($newPassword);

        $query_verify = $db->con->prepare("select email,token from user where email = ? and token = ?");
        $query_verify->execute([$email, $token]);

        if($query_verify->rowCount()){
            $query = $db->con->prepare("update user set password = ?, token = ? where email = ? and token = ?");
            $result = $query->execute([$hashedNewPassword, NULL, $email, $token]);
                
            if($result){    
                setSweetAlert("success", "Your password has been updated successfully");
                header("Location: ./login.php");
                exit;
            }
            else{
                setFlastData('error', 'Something went wrong. Please try again.');
                header("Location: ./login.php");
                exit;
            }   
        }
        else{
            setSweetAlert("error", "Your link is expired", "login.php");
            exit;
        }

    }

?>



