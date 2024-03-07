<?php 
require_once "../assets/config.php"; 
session_start();
$email = $_SESSION['email'];
if($email == false){
  header('Location: ../index.html');
}
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM `users` WHERE `code` = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res)>0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $unique_id=$fetch_data['unique_id'];
            $code = 0;
            $status = "Active now";
            $update_otp = "UPDATE `users` SET `code` = '$code',`status` = '$status' WHERE `code` = '$fetch_code'";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                $_SESSION['unique_id']=$unique_id;
                echo "success";
            }
            else{
                echo "Failed while updating code!";
            }
        }else{
            echo "You've entered incorrect code!";
        }
?>