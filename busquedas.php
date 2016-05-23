<html>
<head>
	<title>Búsqudas</title>
</head>
<body>
	<a style="float:left;height:75px; width:250px;">
		<div style=" background-color: #4cff85;
				box-shadow: inset 0px -50px 63px -14px rgba(46,194,93,0.75);
				text-align: center; margin: 0 10px; border-radius: 25px; padding: 1px;">
			<p>Ingrese la ciudad de un restaurante para ver todos sus mesas y a su vez todas las atenciones de cada una de ellas.</p>
			<h2 style="margin: 12px;">1</h2>
		</div>
		<div>
			<form action="busqueda1.php" method="GET">
				<br><br><br>
				<b>Ciudad:</b>
				<select name="ciudad" required>
				<?php
				require("conexion.php");
				$query = "SELECT * FROM restaurante";
				$result = mysqli_query($conexion, $query);
				if($result){
					while($row = $result->fetch_array()){
						$ciudad = $row["ciudad"];
					?>
			  			<option value="<?php echo $ciudad; ?>"><?php echo $ciudad; ?></option>
			  		<?php
			  		}
				} else{
					echo "No hay Restaurantes en la base de datos.";
				}
		  		?>
				</select><br><br>
				<input type="submit" value="Buscar">
			</form>
		</div>
	</a>

	<a style="float:left;height:75px; width:250px;">
		<div style=" background-color: #4cff85;
				box-shadow: inset 0px -50px 63px -14px rgba(46,194,93,0.75);
				text-align: center; margin: 0 10px; border-radius: 25px; padding: 1px;">
			<p>Ingrese los datos de una atencion para ver todos los datos de las mesas y del restaurante al que la atencion pertenece.</p>
			<h2 style="margin: 12px;">2</h2>
		</div>
		<div>
			<form action="busqueda2.php" method="GET">
				<br><br><br>
				<b>ID-Mesa:</b>
				<select name="id_mesa">
				<?php
				require("conexion.php");
				$query = "SELECT DISTINCT(id_mesa) AS id_mesa FROM atencion";
				$result = mysqli_query($conexion, $query);
				if($result){
					while($row = $result->fetch_array()){
						$id_mesa = $row["id_mesa"];
					?>
			  			<option value="<?php echo $id_mesa; ?>"><?php echo $id_mesa; ?></option>
			  		<?php
			  		}
				} else{
					echo "No hay mesas en la base de datos.";
				}
		  		?>
				</select><br><br>
				<b>Restaurante:</b>
				<select name="restaurante">
				<?php
				$query = "SELECT DISTINCT(mesa_rest) AS mesa_rest FROM atencion";
				$result = mysqli_query($conexion, $query);
				if($result){
					while($row = $result->fetch_array()){
						$restaurante = $row["mesa_rest"];
					?>
			  			<option value="<?php echo $restaurante; ?>"><?php echo $restaurante; ?></option>
			  		<?php
			  		}
				} else{
					echo "No hay restaurantes en la base de datos.";
				}
		  		?>
				</select><br><br>
				<input type="submit" value="Buscar">
			</form>
		</div>
	</a>
	<br><br><br><br><br><br>
	
</body>
</html>