<?php 
    $images =scandir("images");

    $data = array();

    foreach ($images as $img) {
        if (!in_array($img, array(".", ".."))) {
            $filename = "images" . DIRECTORY_SEPARATOR . $img;
            $info = pathinfo($filename);

            $info["size"] = filesize ($filename). ' bytes';
            $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
            
            //$info["url"] = "https://php7.transferenciacpanel.cf/dir/".str_replace("\\","/",$filename);

            $info["url"] = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".str_replace("\\","/",$filename);
            
            array_push($data, $info);
        }
    }
    echo json_encode($data);
?>