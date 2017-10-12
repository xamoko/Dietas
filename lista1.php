<?php 
	require_once("dompdf/dompdf_config.inc.php");
	$folio=$_POST["folio"];
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("Dietas",$conexion);
	
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Lista</title>
</head>
<p><img src="images/tabasco.jpg" width="339" height="84" alt=""/><p><br><p><center><h4>JURISDICION SANITARIA XII MACUSPANA, TABASCO.</h4></center></p>
<br><p><center>NOMBRE DEL DOCTOR: _____________________________________________________________</center></p>
<br>
<br>
<br>
<body>
<div align="center">
    <table width="100%" border="1">
      <tr>
	  <td bgcolor="#EF234F"><strong>Folio</strong></td>
	  <td bgcolor="#EF234F"><strong>Nombre</strong></td>
	<td bgcolor="#EF234F"><strong>Apellido Paterno</strong></td>
    <td bgcolor="#EF234F"><strong>Apellido Materno</strong></td> 
	<td bgcolor="#EF234F"><strong>Edad</strong></td>
	<td bgcolor="#EF234F"><strong>Peso</strong></td>
    <td bgcolor="#EF234F"><strong>Talla</strong></td>
  <td bgcolor="#EF234F"><strong>Enfermedad</strong></td>
 <td bgcolor="#EF234F"><strong>Localidad</strong></td>
  	
      </tr>';

        $consulta=mysql_query("SELECT * FROM pacientes where folio='".$folio."';");       
		 while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='

      <tr>
       <td>'.$dato['folio'].'</td>
        <td>'.$dato['nombre'].'</td>
        <td>'.$dato['apepat'].'</td>
		  <td>'.$dato['apemat'].'</td>
			<td>'.$dato['edad'].'</td>
			  <td>'.$dato['peso'].'</td>
			  <td>'.$dato['talla'].'</td>
			  <td>'.$dato['enfermedad'].'</td>
			  <td>'.$dato['localidad'].'</td>
			        </tr>';
      } 
$codigoHTML.='
<p>Seguir al pie de la letra las recomendaciones del doctor.</p>
<strong><p>Nota:</p></strong>
    </table>
</div>
</body>
</html>';
ini_set("memory_limit","32M");

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->set_paper("letter","landscape");  //tiene que ser horizontal y lo deja en vertical 
$dompdf->load_html($codigoHTML);

$dompdf->render();
$dompdf->stream("Lista_de_Paciente.pdf");
?>
  
