<?php

$data = 'Sensitive information';
$key = '123'; // Note: The key should be a string for encryption
$method = 'aes-256-cbc'; // Encryption method

// Generate an initialization vector (IV)
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

// Encrypt the data
$encryptedData = openssl_encrypt($data, $method, $key, 0, $iv);

// To decrypt, you would need the same $key and $iv
$decryptedData = openssl_decrypt($encryptedData, $method, $key, 0, $iv);

echo "Original Data: $data\n";
echo "Encrypted Data: $encryptedData\n";
echo "Decrypted Data: $decryptedData\n";

?>
