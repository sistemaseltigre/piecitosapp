<?php

include 'conexion.php';


$nombre_bb = $_GET['nombre'];

$query = "SELECT * FROM baby,impedimento WHERE nombre_bb LIKE '%".$nombre_bb."%' AND baby.impedimento=impedimento.id_impedimento";

$result = $conexion->query($query) or die(mysql_error());
$num_rows = $result->num_rows;


while ($row = $result->fetch_assoc())  
{
	$bebe[] = array_map(null, $row);
    //$bebe[$i] = array($row);
    
}

$bebe[0]["num_rows"]=$num_rows;
//echo $bebe[0]."<br>";
echo json_encode($bebe,JSON_UNESCAPED_UNICODE);
$result->close();
?>