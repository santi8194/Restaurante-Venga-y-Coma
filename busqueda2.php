<html>
<head>
	<title>Busqueda 2</title>
</head>
<body>

	<?php
		require("conexion.php");
		extract($_GET);

		$query = "SELECT *
					FROM factura, detalle
					WHERE revisor = $id AND factura.codigo = detalle.factura";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Facturas con Detalles</h2>

			<table border='1' width="29%">
				<tr>
					<th>Código</th>
					<th>Fecha</th>
					<th>Valor</th>
					<th>Emisor</th>
					<th>Revisor</th>
					<th>ID</th>
					<th>Recorrido</th>
					<th>Beneficios</th>
					<th>factura</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$codigo = $row["codigo"];
						$fecha = $row["fecha"];
						$valor = $row["valor"];
						$emisor = $row["emisor"];
						$revisor = $row["revisor"];
						$id = $row["id"];
						$recorrido = $row["recorrido"];
						$Beneficios = $row["beneficios"];
						$factura = $row["factura"];
				?>
				<tr>
					<td><?php echo $codigo ?></td>
					<td><?php echo $fecha ?></td>
					<td><?php echo $valor ?></td>
					<td><?php echo $emisor ?></td>
					<td><?php echo $revisor ?></td>
					<td><?php echo $id ?></td>
					<td><?php echo $recorrido ?></td>
					<td><?php echo $Beneficios ?></td>
					<td><?php echo $factura ?></td>
				</tr>
				<?php
					}
				?>


			</table>
			<?php
		} else{
			echo "No hay facturas en la base de datos.";
			echo "<br>";
			echo '<a href="index.php">volver a modificar factura</a>';
			echo "<br>";
			echo '<a href="../../index.php">volver a inicio</a>';
		}
	?>
		<br>
		<a href="index.php">volver a inicio</a>

</body>
</html>