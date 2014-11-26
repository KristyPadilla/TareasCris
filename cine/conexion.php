<?php
		$conexion = mysql_connect("localhost","root","root");
		
		if (!$conexion){
			die("No se pudo conectar:" . mysql_error());
		}
		//Conexion a la base de datos de carreras y en el query conectamos con las tablas
		// ! = distinto de / sino se da
		// mysql_connect, mysql_select_db, mysql_set_charset... son instrucciones de php.
		
		$bd = mysql_select_db('cine', $conexion);
		mysql_set_charset('utf-8', $conexion);
		mysql_query("SET NAMES 'UTF8'");
		
		//echo 'Conectado'; (Aquí nos dice si esta conectado o no, pero no es necesario ponerlo para que no aparezca visible en la pag.)
		mysql_set_charset('utf-8', $conexion);
?>