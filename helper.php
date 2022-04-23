<?php
    require_once('connection.php');

    //Random string generator
    function randomString($length){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
        }
        return $token;
    }

    function crypto_rand_secure($min, $max){
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd > $range);
        return $min + $rnd;
    }

    function setFlastData($status, $msg){
        $_SESSION['flash']['status']= $status;
        $_SESSION['flash']['msg']= $msg;
    }

    function setSweetAlert($status, $title, $redirect=NULL){
        $_SESSION['sweetAlert']['status']= $status;
        $_SESSION['sweetAlert']['title']= $title;
        $_SESSION['sweetAlert']['redirect']= $redirect;
    }

    function pre($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;
    }

    function pr($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    //-------------------user registration------------------------
    function userRegister($name, $email, $password, $mobile){
        $db = new DB(); 
        //pasword hashing
                $hashed_password = md5($password);

                //generating random string
                $token = randomString(32);

                $query_insert_user = $db->con->prepare("insert into user(name, email, password, mobileNo, isVisitor, isPlayer, isHost, isTeamOwner, token) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $result = $query_insert_user->execute([$name, $email, $hashed_password, $mobile, 1, 0, 0, 0, $token]);

                if($result){

                    $url = "http://localhost/LiveProject/cvl/emailVerification.php?email=$email&token=$token";
                    $to = $email;
                    
                    $subject = "Verification";
                    $body = 
                        "<html>
                        <body>
                            <div>
                                <div>
                                    <h4>Hello $name,</h4>
                                </div>
                                <div>
                                    <p>
                                        We are happy that you signed up for the Corporte Volleyball League. To start exploring the Volleyball tournament, please verify your email by clicking Verify Email button below.
                                    </p>
                                </div>
                                <div>
                                    <a href=$url>Verify Email</a>
                                </div>  
                                 <div>
                                    <h5>Welcome to The CVL</h5>
                                    <h5>The CVL Team.</h5>
                                </div>
                            </div>
                        </body>
                        </html>";
                    
                    include("./php-mailer/index.php");
                    if($status){
                        echo json_encode(['status' => 'success', 'msg' => 'visitor']);
                    }else{
                        echo json_encode(['status' => 'error', 'msg' => 'Failed to send email. Please mail your email and phone number to verify@thecvl.in']);
                    }
                }
                 else{
                    echo json_encode(['status' => 'error', 'msg' => 'Something went wrong. Please try again']);
                }
    }

    function issetCookie(){
        if($_COOKIE['userId'] || $_COOKIE['email']){
            return true;
        }
        return false;
    }
?>