<?php 
	require("../../conexion.php");
	extract($_GET);

	$query = "INSERT INTO mesa(id, capacidad, estado, restaurante) VALUES
	($id, $capacidad, '$estado', '$restaurante'); ";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "<br>";
		echo "Mesa insertada correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Mesa</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo "error al insertar Mesa";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Mesa</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>