<!doctype html>  
   <head>
   <meta charset="UTF-8">
   <title>Sistemas de Dietas</title>
   <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
     <link rel="stylesheet" type="text/css" href="css/default.css"/>
     
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
   
<?php 
//Conexión a la base de datos 
$servidor = "localhost"; //Nombre del servidor 
$usuario = "root"; //Nombre de usuario en tu servidor 
//$password = ""; //Contraseña del usuario 
$base = "Dietas"; //Nombre de la BD 
$conexion = mysqli_connect($servidor, $usuario) or die("Error al conectarse al servidor"); 
mysqli_select_db($conexion, $base) or die("Error al conectarse a la base de datos"); 
$folio=$_POST["folio"];
$buscar = mysqli_query($conexion, "SELECT * FROM pacientes where folio='".$folio."';"); 
if (mysqli_num_rows($buscar) > 0) { 
?> 
<br>
<br>
<br>
<?php 
while ($datos = mysqli_fetch_array($buscar)){ 
?> 
<form method="post" action="consultapaciente1.php" class="register">
 <fieldset class="row1">
                <legend>Datos</legend>
                </fieldset>
                <p>
                    <label> Folio: </label>
                    <input name="folio" type="text" value= "<?=$datos["folio"]?>"/>
                 
                     <label> Nombre:</label>
                    <input name="nombre" type="text" value= "<?=$datos["nombre"]?>"/>
         
     
                     <label> Apellido Paterno: </label>
                    <input name="apepat" type="text" value= "<?=$datos["apepat"]?>"/>
                 <p>
                    <label> Apellido Materno: </label>
                    <input name="apemat" type="text" value= "<?=$datos["apemat"]?>"/>
                 
                     <label> Edad:</label>
                    <input name="edad" type="text" value= "<?=$datos["edad"]?>"/>
                  
                     <label> Peso :</label>
                    <input name="peso" type="text" value= "<?=$datos["peso"]?>"/>
                <p>
                     <label> Talla:</label>
                    <input name="talla" type="text" value= "<?=$datos["talla"]?>"/>
                    <label>Enfermedad:</label>
                    <input  name="enfermedad" type="text" value= "<?=$datos["enfermedad"]?>"/>
                     <label>Localidad:</label>
                    <input  name="localidad" type="text"value= "<?=$datos["localidad"]?>"/>
                    </fieldset>
                    
                    <br>
                    <br>
                    <fieldset class="row4">
         
                <legend>¿Ingresaste los datos correctamente?</legend>
            </fieldset>
                    <div><button class="button">Consultar</button></div>
                      <div><button class="button"><a href="imprime.php">Imprimir Dieta</a></button></div>
                      <center><button class="button"><a href="consultapaciente1.php"><< Regresar al menu</a></button> 
                 
<?php 

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
  <center><button class="button"><a href="consultapaciente1.php"><< Regresar al menu</a></button> 
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
  