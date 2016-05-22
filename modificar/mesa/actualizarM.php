
<html>
<head>
	<title>Actualizar Mesa</title>
</head>
<body>
	<?php 
	require("index.php");
	require("../../conexion.php");
	extract($_POST); // crea variable que se llama $cedula del valor del input

	$query = "SELECT * FROM mesa WHERE id = $id AND restaurante='$restaurante'";

	$result = mysqli_query($conexion,$query);

	if($result){
		while($row = $result->fetch_array()){
			$capacidad = $row["capacidad"];
			$estado = $row["estado"];

			?>
			<form action = "actualizarMesa.php" method = "POST" required>
				<LABEL>ID: </LABEL>
				<input type="number" name="id_n" value="<?php echo $id ?>" readonly><br>
				<LABEL>Restaurante: </LABEL>
				<input type="text" name="restaurante_n" value="<?php echo $restaurante ?>" readonly><br>
				<LABEL>Capacidad: </LABEL>
				<input type="number" name="capacidad_n" value="<?php echo $capacidad ?>"><br>
				<LABEL>Estado: </LABEL>
				<select name="estado_n" required>
 					<option selected disabled>Escoja un estado</option>
					<option value="Disponible">Disponible</option>
					<option value="No Disponible">No Disponible</option>
				</select><br>
				<input type="submit" value="Editar">
			</form>
	<?php
		}
	}else{
		echo "no se encontro la Mesa";
	}

	?>
</body>
</html>