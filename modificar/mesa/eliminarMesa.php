<?php 
	require("../../conexion.php");
	extract($_POST); 

	$query = "DELETE FROM mesa WHERE id=$id AND restaurante='$restaurante'";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "Mesa eliminada correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Mesa</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo '$id';
		echo "error al eliminar Mesa";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Mesa</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>