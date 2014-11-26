<?php

 // Es importante primero extablecer la conexion para despues hacer un query.
 include_once('conexion.php');
  $titulo = "alumnos";

 //definimos una variable llamada licenciaturas que sea igual a mysql_query para poder seleccionar y traernos todo acerca de nuestra base de datos que es la de carreras.
 $alumnos = mysql_query("SELECT * FROM alumnos");
 //$alumnos = mysql_query("SELECT * FROM alumnos");

?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<!--echo muestra lo almacenado en una variable-->
	</head>
	<body>
		<h1><?php echo $titulo; ?> </h1>	
		<?php include_once('menu.php');?>
			
			<table>
			<tbody>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Cuenta</th>
						<th>Eliminar</th>
					</tr>
			
			<?php
			//mientras tengas datos en cada una de la licenciatura, muestrame parrafo que contenga el nombre de la licenciatura.
			while($row = mysql_fetch_array($alumnos)){
				echo"<tr>";
				echo"<td>" .$row['id']." "."</td>";
				echo"<td> <a href='detalle_alumno.php?id=".$row['id']."'>".$row['nombre']." ".$row['apellido_paterno']." ".$row['apellido_materno']."</a></td>";
				
				echo"<td>" .$row['cuenta']."</td>";
				echo"<td><a href='eliminar_alumno.php?id=" .$row['id']."'>Eliminar</a></td>";				
				
				echo"</tr>";
			}
	
			
			//while($rows2 = mysql_fetch_array($alumnos)){
				//echo "<h2>".$rows2['nombre']."</h2>";
			//}
			?>	
		</tr>
		</tbody>
		</table>
			<!-- include once sirve para verificar o lo incluye una sola vez, si ya esta cargado ya no lo carga de nuevo.-->	
	</body>
</html>