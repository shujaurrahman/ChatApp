<?php require_once "../assets/config.php"; 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
session_start();
$email = $_SESSION['email'];
if($email == false){
  header('Location: ../index.html');
}
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    if($password !== $cpassword){
        echo "Confirm password not matched!";
    }else{
        $code = 0;
        $status = "Active now";
        $email = $_SESSION['email']; 
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE users SET code = $code, password = '$encpass', status = '$status' WHERE email = '$email'";
        $run_query = mysqli_query($conn, $update_pass);
        if($run_query){
        $fetch = "SELECT * FROM `users` WHERE email = '$email'";
        $fetch_query = mysqli_query($conn, $fetch);
        if(mysqli_num_rows($fetch_query)>0){
            $fetch_data = mysqli_fetch_assoc($fetch_query);
            $unique_id=$fetch_data['unique_id'];
            $_SESSION['unique_id']=$unique_id;
            $msg="Your Password was changed";
            $_SESSION['msg']=$msg;
            $_SESSION['msg_display_time'] = time() + 5;
            echo "success";
        }else{
            echo "Failed to change your password!";
        }
    }
    }

?>