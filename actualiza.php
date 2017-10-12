<?php
	  $conexion=mysql_connect("localhost","root") or die ('Existe un error de conexcion con la BD' . mysql_error());

mysql_select_db ("Dietas",$conexion);
       
	   $iddoc = $_POST["iddoc"];

	  $usuario = $_POST["usuario"];

	  $contrasena = $_POST["contrasena"];

	  $telefono = $_POST["telefono"];

	  $email = $_POST["email"];
	  

      $resultado =  mysql_query("update registrar set usuario='$usuario', contrasena='$contrasena', telefono='$telefono',  email='$email' where iddoc='$iddoc'",$conexion);

     // $afectados = mysql_affected_rows();

    if($resultado)

{

echo "<script> alert('Se han actualizado los datos correctamente.');</script>";

echo '<script> self.location="actualizadoc.php";</script>';

}

else

{

	

echo "<script> alert('Error al actualizar los datos.');</script>";

echo '<script> self.location="actualizadoc.php";</script>';



}

?>