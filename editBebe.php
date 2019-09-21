<?php

include 'conexion.php';


$id_bb = $_GET['id_bb'];

$query = "SELECT * FROM baby,impedimento WHERE id= '".$id_bb."' AND baby.impedimento=impedimento.id_impedimento";

$result = $conexion->query($query) or die(mysql_error());
$num_rows = $result->num_rows;


while ($row = $result->fetch_assoc())  
{
       $bebe[] = array_map(null, $row);
    
}

$bebe[0]["num_rows"]=$num_rows;

echo json_encode($bebe,JSON_UNESCAPED_UNICODE);
$result->close();
?>	