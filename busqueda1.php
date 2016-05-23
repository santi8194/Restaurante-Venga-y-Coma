<html>
<head>
	<title>Busqueda 1</title>
</head>
<body>

	<?php
		require("conexion.php");
		extract($_GET);

		$query = "	SELECT *
					FROM (atencion INNER JOIN mesa ON (atencion.mesa_rest = mesa.restaurante))
					WHERE atencion.id_mesa = mesa.id
					AND mesa.restaurante = '$ciudad'";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Detalle de Atenciónes con Detalle de Mesas</h2>

			<table border='1' width="29%">
				<tr>
					<th>Fecha</th>
					<th>Hora</th>
					<th>ID Mesa</th>
					<th>Capacidad Mesa</th>
					<th>Estado</th>
					<th>Restaurante</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$fecha = $row["fecha"];
						$hora = $row["hora"];
						$id = $row["id"];
						$capacidad = $row["capacidad"];
						$estado = $row["estado"];
						$restaurante = $row["restaurante"];
				?>
				<tr>
					<td><?php echo $fecha ?></td>
					<td><?php echo $hora ?></td>
					<td><?php echo $id ?></td>
					<td><?php echo $capacidad ?></td>
					<td><?php echo $estado ?></td>
					<td><?php echo $restaurante ?></td>
				</tr>
				<?php
					}
				?>


			</table>
			<?php
		} else{
			echo "No hay resultados de la busqueda.";
		}
	?>
		<br>
		<a href="index.php">volver a inicio</a>

</body>
</html>