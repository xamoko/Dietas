<?php
include("conecta.php");

$conec=conectarse();
$localidad=$_POST["localidad"];
$clave=$_POST["clave"];

$cons="insert into localidades values ('$localidad','$clave');";

	if ($consulta= mysql_query ($cons,$conec));
	
	echo "<script> alert('La localidad ha sido guardada, volvera al formulario de registro de localidades..');</script>";

	            echo '<script> self.location="guardalocalidad.html";</script>';
		  
		

?>
