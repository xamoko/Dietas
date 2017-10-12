<?php

	$conexion=mysql_connect ("localhost","root","") or die ('Existe un error de conexcion con la BD' . mysql_error());

mysql_select_db ("Dietas");

	 

	 $folio=$_POST[folio]; 

	 

	  $sql="DELETE FROM  pacientes WHERE folio='$folio';";

	  $resultado=mysql_query($sql,$conexion);

	  

	  $status=mysql_affected_rows($conexion);

	  if($status>0)

	   {
 
 
		echo "<script> alert('El Paciente se ha eliminado de la Base de Datos.');</script>";

	            echo '<script> self.location="eliminapaciente.html";</script>';

	   }

		else

		{

                echo "<script>alert('El Paciente No fue Eliminado');</script>";

	            echo '<script> self.location="eliminapaciente.html";</script>';		
				}

	
			 

	   

		
	

	?>