<?php
  $titulo = "Crear alumno";
  //POST manda datos sin que el usuario se de cuenta.
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
			
		<form action="insertar_alumno.php" method="POST">
		
			<label for="nombre">nombre</label>
			<input type="text" name="nombre" value="" id="nombre"> 
		</br>
			
			<label for="apellido_paterno">Apellido paterno</label>
			<input type="text" name="apellido_p" value="" id="apellido_p"> 
		</br>
			
			<label for="apellido_materno">Apellido materno</label>
			<input type="text" name="apellido_m" value="" id="apellido_m"> 
		</br>	
			<label for="edad">Edad</label>
			<input type="text" name="edad" value="" id="edad"> 
		</br>	
			<label for="cuenta">Cuenta</label>
			<input type="text" name="cuenta" value="" id="cuenta">
		</br>	
			<label for="telefono">Teléfono</label>
			<input type="text" name="telefono" value="" id="telefono"> 
		</br>	
			<label for="direccion">Domicilio</label>
			<input type="text" name="direccion" value="" id="direccion"> 

 
			<p><input type="submit" value="Enviar variable"></p>
			
			
		</form>
	</body>
</html>