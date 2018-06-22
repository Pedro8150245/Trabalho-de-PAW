<?php

$estado = $_POST["estado"];

if ($_POST["estado"] == "DontKnow") {
	header("Location: ../../../pages/Exames.html");
	}else{
		header("Location: ../../../pages/Consultas.html");
	}
/*
include 'bdcon.php';
$link = bd_open();
$estado = $_POST["estado"];
        $query = "INSERT INTO Users(estado) VALUES('$estado')";
        
mysqli_close($link);
*/
?>