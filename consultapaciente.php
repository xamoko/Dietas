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
$folio=$_POST["folio"];
//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
//$password = ""; //Contraseña del usuario 
$base = "Dietas"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 
$buscar = mysqli_query($conexion, "SELECT * FROM pacientes where folio='".$folio."';"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
<br>
<br>
<br>
<table border = "2" bordercolor="#2AD1EB" width = "100%"> 
<tr> 
<th bgcolor="#ED2D3E">Folio</th> 
<th bgcolor="#ED2D3E">Nombre</th> 
<th bgcolor="#ED2D3E">Apellido Paterno</th> 
<th bgcolor="#ED2D3E">Apellido Materno</th> 
<th bgcolor="#ED2D3E">Edad</th>
<th bgcolor="#ED2D3E">Peso</th>
<th bgcolor="#ED2D3E">Talla</th>
<th bgcolor="#ED2D3E">Enfermedad</th>   
<th bgcolor="#ED2D3E">Localidad</th>
</tr> 
<?php 
while ($datos = mysqli_fetch_array($buscar)){ 
?> 
<tr> 
<td><input type="text" size="5" name="iddoc" value="<?=$datos["folio"]?>"></td>
<td><input type="text" size="13" name="iddoc" value="<?=$datos["nombre"]?>"></td>
<td><input type="text" size="13" name="iddoc" value="<?=$datos["apepat"]?>"></td>
<td><input type="text" size="13" name="iddoc" value="<?=$datos["apemat"]?>"></td>
<td><input type="text" size="6" name="iddoc" value="<?=$datos["edad"]?>"></td>
<td><input type="text" size="10" name="iddoc" value="<?=$datos["peso"]?>"></td>
<td><input type="text" size="6" name="iddoc" value="<?=$datos["talla"]?>"></td>
<td><input type="text" size="13" name="iddoc" value="<?=$datos["enfermedad"]?>"></td>
<td><input type="text" size="15" name="iddoc" value="<?=$datos["localidad"]?>"></td>

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
echo "NO SE ENCONTRARON DATOS DEL PACIENTE, VERIFIQUE QUE EL FOLIO ES CORRECTO E INTENTELO DE NUEVO."; 
} 
 
?> 
</div>
<br>
<br>
<br>
<center><button class="button"><a href="imprimirpaciente.php">Imprimir Datos del Paciente &raquo;</a></button><button class="button"><a href="consultapaciente.php">Consultar Paciente &raquo;</a></button><button class="button"><a href="actualizapaciente.php">Actualizar Datos del Paciente &raquo;</a></button> <button class="button"><a href="eliminapaciente.php">Eliminar Paciente &raquo;</a></button></center>
   
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
  