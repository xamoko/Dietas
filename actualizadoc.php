<!doctype html>  
   <head>
   <meta charset="UTF-8">
   <title>Sistemas de Dietas</title>
   <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
   <link rel="stylesheet" type="text/css" href="css/registro.css"/>
   
   </head>
   <body>
   <div id="container">
   <header>
<img src="images/tabasco.jpg" width="339" height="84" alt="logo"/></a></p>
   <nav>
     <ul>
   <li><a href="index.html" class="current">Inicio</a></li>
   <li><a href="inicianuevo.html">Salir del sistema</a></li>
     </ul>
 </nav>
   </header>
      <?php
include("conecta.php");
session_start();
?>
   <div class="holder_content">
  <p>
    <form name="form1" method="post" action="actualiza.php">
      <table width="400" border="10" align="left">
  <td colspan="2" align="center"><div class="title"><p>Actualizar sus Datos<p> </div></td>
  </tr>
  <tr>
    <td>ID Doc</td>
    <td><label>
      <input name="iddoc" type="text" id="user"><br></br>
    </td>
    </tr>
  
  <tr>
    <td>Nuevo Usuario</td>
    <td><label>
      <input name="usuario" type="text" id="user"><br></br>
    </td>
    </tr>
    <tr>
    <td>Nueva contraseña</td>
    <td><label>
      <input name="contrasena" type="password" id="user"><br></br>
    </td>
    </tr>
    <tr>
    <td>Nuevo Teléfono</td>
    <td><label>
      <input name="telefono" type="text" id="user"><br></br>
    </td>
    </tr>
    <tr>
    <td>E-mail</td>
    <td><label>
      <input name="email" type="text" id="user"><br></br>
    </td>
    </tr>
    <td colspan="2" align="center">   <input type="submit" id="registrar" value="Actualizar"></td>
    <div>
    <p>
    <p>
    <a href="opciones.php">REGRESAR AL MENÚ PRINCIPAL >> 
    </a>
    <p>
    </div>
      </table>
   </form>
   
<p>
<p>
<br>
   <div class="holder_content">
 <footer>
    <div class="container">
    <div id="FooterTwo" p align="center"> 
    <p>Elaborado por <a href="http://twitter.com/nallely192">@NayeliJuarezFeria</a> | © 2013 Todos los derechos reservados.</p>
 </div></div>
  </div>
   </footer>
   </body>
</html>
