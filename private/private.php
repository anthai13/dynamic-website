<?php
$ciphering = "AES-128-CTR"; 

$iv_length = openssl_cipher_iv_length($ciphering); 
$options = 0; 

$iv = '1234567891011121'; 
$key = "mailchimp";

function encryp($string,$ciphering,$key,$options,$iv){
	$encryption  = openssl_encrypt ($string,$ciphering,$key,$options,$iv);
	return $encryption;
}

function decryp($string,$ciphering, $key, $options, $iv){
	$decryption  = openssl_decrypt ($string,$ciphering,$key,$options,$iv);
	return $decryption; 
}
function hashing($string ){
	$hashing = password_hash($string, PASSWORD_DEFAULT);
	return $hashing;
}


// credit to:GeeksforGeeks https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/

?>
