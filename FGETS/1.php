<?php 
    $filename = "usuarios.csv";
    if (file_exists($filename)){
        $file = fopen($filename, "r");
        $heardes = explode(",", fgets($file));
        $data = array();

        while ($row = fgets($file)) {
            $rowdata = explode(",", $row);
            $linha = array();
            for ($i = 0; $i< count($heardes); $i++){
                $linha[$heardes[$i]] = $rowData[$i];
            }

            array_push($data, $linha);

        }

        fclose($file);
        
        echo json_encode($data);
    }
?>