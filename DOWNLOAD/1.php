<?php 
$link = "https://grupomgmf.com.br/wp-content/uploads/2017/01/main_banner2-1024x559.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?$basename?>" alt="" />