<?php
include("conecta.php");
$conec=conectarse();

$iddieta=$_POST["iddieta"];
$idalimentos=$_POST["idalimentos"];
$desayuno=$_POST["desayuno"];
$colacion=$_POST["colacion"];
$almuerzo=$_POST["almuerzo"];
$colaciondos=$_POST["colaciondos"];
$cena=$_POST["cena"];
$idlocalidad=$_POST["idlocalidad"];
$enfermedad=$_POST["enfermedad"];
$fecha=$_POST["fecha"];
$calorias=$_POST["calorias"];

$cons2="select * from dieta where iddieta='".$iddieta."';";
$cons="insert into dieta values ('$iddieta','$idalimentos','$desayuno','$colacion','$almuerzo','$colaciondos','$cena','$idlocalidad','$enfermedad','$fecha','$calorias');";

$consulta2= mysql_query($cons2,$conec);

if (mysql_num_rows($consulta2)>0) {
	echo "<script>alert('LA DIETA YA SE ENCUENTRA EN LA BASE DE DATOS, POR FAVOR CONSULTALA Y RECOMIENDALA.);</script>";

	            echo '<script> self.location="agregardietas.html";</script>';	
	
}
else{
	$consulta= mysql_query ($cons,$conec);
	
	echo "<script> alert('LA DIETA HA SIDO REGISTRADA CORRECTAMENTE, CONSULTALA O IMPRIMELA EN EL MENU DE OPCIONES, REGRESARA AL FORMULARIO DE DIETAS');</script>";

	            echo '<script> self.location="agregardietas.html";</script>';
		  
		if ($consulta==0) {
			echo "";
			}
}
?>
