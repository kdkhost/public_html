<?php
    //** Atualizando Dados no Banco usando PDO */

    $conn = new PDO(
        "mysql:dbname=php7transferenci_udemy; host=localhost",
        "php7transferenci_udemy",
        "udemy2019."
    );

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :ID");

    $id = 3;

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Deletados com Sucesso!";
?>