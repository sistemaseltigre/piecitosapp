<?php
include 'conexion.php';

$user  = $_POST['user'];
$pass  = $_POST['pass'];
$pass2 = $_POST['pass2'];
$phone = $_POST['phone'];

$darray=date_parse_from_format("Y-n-j", $_POST["dateburn"]);
$date=date("Y-m-d", mktime(0, 0, 0, $darray['month'], $darray['day'], $darray['year']));

$error = array(
    "error"    => true,
    "validate" => "0",
);


$query_validate = "SELECT * FROM usuarios WHERE user='$user'";
$result_validate = $conexion->query($query_validate) or die(mysql_error());
$num_rows = $result_validate->num_rows;


if ($num_rows <= 0) {
	$error["error"]=true;
	$query = "INSERT INTO usuarios(user, telefono, pass, date, estatus) VALUES ('$user','$phone','$pass','$date',0)";
	$result = $conexion->query($query) or die(mysql_error());
}else{
	$error["error"]=false;
}



echo json_encode($error);
echo $num_rows;
mysqli_set_charset($conexion,"utf8");
$result_validate->close();




?>