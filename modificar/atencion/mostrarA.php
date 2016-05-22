<html>
<head>
	<title>Mostrar Atencion</title>
</head>
<body>

	<?php
		require("../../conexion.php");

		$query = "SELECT * FROM atencion";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Atenciones Existentes</h2>

			<table border='1' width="29%">
				<tr>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Mesa</th>
					<th>Restaurante</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$fecha = $row["fecha"];
						$hora = $row["hora"];
						$mesa = $row["id_mesa"];
						$restaurante = $row["mesa_rest"];
				?>
				<tr>
					<td><?php echo $fecha ?></td>
					<td><?php echo $hora ?></td>
					<td><?php echo $mesa ?></td>
					<td><?php echo $restaurante ?></td>
				</tr>
				<?php
					}
				?>


			</table>
			<?php
		} else{
			echo "No hay Atenciones en la base de datos.";
		}
	?>
		<br>
		<a href="index.php">volver a modificar Atencion</a>
		<br>
		<a href="../../index.php">volver a inicio</a>

</body>
</html>