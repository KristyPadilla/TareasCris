<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "hola Mundo";

 
 //definimos una variable llamada licenciaturas que sea igual a mysql_query para poder seleccionar y traernos todo acerca de nuestra base de datos que es la de carreras.
 $licenciaturas = mysql_query("SELECT * FROM licenciaturas1");
 //$alumnos = mysql_query("SELECT * FROM alumnos");

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Licenciaturas</title>
		<!--echo muestra lo almacenado en una variable-->
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>
		<?php "<h2> subtitulo </h2>"
			//meter html dentro de php
		?>
		
		<?php 
			
			include_once('menu.php');
			include_once('variables.php');
			//mientras tengas datos en cada una de la licenciatura, muestrame parrafo que contenga el nombre de la licenciatura.
			while($row = mysql_fetch_array($licenciaturas)){
				echo "<p>".$row['nombre']."</p>";
			}
			
			//while($rows2 = mysql_fetch_array($alumnos)){
				//echo "<h2>".$rows2['nombre']."</h2>";
			//}
			?>	
			
			<!-- include once sirve enlaza archivos.-->	
	</body>
</html>