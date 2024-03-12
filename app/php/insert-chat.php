<?php 
//     error_reporting(E_ALL);
// ini_set('display_errors', 1);
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "../../assets/config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $image = $_FILES["media"]["name"];
        $tmpName = $_FILES["media"]["tmp_name"];
        $path='../../assets/media/';
        $imageName=$image;
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg ,media)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}','{$imageName}')") or die();
            		move_uploaded_file($tmpName,$path.$imageName);
        }
    }else{
        header("location: ../login/");
    }  
?>