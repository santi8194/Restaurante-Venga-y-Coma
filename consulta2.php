<html>
<head>
	<title>Consulta 2</title>
</head>
<body>

	<?php
		require("conexion.php");

		$query = "	SELECT R.*, M.restaurante
			        FROM restaurante AS R INNER JOIN mesa AS M ON R.ciudad = M.restaurante 
				   	GROUP BY R.ciudad
			        HAVING Count(*)>1 AND Count(*)<5";

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