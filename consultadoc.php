<!doctype html>  
   <head>
   <meta charset="UTF-8">
   <title>Sistemas de Dietas</title>
   <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
   </head>
   <body>
   <div id="container">
   <header>
<img src="images/tabasco.jpg" width="339" height="84" alt="logo"/></a>    
   <nav>
   <ul>
   <li><a href="index.html" class="current">Inicio</a></li>
   <li><a href="inicianuevo.html">Salir del Sistema</a></li>
     </ul>
   </nav>
   </header>  
   </header>
  

   <br>
   <br>
 <div id="formulario">
      <br>
   <br>
   <br>
   <br>
   
<?php 
$iddoc=$_POST["iddoc"];
//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
//$password = ""; //Contraseña del usuario 
$base = "Dietas"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 
$buscar = mysqli_query($conexion, "SELECT * FROM registrar where iddoc='".$iddoc."';"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
<br>
<br>
<br>
<table border = "2" bordercolor="#2AD1EB" width = "100%"> 
<tr> 
<th>ID Doctor</th> 
<th>Nombre</th> 
<th>Apellidos</th> 
<th>Usuario</th> 
<th>Puesto</th>
<th>Región</th>
<th>Teléfono</th>
<th>E-mail</th>   

</tr> 
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
/*<td> <?=$datos["nombre"]?> </td> 
<td> <?=$datos["apellidos"]?> </td> 
<td> <?=$datos["usuario"]?> </td> 
<td> <?=$datos["puesto"]?> </td>
<td> <?=$datos["region"]?> </td>
<td> <?=$datos["telefono"]?> </td>
<td> <?=$datos["email"]?> </td> */  

} 
mysqli_free_result($buscar); 
?> 
</table> 
<?php 
} else { 
echo "NO SE ENCONTRARON DATOS DEL DOCTOR, VERIFIQUE QUE EL ID ES CORRECTO E INTENTELO DE NUEVO."; 
} 
 
?> 
</div>
<br>
<br>
<br>
<a href="administrador.html">REGRESAR AL MENÚ PRINCIPAL >> </a> <br>  Ó  <a href="consultadoc.html">REGRESAR A LA CONSULTA POR ID >> </a>
   
 <br>
 <br>
 <div class="holder_content">
 <footer>
    <div class="container">
    <div id="FooterTwo" p align="center"> 
     <p>Elaborado por <a href="http://twitter.com/nallely192">@NallelyJuarezFeria</a> | © 2013 Todos los derechos reservados.</p>
 </div>
   </footer>
 </div>
   </body>
  