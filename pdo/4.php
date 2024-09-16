<?php
    //** Atualizando Dados no Banco usando PDO */

    $conn = new PDO(
        "mysql:dbname=php7transferenci_udemy; host=localhost",
        "php7transferenci_udemy",
        "udemy2019."
    );

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE id = :ID");

    $login = "kdkhost";
    $password ="2019@1233";
    $id = 3;

    $stmt->bindParam(":LOGIN", $login);$stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Dados Alterados com Sucesso!";
?>