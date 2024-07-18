<?php

$encryption='hwB1K5NkfcIzkLTWQeQfHLNg5FlyX3PNUA==';

// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;



echo "<br><br>";
// Display the encrypted string
echo "Encrypted String: " . $encryption . "\n";

// Non-NULL Initialization Vector for decryption
$decryption_iv = '1234567891011121';

// Store the decryption key
$decryption_key = "GeeksforGeeks";

// Use openssl_decrypt() function to decrypt the data
$decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);


echo "<br><br>";
// Display the decrypted string
echo "Decrypted String: " . $decryption;

?>
