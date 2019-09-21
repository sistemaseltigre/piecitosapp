<?php

include 'conexion.php';

$nombre_rep      =   $_POST["nombre_rep"];
$edad_rep        =   $_POST["edad_rep"];
$parentesco_rep  =   $_POST["parentesco_rep"];
$telefono_rep    =   $_POST["telefono_rep"];
$direccion_rep   =   $_POST["direccion_rep"];
$impedimento_rep =   $_POST["impedimento_rep"];
$nombre_baby     =   $_POST["nombre_baby"];

$darray=date_parse_from_format("Y-n-j", $_POST["dateburn_baby"]);
$dateburn_baby=date("Y-m-d", mktime(0, 0, 0, $darray['month'], $darray['day'], $darray['year']));

$peso_baby       =   $_POST["peso_baby"];
$talla_baby      =   $_POST["talla_baby"];
$edad_bb         =   $_POST["edad_bb"];
$codigo_baby     =   $_POST["codigo_baby"];


$error = array(
    "error"    => true,
    "validate" => "0",
);

$query_validate = "SELECT * FROM baby WHERE codigo='$codigo_baby'";
$result_validate = $conexion->query($query_validate) or die(mysql_error());
$num_rows = $result_validate->num_rows;

if ($num_rows <= 0) {
	$error["error"]=true;
	$query = "INSERT INTO baby(nombre_rep,edad_rep,parentesco_rep,telefono_rep,direccion_rep,impedimento,nombre_bb,fecha_bb,peso_bb,talla_bb,edad_bb,codigo) VALUES
	('$nombre_rep','$edad_rep','$parentesco_rep','$telefono_rep','$direccion_rep','$impedimento_rep','$nombre_baby','$dateburn_baby','$peso_baby','$talla_baby','$edad_bb','$codigo_baby')";
	$result = $conexion->query($query) or die(mysql_error());
}else{
	$error["error"]=false;
}



echo json_encode($error);
echo $num_rows;
$result_validate->close();
?>