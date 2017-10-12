<?php
include ("ingresar.php");
session_start();

if(!isset($_SESSION['contrasena']))
{
header("Location: opciones.php");
}
else
{
echo '<script language = javascript>
alert("Usuario No logueado")
self.location ="inicianuevo.html"
</script>';;	
?>

<?php

}
?>
