<html>
<head>
	<title>Consulta 3</title>
</head>
<body>

	<?php
		require("conexion.php");

		$query = "	SELECT *
					FROM taquillero
					WHERE id NOT IN (SELECT emisor as id
				                 FROM factura)
						AND id NOT IN (SELECT revisor AS id
				                   FROM factura)";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Taquilleros</h2>

			<table border='1' width="29%">
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Fecha</th>
					<th>Taquilla</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$id = $row["id"];
						$nombre = $row["nombre"];
						$fecha = $row["fecha_contratado"];
						$taquilla = $row["num_taquilla"];
				?>
				<tr>
					<td><?php echo $id ?></td>
					<td><?php echo $nombre ?></td>
					<td><?php echo $fecha ?></td>
					<td><?php echo $taquilla ?></td>
				</tr>
				<?php
					}
				?>


			</table>
			<?php
		} else{
			echo "No hay personas en la base de datos.";
		}
	?>
		<br>
		<a href="index.php">volver a inicio</a>

</body>
</html>