<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if(isset($_SESSION['unique_id'])){
    include_once "../../assets/config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $image = $_FILES["media"]["name"];
    $tmpName = $_FILES["media"]["tmp_name"];
    $path = '../../assets/media/';
    $imageName = $image;

    if (!empty($message)) {
        // Use the hardcoded key for encryption
        $encryptionKey = $outgoing_id;

        // Encrypt the message using AES encryption
        $encrypted_message = encryptMessage($message, $encryptionKey);
        
        // Insert the encrypted message into the database
        $sql = "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg, media)
                VALUES ({$incoming_id}, {$outgoing_id}, '{$encrypted_message}', '{$imageName}')";
        if (mysqli_query($conn, $sql)) {
            move_uploaded_file($tmpName, $path . $imageName);
            echo "Message inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Message is empty.";
    }
} else {
    header("location: ../login/");
}

// AES encryption function
function encryptMessage($message, $key) {
    // Generate a random IV (Initialization Vector)
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

    // Encrypt the message using AES-256-CBC cipher
    $encrypted_message = openssl_encrypt($message, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
    
    // Combine IV and ciphertext and then base64 encode the result
    $encrypted_data = base64_encode($iv . $encrypted_message);

    return $encrypted_data;
}
?>
