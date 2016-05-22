<?php
	require("index.html");	

	if(isset($_GET["option"])){
		if($_GET["option"] == "insertarM"){
			require("insertarM.html");
		}elseif($_GET["option"] == "mostrarM"){
			require("mostrarM.php");
		}elseif($_GET["option"] == "eliminarM"){
			require("eliminarM.html");
		}elseif($_GET["option"] == "actualizarM"){
			require("actualizarM.html");
		}
	}
?>