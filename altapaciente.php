<?php
include("conecta.php");

$conec=conectarse();

$folio=$_POST["folio"];
$nombre=$_POST["nombre"];
$apepat=$_POST["apepat"];
$apemat=$_POST["apemat"];
$edad=$_POST["edad"];
$peso=$_POST["peso"];
$talla=$_POST["talla"];
$enfermedad=$_POST["enfermedad"];
$localidad=$_POST["localidad"];
$cons2="select * from pacientes where folio='".$folio."';";
$cons="insert into pacientes values ('$folio','$nombre','$apepat','$apemat','$edad','$peso','$talla','$enfermedad','$localidad');";

$consulta2= mysql_query($cons2,$conec);

if (mysql_num_rows($consulta2)>0) {
	echo "<script> alert('EL FOLIO DEL PACIENTE SE ENCUENTRA REPETIDO, UTILICE OTRO.);</script>";

	            echo '<script> self.location="formulariopaciente.html";</script>';	
	
}
else{
	$consulta= mysql_query ($cons,$conec);
	
	echo "<script> alert('LOS DATOS DEL PACIENTE HAN SIDO GUARDADOS CORRECTAMENTE, REGRESARA AL MENU DE REGISTRO.');</script>";

	            echo '<script> self.location="formulariopaciente.html";</script>';
		  
		
}
?>
