<?php
include("conecta.php");
$conec=conectarse();
$iddo=$_POST["iddietass"];
$lun=$_POST["lunes"];
$mar=$_POST["martes"];
$mier=$_POST["miercoles"];
$juev=$_POST["jueves"];
$vier=$_POST["viernes"];
$sab=$_POST["sabado"];
$dom=$_POST["domingo"];
$lundos=$_POST["lunes2"];
$mardos=$_POST["martes2"];
$mierdos=$_POST["miercoles2"];
$juevdos=$_POST["jueves2"];
$vierdos=$_POST["viernes2"];
$sabdos=$_POST["sabado2"];
$domdos=$_POST["domingo2"];
$lunestres=$_POST["lunes3"];
$martestres=$_POST["martes3"];
$miercolestres=$_POST["miercoles3"];
$juevestres=$_POST["jueves3"];
$viernestres=$_POST["viernes3"];
$sabadotres=$_POST["sabado3"];
$domingotres=$_POST["domingo3"];
$lunescuatro=$_POST["lunes4"];
$martescuatro=$_POST["martes4"];
$miercolescuatro=$_POST["miercoles4"];
$juevescuatro=$_POST["jueves4"];
$viernescuatro=$_POST["viernes4"];
$sabadocuatro=$_POST["sabado4"];
$domingocuatro=$_POST["domingo4"];
$lunescinco=$_POST["lunes5"];
$martescinco=$_POST["martes5"];
$miercolescinco=$_POST["miercoles5"];
$juevescinco=$_POST["jueves5"];
$viernescinco=$_POST["viernes5"];
$sabadocinco=$_POST["sabado5"];
$domingocinco=$_POST["domingo5"];

//$idlocalidad=$_POST["idlocalidad"];;
//$enfermedad=$_POST["enfermedad"];
//$fecha=$_POST["fecha"];
//$calorias=$_POST["calorias"];

//$cons2="select * from iddieta where iddie='".$iddietass."';";
$consu="insert into iddieta values ('iddo','$lun','$mar','$mier','$juev','$vier','$sab','$dom','$lundos','$mardos','$mierdos','$juevdos','$vierdos','$sabdos','$domdos','$lunestres','$martestres','$miercolestres','$juevestres','$viernestres','$sabadotres','$domingotres','$lunescuatro','$martescuatro','$miercolescuatro','$juevescuatro','$viernescuatro','$sabadocuatro','$domingocuatro','$lunescinco','$martescinco','$miercolescinco','$juevescinco','$viernescinco','$sabadocinco','$domingocinco');";

//$consulta2= mysql_query($cons2,$conec);


if	($consulta= mysql_query ($consu,$conec));
	
	echo "<script> alert('LA DIETA HA SIDO REGISTRADA CORRECTAMENTE, CONSULTALA O IMPRIMELA EN EL MENU DE OPCIONES, REGRESARA AL FORMULARIO DE DIETAS');</script>";

	            echo '<script> self.location="dietanueva.html";</script>';
	

?>

