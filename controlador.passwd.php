<?php 

require_once 'conexion.php';

if (isset($_POST[''])){




}

$encrypted = encrypt('Plaintext string.', 'password'); // this yields a binary string
echo $encrypted."\n";


echo decrypt($encrypted, 'password');
// decrypt($encrypted, 'wrong password') === null

/*
*https://stackoverflow.com/questions/3422759/php-aes-encrypt-decrypt/30166085#30166085
Autor blade, oct 22, 2017.
*/


