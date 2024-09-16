<?php 

    $file = fopen("log.txt","a+");
    fwrite($file, date("d-m-Y H:i:s" . "\r\n"));
    fclose($file);
    echo "Criado com Sucesso!"

?>