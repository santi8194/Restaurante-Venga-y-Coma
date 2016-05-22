
<html>
<head>
	<title>Actualizar Restaurante</title>
</head>
<body>
	<?php 
	require("index.php");
	require("../../conexion.php");
	extract($_POST); // crea variable que se llama $ciudad del valor del input

	$query = "SELECT * FROM restaurante WHERE ciudad = '$ciudad'";

	$result = mysqli_query($conexion,$query);

	if($result){
		while($row = $result->fetch_array()){
			$direccion = $row["direccion"];
			$telefono = $row["telefono"];
			$tamano = $row["tamano"];
			?>
			<form action = "actualizarRestaurante.php" method = "POST">
				<input type="hidden" name="ciudad_vieja" value="<?php echo $ciudad ?>">
				<LABEL>Ciudad: </LABEL>
				<input type="text" value="<?php echo $ciudad ?>" readonly><br>
				<LABEL>Dirección: </LABEL>
				<input type="text" name="direccion_n" value="<?php echo $direccion ?>" required><br>
				<LABEL>Teléfono: </LABEL>
				<input type="number" name="telefono_n" value="<?php echo $telefono ?>" required><br>
				<LABEL>Tamaño: </LABEL>
				<input type="number" name="tamano_n" value="<?php echo $tamano ?>" required><br>

				<input type="submit" value="Editar">
			</form>
	<?php
		}
	}else{
		echo "no se encontro la Restaurante";
	}

	?>
		<br>
		<a href="index.php">volver a modificar Restaurante</a>
		<br>
		<a href="../../index.php">volver a inicio</a>
</body>
</html>