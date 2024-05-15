<?php 
session_start();
require "../../assets/config.php";

$boolLoggedIn = false;
if (isset($_SESSION) and isset($_SESSION['unique_id'])) {
    $Userid = $_SESSION['unique_id'];
} else {
    header("Location: ../../index.php");
}

// Hardcoded encryption key
$encryptionKey = "ThisIsAHardcodedKey123!";

if (isset($_SESSION['unique_id'])) {
    $sql = "SELECT * FROM `users` WHERE unique_id ='$Userid'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_object($result);
    $Dp = $data->{"img"};
}

$profilepic = "<img src='../assets/images/$Dp' alt='No image'>";

if(isset($_SESSION['unique_id'])){
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    echo "rec id: ".$incoming_id."\n";
    echo "session id: ".$outgoing_id;
    $output = "";
    $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
            WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
            OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            if($row['outgoing_msg_id'] === $outgoing_id){
                $decrypted_message = decryptMessage($row['msg'], $outgoing_id);
                // No need to decrypt outgoing messages, as they are already decrypted
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                <p>'. $decrypted_message .'</p>
                                </div>
                                '. $profilepic .' 
                            </div>
                            <img class="media-out" src="../assets/media/'.$row['media'].'" alt="">
                            ';
            }else{
                // Decrypt incoming messages using the hardcoded key
                $decrypted_message = decryptMessage($row['msg'], $incoming_id);
                $output .= '<div class="chat incoming">
                                <img src="../assets/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $decrypted_message .'</p>
                                </div>
                            </div>
                            <img class="media-in" src="../assets/media/'.$row['media'].'" alt="">
                            ';
            }
        }
    }else{
        $output .= '<div class="text">No messages are available. Once you send a message, they will appear here.</div>';
    }
    echo $output;
}else{
    header("location: ../../index.php");
}

// AES decryption function
function decryptMessage($encrypted_message, $key) {
    try {
        // Decode the base64 encoded message
        $data = base64_decode($encrypted_message);
        
        // Determine the IV length based on the encryption algorithm
        $iv_length = openssl_cipher_iv_length('aes-256-cbc');
        
        // Extract the IV and the encrypted message
        $iv = substr($data, 0, $iv_length);
        $encrypted_message = substr($data, $iv_length);
        
        // Decrypt the message using AES-256-CBC cipher
        $decrypted_message = openssl_decrypt($encrypted_message, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
        
        // Return the decrypted message
        return $decrypted_message;
    } catch (Exception $e) {
        echo 'Decryption failed: ' . $e->getMessage();
        return null;
    }
}
?>
