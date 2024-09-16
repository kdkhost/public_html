<?php
    //include ("abstrata/Automovel.php");
    spl_autoload_register(function($nomeClasse){
        
        if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
        }

    });

class Gol extends Automovel {
    public function empurrar(){

    }
} 

?>