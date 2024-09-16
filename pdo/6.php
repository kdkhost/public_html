<?php
    //** Atualizando Dados no Banco usando PDO */

    $conn = new PDO(
        "mysql:dbname=php7transferenci_udemy; host=localhost",
        "php7transferenci_udemy",
        "udemy2019."
    );

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = ?");

    $id = 4;

    $stmt->execute(array($id));
    //$conn->rollBack(); // se der erro retornar
    $conn->commit(); // se der certo

    echo "Dados Deletados com Sucesso!";
?>