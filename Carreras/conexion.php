<?php
		$conexion = mysql_connect("localhost","root","root");
		
		if (!$conexion){
			die("No se pudo conectar:" . mysql_error());
		}
		//Conexion a la base de datos de carreras y en el query conectamos con las tablas
		$bd = mysql_select_db('carreras', $conexion);
	
		
		//echo 'Conectado'; (Aquí nos dice si esta conectado o no, pero no es necesario ponerlo para que no aparezca visible en la pag.)
		mysql_set_charset('utf-8', $conexion);
?>
