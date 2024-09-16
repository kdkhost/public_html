<?php

    //** conecxoes PDO com MySql */

    $conn = new PDO(
        "mysql:dbname=php7transferenci_udemy; host=localhost",
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