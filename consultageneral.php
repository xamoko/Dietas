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
<li><a href="inicianuevo.html"> Salir del Sistema</a></li>
</ul>
</nav>
<br />
<br />
<br />

</header>
<br />
<div id="formulario">

<br />
<br />
<br />
<a href="administrador.html">REGRESAR AL MENÚ PRINCIPAL >></a>
<p><h5> Bienvenido a la consulta General de los Doctores Registrados en la base de datos.</h5></p>
<form method="post" action="consultageneral.php">
<fieldset>
<div class="medidas">
<p>Da click aquí para hacer la consulta general de los Doctores registrados en la base de datos.</p>
<input type="submit" id="login" value="Consultar Doctores" />
<?php 
//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
$base = "Dietas"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 
$buscar = mysqli_query($conexion, "SELECT * FROM registrar"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
</div>
</fieldset>
</form>
<table border = "2" bordercolor="#2AD1EB" width = "100%"> 
<tr> 
<th bgcolor="#EF234F">ID Doctor</th> 
<th bgcolor="#EF234F">Nombre</th> 
<th bgcolor="#EF234F">Apellidos</th> 
<th bgcolor="#EF234F">Usuario</th> 
<th bgcolor="#EF234F">Puesto</th>
<th bgcolor="#EF234F">Región</th>
<th bgcolor="#EF234F">Teléfono</th>
<th bgcolor="#EF234F">E-mail</th>  

</tr> 

                <br />
<?php 
while ($datos = mysqli_fetch_array($buscar)){ 
?> 
<tr> 
<td><input type="text" size="8" name="iddoc" value="<?=$datos["iddoc"]?>"></td>
<td><input type="text" size="13" name="iddoc" value="<?=$datos["nombre"]?>"></td>
<td><input type="text" size="15" name="iddoc" value="<?=$datos["apellidos"]?>"></td>
<td><input type="text" size="9" name="iddoc" value="<?=$datos["usuario"]?>"></td>
<td><input type="text" size="15" name="iddoc" value="<?=$datos["puesto"]?>"></td>
<td><input type="text" size="15" name="iddoc" value="<?=$datos["region"]?>"></td>
<td><input type="text" size="10" name="iddoc" value="<?=$datos["telefono"]?>"></td>
<td><input type="text" size="20" name="iddoc" value="<?=$datos["email"]?>"></td> 
</tr> 

<?php 
} 
mysqli_free_result($buscar);
echo "<br><p>Lista de Doctores encontrados en la base de datos.</p></br>"; 
?> 
</table> 
<?php 
} else { 
echo "<br><p>NO SE ENCONTRÓ NINGUN DOCTOR.</p></br>"; 
} 
 
?> 
<br />
<br />
</div>
</fieldset>
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
</html>