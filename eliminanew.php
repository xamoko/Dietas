<?php

	$conexion=mysql_connect ("localhost","root","") or die ('Existe un error de conexcion con la BD' . mysql_error());

mysql_select_db ("Dietas");

	 

	 $iddoc=$_POST[iddoc]; 

	 

	  $sql="DELETE FROM  registrar WHERE iddoc='$iddoc';";

	  $resultado=mysql_query($sql,$conexion);

	  

	  $status=mysql_affected_rows($conexion);

	  if($status>0)

	   {
 
 
		echo "<script> alert('El Doctor se ha Eliminado o no Existe en la Base de Datos.');</script>";

	            echo '<script> self.location="eliminadoc.html";</script>';

	   }

		else

		{

                echo "<script>alert('El Registro No fue Eliminado');</script>";

	            echo '<script> self.location="eliminadoc.html";</script>';		
				}

	
			 

	   

		
	

	?>