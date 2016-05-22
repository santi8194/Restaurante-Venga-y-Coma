<?php 
	require("../../conexion.php");
	extract($_GET);

	$query = "INSERT INTO restaurante(ciudad, direccion, telefono, tamano) VALUES
	('$ciudad', '$direccion', $telefono, $tamano); ";

	$result = mysqli_query($conexion,$query);

	if($result){
		echo "<br>";
		echo "Restaurante insertado correctamente";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Restaurante</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}else{
		echo "error al insertar Restaurante";
		echo "<br>";
		echo '<a href="index.php">volver a modificar Restaurante</a>';
		echo "<br>";
		echo '<a href="../../index.php">volver a inicio</a>';
	}

?>