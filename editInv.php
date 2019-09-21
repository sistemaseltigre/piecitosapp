<?php
include 'conexion.php';


$id_inv = $_GET['id_inv'];

$query = "SELECT * FROM inventario,medidas,origen,presentacion,tipo WHERE inventario.id_inventario='$id_inv' AND inventario.medida_inv=medidas.id_medida AND inventario.origen_inv=origen.id_origen AND inventario.presentacion_inv=presentacion.id_presentacion AND inventario.tipo_inv=tipo.id_tipo";

$result = $conexion->query($query) or die(mysql_error());
$num_rows = $result->num_rows;


while ($row = $result->fetch_assoc())  
{
       $inv[] = array_map(null, $row);
    
}

$inv[0]["num_rows"]=$num_rows;

echo json_encode($inv,JSON_UNESCAPED_UNICODE);
$conexion->close();
?>	