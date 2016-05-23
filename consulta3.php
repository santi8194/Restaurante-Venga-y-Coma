<html>
<head>
	<title>Consulta 3</title>
</head>
<body>

	<?php
		require("conexion.php");

		$query = "	SELECT *
					FROM restaurante
					WHERE ciudad IN (SELECT restaurante as ciudad
				                 FROM mesa
				                 GROUP BY restaurante
				                 HAVING COUNT(*) >= 2)
					AND NOT EXISTS (SELECT *
				                   FROM mesa
				                   WHERE mesa.restaurante = restaurante.ciudad
	                               AND NOT EXISTS(SELECT *
			                   					FROM atencion
			                   					WHERE mesa.id = atencion.id_mesa
			                   					AND mesa.restaurante = atencion.mesa_rest))";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Restaurantes</h2>

			<table border='1' width="29%">
				<tr>
					<th>Ciudad</th>
					<th>Dirección</th>
					<th>Telefono</th>
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
			echo "No hay restaurantes en la base de datos.";
		}
	?>
		<br>
		<a href="index.php">volver a inicio</a>

</body>
</html>