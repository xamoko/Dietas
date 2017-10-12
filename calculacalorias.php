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
<form method="post" action="calculacalorias.php">
<center>Calcular Calorías para Hombres</center>
<p>
<p>
Peso: <input type="text" name="Peso"/>
<p>
Altura: <input type="text" name="Altura" />
<p>
Edad: <input type="text" name="Edad"
 />
 <p>
Factor Actividad: <select name="Factor">
  <option value="1.2">Sedentario</option>
  <option value="1.375">Actividad ligera</option>
  <option value="1.55">Actividad moderada</option>
  <option value="1.755">Actividad intensa</option>
  <option value="1.9">Actividad muy intensa</option>
</select>
<p>
<input type="submit" id="guarda" value="Calcular"/> 
<BR /><br /> Kcal:
<?php

if ($_POST){
$Peso=$_POST["Peso"];
$Altura=$_POST["Altura"];
$Edad=$_POST["Edad"];
$Factor=$_POST["Factor"];
$Resultado=(655+(9.6*$Peso)+(1.8*$Altura)-(4.7*$Edad)*$Factor);
echo $Resultado;


}


?>
<br />
<br />
<a href="calcularcaloriasm.php">Ir a Calcular Calorías de Mujeres >>  </a> O también puedes <a href="calculaimc.php">Ir a Calcular Índice de Masa Corporal >> </a>
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