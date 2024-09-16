<?php

    //** conecxoes PDO com MySql Server */
    //* lembrando que nao temos instalado em nosso servidor o SqlServer *//

    $conn = new PDO(
        "sqlsrv:Database= php7transferenci_udemy;
        server= localhost\SQLEXPRESS;connectionPooling=0",
        "php7transferenci_udemy",
        "udemy2019."
    );

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row){
        foreach ($row as $key => $value){
            echo "<strong>".$key.":</strog>".$value."<br/>";
        }

        echo "=========================<br/>";
    }

    //var_dump($results);

?>