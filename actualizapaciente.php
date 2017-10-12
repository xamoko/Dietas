<?php
	  $conecta=mysql_connect("localhost","root","") or die ('Existe un error de conexcion con la BD' . mysql_error());

mysql_select_db ("Dietas",$conecta);
       
	   $folio = $_POST["folio"];
	   
	  $edad = $_POST["edad"];
	  
	  $peso = $_POST["peso"];
	  

      $resulta =  mysql_query("update pacientes set edad='$edad', peso='$peso' where folio='$folio'",$conecta);

     // $afectados = mysql_affected_rows();

    if($resulta)

{

echo "<script> alert('Los datos del paciente se han actualizado correctamente.');</script>";

echo '<script> self.location="actualizapaciente.html";</script>';

}

else

{

	

echo "<script> alert('Error al actualizar los datos.');</script>";

echo '<script> self.location="actualizapaciente.html";</script>';



}

?>