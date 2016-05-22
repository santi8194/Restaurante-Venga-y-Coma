<html>
<head>
	<title>Busqueda 1</title>
</head>
<body>

	<?php
		require("conexion.php");
		extract($_GET);

		$query = "	SELECT *
					FROM
					(SELECT factura.*, COUNT(*) AS numero_detalles
									FROM factura, detalle
									WHERE codigo = factura
									GROUP BY codigo) as busca
					WHERE numero_detalles = $n";

		$result = mysqli_query($conexion, $query);

		if($result){
			?>			
			<h2>Facturas</h2>

			<table border='1' width="29%">
				<tr>
					<th>Código</th>
					<th>Fecha</th>
					<th>Valor</th>
					<th>Emisor</th>
					<th>Revisor</th>
					<th>Numero de Detalles</th>
				</tr>

				<?php
					while($row = $result->fetch_array()){
						$codigo = $row["codigo"];
						$fecha = $row["fecha"];
						$valor = $row["valor"];
						$emisor = $row["emisor"];
						$revisor = $row["revisor"];
						$detalles = $row["numero_detalles"];
				?>
				<tr>
					<td><?php echo $codigo ?></td>
					<td><?php echo $fecha ?></td>
					<td><?php echo $valor ?></td>
					<td><?php echo $emisor ?></td>
					<td><?php echo $revisor ?></td>
					<td><?php echo $detalles ?></td>
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