<?php 
	require("index.php");
	require("../../conexion.php");
	extract($_POST);

	$query = "UPDATE mesa SET capacidad=$capacidad_n, estado='$estado_n' WHERE id=$id_n AND restaurante='$restaurante_n'";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "mesa actualizada correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar mesa</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo "error al actualizar mesa";
		echo "<br>";
		echo '<a href="index.php">volver a modificar mesa</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>