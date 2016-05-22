<?php
	require("index.html");	

	if(isset($_GET["option"])){
		if($_GET["option"] == "modificarD"){
			require("modificarD.html");
		}elseif($_GET["option"] == "consultas"){
			require("consultas.php");
		}elseif($_GET["option"] == "busquedas"){
			require("busquedas.php");
		}
	}
?>