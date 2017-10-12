<?php
function conectarse()
{
	if(!$link=mysql_connect("localhost","root",""))
		{
			echo "Error conectando al servidor de MYSQL";
			exit();
		}
	if(!mysql_select_db("Dietas",$link))
		{
			echo "Error seleccionando la Base de Datos";
			exit();
		}
	return $link;
}
?>