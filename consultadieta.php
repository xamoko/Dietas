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
$iddieta=$_POST["iddieta"];
//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
//$password = ""; //Contraseña del usuario 
$base = "Dietas"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 
$buscar = mysqli_query($conexion, "SELECT * FROM dieta where iddieta='".$iddieta."';"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
<br>
<br>
<br>
<table border = "2" bordercolor="#2AD1EB" width = "100%"> 
<tr> 
<th>ID Dieta</th> 
<th>ID Alimentos</th> 
<th>Desayuno</th> 
<th>Colación</th> 
<th>Almuerzo</th>
<th>Colación 2</th>
<th>Cena</th>
<th>Id Localidad</th>  
<th>Enfermedad</th> 
<th>Fecha</th>
<th>Calorías</th>

</tr> 

                <br>
<?php 
while ($datos = mysqli_fetch_array($buscar)){ 
?> 
<tr> 
<td> <?=$datos["iddieta"]?> </td> 
<td> <?=$datos["idalimentos"]?> </td> 
<td> <?=$datos["desayuno"]?> </td> 
<td> <?=$datos["colacion"]?> </td> 
<td> <?=$datos["almuerzo"]?> </td>
<td> <?=$datos["colaciondos"]?> </td>
<td> <?=$datos["cena"]?> </td>
<td> <?=$datos["idlocalidad"]?> </td>
<td><?=$datos["enfermedad"]?></td>
<td><?=$datos["fecha"]?></td>
<td><?=$datos["calorias"]?></td>    
</tr> 

<?php 
} 
mysqli_free_result($buscar);
echo "<br><p>LA DIETA FUE ENCONTRADA MEDIANTE EL ID.</p></br>"; 
?> 
</table> 
<?php 
} else { 
echo "<br><p>NO SE ENCONTRÓ LA DIETA, VERIFIQUE QUE ESTÁ EN LA BASE DE DATOS O EN SU DEFECTO AGREGALA.</p></br>"; 
} 
 
?> 
</div>
<br>
<br>
<br>
<a href="opciones.php">REGRESAR AL MENÚ PRINCIPAL >> </a> <br>  Ó  <a href="consultar.php">REGRESAR A LA CONSULTA POR ID DIETAS>> </a>
   
 <br>
 <br>
 <footer>
    <div class="container">  
   

   <div id="FooterTwo" p align="center"> © 2013 Todos los derechos reservados</div>
   
   </footer>
 </div>
   </body>