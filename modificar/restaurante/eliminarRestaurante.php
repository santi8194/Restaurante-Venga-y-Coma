<?php 
	require("../../conexion.php");
	extract($_POST);   // crea variable que se llama $ciudad del valor del input

	$query = "DELETE FROM restaurante WHERE ciudad='$ciudad'";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "Restaurante eliminado correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Restaurante</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo '$id';
		echo "error al eliminar Restaurante";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Restaurante</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>