<?php
session_start();
if($_SESSION['usuario']['contrasena'])

{
session_destroy();
echo '<script language = javascript>
alert("Has cerrado Sesion de manera exiotosa")
self.location ="inicianuevo.html"
</script>';

}
else
{
echo '<script language = javascript>
alert("No ha iniciado una sesion")
self.location ="inicianuevo.html"
</script>';
}
?>