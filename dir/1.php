<?php 
    $name = "images";
    if (!is_dir($name)){
        mkdir($name);
        echo "O Diretório $name foi Criado com Sucesso!";
    } else{
        rmdir($name);
        echo "Já existe o Diretório $name em seu Projeto foi removido";
    }
?>