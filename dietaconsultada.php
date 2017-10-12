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
$iddietass=$_POST["iddietass"];
//Conexin a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
//$password = ""; //Contraseña del usuario 
$base = "Dietas"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 
$busca = mysqli_query($conexion, "SELECT * FROM iddieta where iddietass='".$iddietass."';"); 
if (mysqli_num_rows($busca) > 0) { 
?> 
<br>
<br>
<br>
<table border = "2" bordercolor="#2AD1EB" width = "100%"> 
<tr> 
<th bgcolor="#EF234F">Tipo</th> 
<th bgcolor="#EF234F">ID</th> 
<th bgcolor="#EF234F">Lunes</th> 
<th bgcolor="#EF234F">Martes</th> 
<th bgcolor="#EF234F">Miercoles</th> 
<th bgcolor="#EF234F">Jueves</th> 
<th bgcolor="#EF234F">Viernes</th>
<th bgcolor="#EF234F">Sabado</th>
<th bgcolor="#EF234F">Domingo</th>
</tr> 
                <br>
<?php 
while ($datos = mysqli_fetch_array($busca)){ 
?> 
<tr> 
<td bgcolor="#EF234F"> Desayuno:</td>
<td> <?=$datos["iddietass"]?> </td> 
<td><?=$datos["lunes"];?></td>
<td><?=$datos["martes"];?></td>
<td><?=$datos["miercoles"];?></td>
<td><?=$datos["jueves"];?></td>
<td><?=$datos["viernes"];?></td>
<td><?=$datos["sabado"];?></td>
<td><?=$datos["domingo"];?></td>
<tr>
<th bgcolor="#EF234F">Colación:</th>

<td> <?=$datos["iddietass"]?> </td> 
<td><?=$datos["lunes2"];?></td>
<td><?=$datos["martes2"];?></td>
<td><?=$datos["miercoles2"];?></td>
<td><?=$datos["jueves2"];?></td>
<td><?=$datos["viernes2"];?></td>
<td><?=$datos["sabado2"];?></td>
<td><?=$datos["domingo2"];?></td>
</tr>
<tr>
<th bgcolor="#EF234F">Comida:</th>
<td> <?=$datos["iddietass"]?> </td> 
<td><?=$datos["lunes3"];?></td>
<td><?=$datos["martes3"];?></td>
<td><?=$datos["miercoles3"];?></td>
<td><?=$datos["jueves3"];?></td>
<td><?=$datos["viernes3"];?></td>
<td><?=$datos["sabado3"];?></td>
<td><?=$datos["domingo3"];?></td>
</tr>
<tr>
<th bgcolor="#EF234F">Colación 2:</th>
<td> <?=$datos["iddietass"]?> </td> 
<td><?=$datos["lunes4"];?></td>
<td><?=$datos["martes4"];?></td>
<td><?=$datos["miercoles4"];?></td>
<td><?=$datos["jueves4"];?></td>
<td><?=$datos["viernes4"];?></td>
<td><?=$datos["sabado4"];?></td>
<td><?=$datos["domingo4"];?></td>
</tr>
<tr>
<th bgcolor="#EF234F">Cena:</th>
<td> <?=$datos["iddietass"]?> </td> 
<td><?=$datos["lunes5"];?></td>
<td><?=$datos["martes5"];?></td>
<td><?=$datos["miercoles5"];?></td>
<td><?=$datos["jueves5"];?></td>
<td><?=$datos["viernes5"];?></td>
<td><?=$datos["sabado5"];?></td>
<td><?=$datos["domingo5"];?></td>
</tr>

<tr bgcolor="#EF234F"></tr>

<?php 

} 
mysqli_free_result($busca);
echo "<br><p>LA DIETA FUE ENCONTRADA MEDIANTE EL ID.</p></br>"; 
?> 
</table> 
<?php 
} else { 
echo "<br><p>NO SE ENCONTRÓ LA DIETA, VERIFIQUE QUE ESTÁ EN LA BASE DE DATOS O EN SU DEFECTO AGREGALA.</p></br>"; 
} 
 
?> 
</div>
 <p>&nbsp;</p>
 <p><br>
   <br>
   <br>
   <a href="administrador.html">REGRESAR AL MENÚ PRINCIPAL >> </a> <br>  Ó  <a href="dietaconsultada.html">REGRESAR A LA CONSULTA POR ID DIETAS>> </a>
   <p>
   
   <a href="imprime.php"> Ir a imprimir en PDF >></a>
   
   <br>
   <br>
 </p>
 <div class="holder_content">
 <footer>
    <div class="container">
    <div id="FooterTwo" p align="center"> 
     <p>Elaborado por <a href="http://twitter.com/nallely192">@NallelyJuarezFeria</a> | © 2013 Todos los derechos reservados.</p>
 </div>
   </body>