<?php
//** conectando o mysqli */

$conn = new mysqli("localhost", "php7transferenci_udemy", "udemy2019.", "php7transferenci_udemy" );
if ($conn->connect_error){
    echo "Error: " .$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE(?, ?)");
$stmt->bind_param("ss", $deslogin, $dessenha);

$deslogin = "admin";
$dessenha = "12345";
$stmt->execute();

$deslogin = "root";
$dessenha = "67890";
$stmt->execute();

?>