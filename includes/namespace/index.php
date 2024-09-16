<?php
    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("Marcelo");
    $cad->setEmail("contato@kdkhost.com.br");
    $cad->setSenha("admin123.");

    $cad->registrarVendas();
?>