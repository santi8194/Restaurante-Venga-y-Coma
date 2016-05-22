
<html>
<head>
	<title>Actualizar Atención</title>
</head>
<body>
	<?php 
	require("index.php");
	extract($_POST);
	?>
	<form>
		<b>La atención con fecha <?php echo $fecha ?> en la hora <?php echo $hora ?> de la mesa <?php echo $id_mesa ?> en <?php echo $restaurante ?></b><br>
		<b>no se puede modificar porque la clave primaria de atención es {fecha, hora, {id_mesa, mesa_rest}}</b>
	</form>
	<br>
	<a href="index.php">volver a modificar Atención</a>
	<br>
	<a href="../../index.php">volver a inicio</a>
</body>
</html>