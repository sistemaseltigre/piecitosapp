<?php

include 'conexion.php';

$nombre_inv       =   $_POST["nombre_inv"];
$cantidad_inv     =   $_POST["cantidad_inv"];
$descripcion_inv  =   $_POST["descripcion_inv"];
$ubicacion_inv    =   $_POST["ubicacion_inv"];
$medida_inv       =   $_POST["medida_inv"];
$presentacion_inv =   $_POST["presentacion_inv"];
$tipo_inv         =   $_POST["tipo_inv"];
$origen_inv       =   $_POST["origen_inv"];

$error = array(
    "error"    => true,
    "validate" => "0",
);


	$error["error"]=true;
	$query = "INSERT INTO inventario(nombre_inv, cantidad_inv, descripcion_inv, ubicacion_inv, medida_inv, presentacion_inv, tipo_inv, origen_inv) VALUES ('$nombre_inv','$cantidad_inv','$descripcion_inv','$ubicacion_inv','$medida_inv','$presentacion_inv','$tipo_inv','$origen_inv')";
	$result = $conexion->query($query) or die(mysql_error());



echo json_encode($error);
$conexion->close();
?>