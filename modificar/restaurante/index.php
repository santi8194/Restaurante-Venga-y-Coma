<?php
	require("index.html");	

	if(isset($_GET["option"])){
		if($_GET["option"] == "insertarR"){
			require("insertarR.html");
		}elseif($_GET["option"] == "mostrarR"){
			require("mostrarR.php");
		}elseif($_GET["option"] == "eliminarR"){
			require("eliminarR.html");
		}elseif($_GET["option"] == "actualizarR"){
			require("actualizarR.html");
		}
	}
?>