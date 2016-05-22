<html>
<head>
	<title>Mostrar Mesas</title>
</head>
<body>

	<?php
		require("../../conexion.php");

		$query = "SELECT * FROM mesa";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Mesas Existentes</h2>

			<table border='1' width="29%">
				<tr>
					<th>ID</th>
					<th>Capacidad</th>
					<th>Estado</th>
					<th>Restaurante</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$id = $row["id"];
						$capacidad = $row["capacidad"];
						$estado = $row["estado"];
						$restaurante = $row["restaurante"];
				?>
				<tr>
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
			echo "No hay Mesas en la base de datos.";
		}
	?>
		<br>
		<a href="index.php">volver a modificar Mesa</a>
		<br>
		<a href="../../index.php">volver a inicio</a>

</body>
</html>