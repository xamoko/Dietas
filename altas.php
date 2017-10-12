<?php
include("conecta.php");

$conec=conectarse();

$iddo=$_POST["iddoc"];
$nom=$_POST["nombre"];
$ape=$_POST["apellidos"];
$user=$_POST["usuario"];
$con=$_POST["contrasena"];
$pues=$_POST["puesto"];
$regi=$_POST["region"];
$tel=$_POST["telefono"];
$email=$_POST["correo"];
//$cons2="select * from registrar where iddo='".$iddoc."';";
$cons="insert into registrar values ('$iddo','$nom','$ape','$user','$con','$pues','$regi','$tel','$email');";

$consulta2= mysql_query($cons2,$conec);

if (mysql_num_rows($consulta2)>0) {
	echo "<script> alert('EL ID DEL DOCTOR SE ENCUENTRA REPETIDO, INTENTE CON UNO NUEVO.);</script>";

	            echo '<script> self.location="registro.html";</script>';	
	
}
else{
	$consulta= mysql_query ($cons,$conec);
	
	echo "<script> alert('LOS DATOS DEL DOCTOR HAN SIDO GUARDADOS CORRECTAMENTE, REGRESARA AL MENU DE REGISTRO.');</script>";

	            echo '<script> self.location="registro.html";</script>';
		  
		
}
?>
