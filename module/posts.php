<?php 
    include("./config.php");

    session_start();

//----------------------------------------------------------------------------
// --------------------------- Registration ----------------------------------
//----------------------------------------------------------------------------

    // check email if already exist or not
    if(isset($_POST['check_email_exists']) && $_POST['check_email_exists'] == 1){
        $email = $_POST['email'];
        
        $query = "select * from user where email = '$email'";

        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result)){
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

            $query = "select * from user where email = '$email'";

            $result = mysqli_query($conn, $query);
            
            if(mysqli_num_rows($result)){
                echo json_encode(['status' => 'error', 'msg' => 'Email already exists']);
                exit;
            }

            if($_POST['userType'] == 'visitor'){
                //pasword hashing
                $hashed_password = md5($password);

                //generating random string
                $token = randomString(32);

                $query_insert_user="insert into user(name, email, password, mobileNo, isVisitor, isPlayer, isHost, isTeamOwner, token) values('$name', '$email', '$hashed_password', '$mobile', 1, 0, 0, 0, '$token')";

                $result = mysqli_query($conn,$query_insert_user);

                if($result){

                    $url = "http://localhost/LiveProject/sport/sport/module/verification.php?email=$email&token=$token";
                    $to = $email;
                    
                    $subject = "Verification";
                    $body = "
                        <html>
                            <body>
                                <h3>You recently registered a new email.<br/> 
                                    Please click <a href=$url>here</a> to verify your email.
                                </h3>
                            </body>
                        </html>";
                    
                    include("../php-mailer/index.php");
                    if($status){
                        echo json_encode(['status' => 'success', 'msg' => 'Registration successful, please check email to verify']);
                    }else{
                        echo json_encode(['status' => 'error', 'msg' => 'Registration successful, Error while sending mail.']);
                    }
                    exit;
                }
                else{
                    echo json_encode(['status' => 'error', 'msg' => 'Something went wrong. Please try again']);
                }
                exit;
            }
            else{
                

                $SESSION['name'] = $name;
                $SESSION['mobile'] = $mobile;
                $SESSION['email'] = $email;                
                $SESSION['password'] = $password;

                if($_POST['userType'] == 'team'){
                    header('Location: ./teamReg.php');
                }
                else if($_POST['userType'] == 'player'){
                    header('Location: ./playerReg.php');
                }
                else if($_POST['userType'] == 'tournament'){
                    header('Location: ./tournamentReg.php');
                }
            }
            
            
        }
             
    }
?>