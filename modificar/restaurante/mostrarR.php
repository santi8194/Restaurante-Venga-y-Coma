<html>
<head>
	<title>Mostrar Restaurante</title>
</head>
<body>

	<?php
		require("../../conexion.php");

		$query = "SELECT * FROM restaurante";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Restaurantes Existentes</h2>

			<table border='1' width="29%">
				<tr>
					<th>Ciudad</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Tamaño</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$ciudad = $row["ciudad"];
						$direccion = $row["direccion"];
						$telefono = $row["telefono"];
						$tamano = $row["tamano"];
				?>
				<tr>
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
			echo "No hay Restaurantes en la base de datos.";
			echo "<br>";
			echo '<a href="index.php">volver a modificar Restaurante</a>';
			echo "<br>";
			echo '<a href="../../index.php">volver a inicio</a>';
		}
	?>
		<br>
		<a href="index.php">volver a modificar Restaurante</a>
		<br>
		<a href="../../index.php">volver a inicio</a>

</body>
</html>