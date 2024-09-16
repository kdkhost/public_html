<?php
//** conectando o mysqli */

$conn = new mysqli("localhost", "php7transferenci_udemy", "udemy2019.", "php7transferenci_udemy" );
if ($conn->connect_error){
    echo "Error: " .$conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

    array_push($data, $row);
    //var_dump($row);
}
echo json_encode($data);
?>