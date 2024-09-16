<?php
    //** Inserindo Dados no Banco usando PDO */

    $conn = new PDO(
        "mysql:dbname=php7transferenci_udemy; host=localhost",
        "php7transferenci_udemy",
        "udemy2019."
    );

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD) ");
    $login = "kdkhost";
    $password ="1234";

    $stmt->bindParam(":LOGIN", $login);$stmt->bindParam(":PASSWORD", $password);

    $stmt->execute();

    echo "Inserido com Sucesso!";
?>