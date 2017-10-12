<?php
include("conecta.php");

$conec=conectarse();
$enfermedades=$_POST["enfermedades"];
$cons="insert into enfermedad values ('$enfermedades');";

	if ($consulta= mysql_query ($cons,$conec));
	
	echo "<script> alert(La enfermedad ha sido guardada, regresara al formulario de guardar..');</script>";

	            echo '<script> self.location="guardaenfermedad.html";</script>';
		  
		

?>
