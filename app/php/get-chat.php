<?php 
    session_start();
    require "../../assets/config.php";
$boolLoggedIn = false;
if (isset($_SESSION) and isset($_SESSION['unique_id'])) {
	$Userid = $_SESSION['unique_id'];
} else {
	  header("Location: ../../index.html");
}
if (isset($_SESSION['unique_id'])) {
	$sql = "SELECT * FROM `users` Where unique_id ='$Userid'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_object($result);
	$Dp = $data->{"img"};
}

	$profilepic = "<img src='../assets/images/$Dp' alt='No image'>";

    if(isset($_SESSION['unique_id'])){
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                    
                    <div class="details">
                    
                    <p>'. $row['msg'] .'</p>
                    </div>
                    ' .$profilepic.' 
                    </div>
                    <img class="media-out" src="../assets/media/'.$row['media'].'" alt="">
                    ';
                }else{
                    $output .= '<div class="chat incoming">
                    <img src="../assets/images/'.$row['img'].'" alt="">
                    <div class="details">
                    <p>'. $row['msg'] .'</p>
                    </div>
                    </div>
                    <img class="media-in" src="../assets/media/'.$row['media'].'" alt="">
                    ';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../../index.html");
    }
    

?>
