<?php 
	require("index.php");
	require("../../conexion.php");
	extract($_POST);

	$query = "UPDATE restaurante SET direccion='$direccion_n', telefono=$telefono_n, tamano=$tamano_n WHERE ciudad='$ciudad_vieja'";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "Restaurante actualizada correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Restaurante</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo "error al actualizar Restaurante";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Restaurante</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>