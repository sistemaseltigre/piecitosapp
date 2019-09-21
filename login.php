<?php

include 'conexion.php';

$user = $_GET['user'];
$pass = $_GET['pass'];


$query = "SELECT * FROM usuarios WHERE user='$user' AND pass ='$pass'";
$result = $conexion->query($query) or die(mysql_error());

while ($fila = $result->fetch_array()) {
    $usuario[] = array_map('utf8_decode', $fila);
}

echo json_encode($usuario);
$result->close();

?>