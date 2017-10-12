<?php
include("conecta.php");
mysqli_set_charset(conectarse,"utf-8");
$conectar=conectarse();

$nombre=$_POST["nombre"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$enfermedad=$_POST["enfermedad"];
$actividad=$_POST["actividad"];
$veces=$_POST["veces"];
//$resultado=$_POST["resultado"];
//$cons2="select * from registrar where iddo='".$iddoc."';";
$consultas="insert into calorias values ('$nombre','$peso','$talla','$enfermedad','$actividad','$veces');";

	
	if ($consulta= mysql_query ($consultas,$conectar));
	
	echo "<script> alert('Los datos del paciente han sido guardados, regresará para calcular el resultado de las calorías.');</script>";

	            echo '<script> self.location="formulariocalirias.html";</script>';
		  
		
?>
