<html>
<head>
	<title>Busqueda 2</title>
</head>
<body>

	<?php
		require("conexion.php");
		extract($_GET);

		$query = "SELECT *
					FROM restaurante, mesa
					WHERE restaurante.ciudad = '$restaurante'
					AND mesa.id = $id_mesa
					AND mesa.restaurante = '$restaurante'";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Detalles de Restaurante y Mesa</h2>

			<table border='1' width="29%">
				<tr>
					<th>ID Mesa</th>
					<th>Capacidad</th>
					<th>Estado</th>
					<th>Ciudad</th>
					<th>Dirección</th>
					<th>Telefono</th>
					<th>Capacidad Restaurante</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$id = $row["id"];
						$capacidad = $row["capacidad"];
						$estado = $row["estado"];
						$ciudad = $row["ciudad"];
						$direccion = $row["direccion"];
						$telefono = $row["telefono"];
						$tamano = $row["tamano"];
				?>
				<tr>
					<td><?php echo $id ?></td>
					<td><?php echo $capacidad ?></td>
					<td><?php echo $estado ?></td>
					<td><?php echo $ciudad ?></td>
					<td><?php echo $direccion ?></td>
					<td><?php echo $telefono ?></td>
					<td><?php echo $tamano ?></td>
				</tr>
				<?php
					}
				?>


			</table>
			<?php
		} else{
			echo "No hay resultados de la Busqueda.";
			echo "<br>";
			echo '<a href="index.php">volver a incio</a>';
		}
	?>
		<br>
		<a href="index.php">volver a inicio</a>

</body>
</html>