<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema de Dietas</title>
<link rel= "stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
<div id="container">
<header>
 <img src="images/tabasco.jpg" width="339" height="84" alt="logo"/> </a>
<nav>
<ul>
<li><a href="index.html" class="current"> Inicio</a></li>
<li><a href="desconectar.php"> Salir del Sistema</a></li>
</ul>
</nav>
</header>
<fieldset>
<center>Inferfaz Calcular las calorías para hombres y mujeres.</center>
</fieldset>
<p>
<fieldset>
<p>
<br />
<form method="post" action="calculaimc.php">
<center>Calcular el Índice de Masa Corporal</center>
<p>
<p>
Peso: <input type="text" name="Peso"/>
<p>
Estatura: <input type="text" name="Altura" />
<p>
<input type="submit" id="guarda" value="Calcular IMC"/> 
<BR /><br /> Índice de Masa Corporal es:
<?php

if ($_POST){
$Peso=$_POST["Peso"];
$Altura=$_POST["Altura"];

$Resultado=(($Peso/($Altura*$Altura)));
echo $Resultado;

}


?>
<p>
  <br />
  <br />
  <p> Tabla Comparativa de Índice de Masa Corporal</p>
<table bordercolor="#3399FF"align="center" width="600" border="3">
  <tr>
    <th scope="col" bgcolor="#ED2D3E">Índice de Masa Corporal (IMC)</th>
    <th scope="col" align="center" bgcolor="#ED2D3E">Clasificación</th>
  </tr>
  <tr>
    <th scope="row">Menor a 18</th>
    <td>Peso bajo, Necesario valorar signos de desnutrición.</td>
  </tr>
  <tr>
    <th scope="row">18 a 24.9</th>
    <td>Normal.</td>
  </tr>
  <tr>
    <th scope="row">25 a 26.9</th>
    <td>Sobrepeso.</td>
  </tr>
  <tr>
    <th scope="row">Mayor a 27</th>
    <td>Obesidad.</td>
  </tr>
  <tr>
    <th scope="row">27 a 29.9</th>
    <td>Obesidad grado I. Riesgo relativo alto para desarrollar enfermedades cardiovasculares.</td>
  </tr>
  <tr>
    <th scope="row">30 a 39.9</th>
    <td>Obesidad grado II. Riesgo relativo muy alto para el desarrollo de enfermedades cardiovasculares.</td>
  </tr>
  <tr>
    <th scope="row">Mayor a 40.</th>
    <td>Obesidad grado III Extrema o Mórbida. Riesgo relativo extremadamente alto para el desarrollo de enfermedades cardiovasculares.</td>
  </tr>
</table>

<br />
<center><a href="calcularcaloriasm.php">Ir a Calcular Calorías de Mujeres >>  </a> O también puedes <a href="calculacalorias.php">Ir a Calcular Calorías de Hombres >> </a></center>
<BR />
<a href="opciones.php">REGRESAR AL SISTEMA >>  </a>
</fieldset>
<BR />
</form>
<div class="holder_content">
 <footer>
    <div class="container">
    <div id="FooterTwo" p align="center"> 
     <p>Elaborado por <a href="http://twitter.com/nallely192">@NallelyJuarezFeria</a> | © 2013 Todos los derechos reservados.</p>
 </div>
</div>
</footer>
</form>
</div>
</body>
</html>

</body>