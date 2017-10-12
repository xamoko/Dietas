<?php 
	require_once("dompdf/dompdf_config.inc.php");
	$iddietass=$_POST["iddietass"];
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("Dietas",$conexion);
	
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
<title>Lista</title>
</head>
<p><br><p><center><h4>JURISDICION SANITARIA XII MACUSPANA, TABASCO.</h4></center></p>
<br><p><center>NOMBRE DEL DOCTOR: _____________________________________________________________</center></p>
<br><p><center>NOMBRE DEL PACIENTE: ___________________________________________________________</center></p>
<br><p><center>CALORIAS: ______________________________ IMC: __________________________________</center></p>


<br>
<br>
<body>
<div align="center">
    <table width="100%" border="1">
      <tr>
	  <td bgcolor="#EF234F"><strong>Tipo</strong></td>
	<td bgcolor="#EF234F"><strong>ID</strong></td>
    <td bgcolor="#EF234F"><strong>Lunes</strong></td> 
	<td bgcolor="#EF234F"><strong>Martes</strong></td>
	<td bgcolor="#EF234F"><strong>Miercoles</strong></td>
    <td bgcolor="#EF234F"><strong>Jueves</strong></td>
  <td bgcolor="#EF234F"><strong>Viernes</strong></td>
 <td bgcolor="#EF234F"><strong>Sabado</strong></td>
  <td bgcolor="#EF234F"><strong>Domingo</strong></td>
		
      </tr>';

        $consulta=mysql_query("SELECT * FROM iddieta where iddietass='".$iddietass."';");       
		 while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='

      <tr>
	  <th bgcolor="#EF234F">Desayuno:</th>
       <td>'.$dato['iddietass'].'</td>
        <td>'.$dato['lunes'].'</td>
        <td>'.$dato['martes'].'</td>
		  <td>'.$dato['miercoles'].'</td>
			<td>'.$dato['jueves'].'</td>
			  <td>'.$dato['viernes'].'</td>
			  <td>'.$dato['sabado'].'</td>
			  <td>'.$dato['domingo'].'</td>
        </tr>
		<tr>
		<th  bgcolor="#EF234F">Colación:</th>
		 <td>'.$dato['iddietass'].'</td>
        <td>'.$dato['lunes2'].'</td>
        <td>'.$dato['martes2'].'</td>
		  <td>'.$dato['miercoles2'].'</td>
			<td>'.$dato['jueves2'].'</td>
			  <td>'.$dato['viernes2'].'</td>
			  <td>'.$dato['sabado2'].'</td>
			  <td>'.$dato['domingo2'].'</td>
		</tr>
		<tr>
		<th bgcolor="#EF234F"> Comida:</th>
		 <td>'.$dato['iddietass'].'</td>
        <td>'.$dato['lunes3'].'</td>
        <td>'.$dato['martes3'].'</td>
		  <td>'.$dato['miercoles3'].'</td>
			<td>'.$dato['jueves3'].'</td>
			  <td>'.$dato['viernes3'].'</td>
			  <td>'.$dato['sabado3'].'</td>
			  <td>'.$dato['domingo3'].'</td>
		
		
		</tr>
		<tr>
		<th bgcolor="#EF234F"> Colación 2:</th>
		 <td>'.$dato['iddietass'].'</td>
        <td>'.$dato['lunes4'].'</td>
        <td>'.$dato['martes4'].'</td>
		  <td>'.$dato['miercoles4'].'</td>
			<td>'.$dato['jueves4'].'</td>
			  <td>'.$dato['viernes4'].'</td>
			  <td>'.$dato['sabado4'].'</td>
			  <td>'.$dato['domingo4'].'</td>
		
	
		
		</tr>
		<tr>
		<th bgcolor="#EF234F"> Cena:</th>
		 <td>'.$dato['iddietass'].'</td>
        <td>'.$dato['lunes5'].'</td>
        <td>'.$dato['martes5'].'</td>
		  <td>'.$dato['miercoles5'].'</td>
			<td>'.$dato['jueves5'].'</td>
			  <td>'.$dato['viernes5'].'</td>
			  <td>'.$dato['sabado5'].'</td>
			  <td>'.$dato['domingo5'].'</td>
		
		
		
		</tr>
		
	
      </tr>';
      } 
$codigoHTML.='
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
$dompdf->stream("ListadoDieta.pdf");
?>
  
