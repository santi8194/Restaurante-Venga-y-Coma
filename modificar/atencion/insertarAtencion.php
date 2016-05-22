<?php 
	require("../../conexion.php");
	extract($_GET);

	$query = "INSERT INTO atencion(fecha, hora, id_mesa, mesa_rest) VALUES
	('$fecha', $hora, $mesa, '$restaurante' ); ";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "<br>";
		echo "atencion insertado correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar atencion</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo "error al insertar atencion";
		echo "<br>";
		echo '<a href="index.php">volver a modificar atencion</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>