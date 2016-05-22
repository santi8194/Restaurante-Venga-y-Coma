<?php 
	require("index.php");
	require("../../conexion.php");
	extract($_POST);

	$query = "DELETE FROM atencion WHERE fecha='$fecha' AND hora=$hora AND id_mesa=$id_mesa AND mesa_rest='$restaurante'";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "Atención eliminada correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Atención</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo '$id';
		echo "error al eliminar Atención";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Atención</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>