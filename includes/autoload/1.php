<?php
// Nota que a Função __autoload() foi descontinuada a partir da versão 7.2 do php e no Próximo exemplo tera a nova função para esse metodo!
function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
}
    $carro = new Gol();
    echo "<br/>";
    $carro->acelerar(80);

?>