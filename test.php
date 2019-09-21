<?php

include 'conexion.php';

	$nombre_rep = "Maríaaaa";

	$query="UPDATE baby SET nombre_rep='$nombre_rep' WHERE id =26";
	$result = $conexion->query($query) or die(mysql_error());


$conexion->close();