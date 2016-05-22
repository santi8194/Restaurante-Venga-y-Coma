<?php
	require("index.html");	

	if(isset($_GET["option"])){
		if($_GET["option"] == "insertarA"){
			require("insertarA.html");
		}elseif($_GET["option"] == "mostrarA"){
			require("mostrarA.php");
		}elseif($_GET["option"] == "eliminarA"){
			require("eliminarA.html");
		}elseif($_GET["option"] == "actualizarA"){
			require("actualizarA.html");
		}
	}
?>