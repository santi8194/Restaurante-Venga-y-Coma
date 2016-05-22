<?php
	require("consultas.html");	

	if(isset($_GET["option"])){
		if($_GET["option"] == "1"){
			require("consulta1.php");
		}elseif($_GET["option"] == "2"){
			require("consulta2.php");
		}elseif($_GET["option"] == "3"){
			require("consulta3.php");
		}
	}
?>