<?php
// Encryption function
function encryptMessage($message, $key) {
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted_message = openssl_encrypt($message, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $encrypted_message);
}

// Decryption function
function decryptMessage($encrypted_message, $key) {
    $data = base64_decode($encrypted_message);
    $iv = substr($data, 0, 16);
    $encrypted_message = substr($data, 16);
    return openssl_decrypt($encrypted_message, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
}

// Define your new key
$newKey = "AnotherHardcodedKey456!";

// Encrypt a message
$messageToEncrypt = "h";
$encryptedMessage = encryptMessage($messageToEncrypt, $newKey);
echo "Encrypted Message: " . $encryptedMessage . "\n";

// Decrypt the encrypted message
$decryptedMessage = decryptMessage($encryptedMessage, $newKey);
echo "Decrypted Message: " . $decryptedMessage . "\n";
?>
