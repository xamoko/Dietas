<?php
$conex=mysql_connect("localhost","root","")
	or die("No se pudo realizar la conexion");
mysql_select_db("Dietas",$conex)
	or die("Error en la Base de Datos");
if(!isset($_SESSION))
{
session_start();
}
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$consulta="select * from usuarios where usuario='".$usuario."' and contrasena='".$contrasena."';";
$resultado=mysql_query($consulta,$conex) or die(mysql_error());
$fila=mysql_num_rows($resultado);
if($fila>0)
{
$_SESSION['contrasena']= $fila['contrasena'];
$_SESSION['usuario']= $fila['usuario'];

echo '<script language = JavaScript>
 ("BIENVENIDO AL SISTEMA, ELIGE LA OPCIÓN QUE DESEAS USAR")
self.location ="administrador.html"
</script>';
}
else
{
echo '<script language = JavaScript>
alert("Usuario o Password Incorrectos.")
self.location ="sesionadministrador.html"
</script>';

}
?>