<?php 
session_start();
$email = "";
$errors = array();
require_once "../assets/config.php"; 
  
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM users WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $msg = "Your password reset code is";
                $msgend= "If this wasn't you ignore this message.";
                    require "../assets/mail.php";
                if($run_query){
                    $_SESSION['email'] = $email;
                    echo "success";
                }else{
                    echo "Failed while sending code!";
                }
            }else{
                echo  "Something went wrong!";
            }
        }else{
            echo  "This email address does not exist!";
        }
?>