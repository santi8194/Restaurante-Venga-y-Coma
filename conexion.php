<!-- Use restaurante.sql file to import database that is used in this project. -->

<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$DB = "restaurante";

	$conexion = mysqli_connect($host, $user,
		$pass, $DB) or die ("Error en la conexion");
?>
