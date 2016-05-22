<html>
<head>
	<title>Búsqudas</title>
	<link rel="icon" type="image/png" href="http://png-4.findicons.com/files/icons/2219/dot_pictograms/256/bus.png">
</head>
<body>
	<a style="float:left;height:75px; width:250px;">
		<div style=" background-color: #4cff85;
				box-shadow: inset 0px -50px 63px -14px rgba(46,194,93,0.75);
				text-align: center; margin: 0 10px; border-radius: 25px; padding: 1px;">
			<p>Dado un número n, buscar todos los datos de las facturas que tienen exactamente n detalles en total.</p>
			<h2 style="margin: 12px;">1</h2>
		</div>
		<div>
			<form action="busqueda1.php" method="GET">
				<br><br><br>
				<b>n:</b><input type="number" name="n" min="1" required><br><br>
				<input type="submit" value="Buscar">
			</form>
		</div>
	</a>

	<a style="float:left;height:75px; width:250px;">
		<div style=" background-color: #4cff85;
				box-shadow: inset 0px -50px 63px -14px rgba(46,194,93,0.75);
				text-align: center; margin: 0 10px; border-radius: 25px; padding: 1px;">
			<p>Dada id ID de un taquillero, buscar todos los datos de las facturas que él ha revisado (y de cada una de estas facturas se deben mostrar los datos de sus detalles).</p>
			<h2 style="margin: 12px;">2</h2>
		</div>
		<div>
			<form action="busqueda2.php" method="GET">
				<br><br><br>
				<b>ID:</b>
				<?php
				require("conexion.php");
				$query = "SELECT * FROM taquillero";
				$result = mysqli_query($conexion, $query);
				if($result){
				?>	
					<select name="id" required>
					<?php
					while($row = $result->fetch_array()){
						$id = $row["id"];
					?>
			  			<option value="<?php echo $id; ?>"><?php echo $id; ?></option>
			  		<?php
			  		}
			  		?>
					</select><br><br>
				<?php
				} else{
					echo "No hay taquilleros en la base de datos. Crear uno para poder insertar Factura.";
				}
				?>
				<input type="submit" value="Buscar">
			</form>
		</div>
	</a>
	<br><br><br><br><br><br>
	
</body>
</html>