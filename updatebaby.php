<?php

include 'conexion.php';

$id      =   $_POST["id"];
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



	$query="UPDATE baby SET nombre_rep='$nombre_rep',edad_rep='$edad_rep',parentesco_rep='$parentesco_rep',telefono_rep='$telefono_rep',direccion_rep='$direccion_rep',impedimento='$impedimento_rep',nombre_bb='$nombre_baby',fecha_bb='$dateburn_baby',peso_bb='$peso_baby',talla_bb='$talla_baby',edad_bb='$edad_bb',codigo='$codigo_baby' WHERE id = '$id'";
	$result = $conexion->query($query) or die(mysql_error());



$error["nombre_rep"]=$nombre_rep;
echo json_encode($error);
$result->close();
?>