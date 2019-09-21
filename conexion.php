<?php
//archivo de conexion android piecitos

header('Content-type: text/html; charset=utf-8');


$hostname = "localhost";
$database = "piecitos_bd";
$username = "root";
$password = "casablanca_123";
$conexion = new mysqli($hostname, $username, $password, $database);
$conexion->set_charset('utf8');

if ($conexion->connect_errno) {
	echo "lo sentimos, el servidor no responde";
}


//mysqli_close($con);
?>