<?php

include 'conexion.php';


$q_medidas = "SELECT * FROM medidas";
$r_medida = $conexion->query($q_medidas) or die(mysql_error());
$num_rows_medida = $r_medida->num_rows;

$q_origen = "SELECT * FROM origen";
$r_origen = $conexion->query($q_origen) or die(mysql_error());
$num_rows_origen = $r_origen->num_rows;

$q_presentacion = "SELECT * FROM presentacion";
$r_presentacion = $conexion->query($q_presentacion) or die(mysql_error());
$num_rows_presentacion = $r_presentacion->num_rows;

$q_tipo = "SELECT * FROM tipo";
$r_tipo = $conexion->query($q_tipo) or die(mysql_error());
$num_rows_tipo = $r_tipo->num_rows;





while ($row_medida = $r_medida->fetch_assoc())  
{
       $a_medida[] = array_map(null, $row_medida);
    
}

while ($row_origen = $r_origen->fetch_assoc())  
{
       $a_origen[] = array_map(null, $row_origen);
    
}

while ($row_presentacion = $r_presentacion->fetch_assoc())  
{
       $a_presentacion[] = array_map(null, $row_presentacion);
    
}

while ($row_tipo = $r_tipo->fetch_assoc())  
{
       $a_tipo[] = array_map(null, $row_tipo);
    
}

$num = array("rows_medida"=>$num_rows_medida,"rows_origen"=>$num_rows_origen,"rows_presentacion"=>$num_rows_presentacion,"rows_tipo"=>$num_rows_tipo);

$json[] = array_merge($a_medida,$a_origen,$a_presentacion,$a_tipo,$num);
//$a_tipo[] = array_map(null, $row_tipo);

//var_export($json);
echo json_encode($json,JSON_UNESCAPED_UNICODE);
//echo json_encode($json[0][0]["id_medida"],JSON_UNESCAPED_UNICODE);

$conexion->close();
?>	