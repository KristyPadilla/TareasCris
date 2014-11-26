<?php
 include_once('conexion.php');
 ?>
			
		<?php 
		
		//ponemos variables en cada uno de los post para que sea más facil usarlos en la seccion de VALUES.
		
			$n= $_POST['nombre'];
			$ap= $_POST['apellido_p'];
			$am= $_POST['apellido_m'];
			$e= $_POST['edad'];
			$c= $_POST['cuenta'];
			$t= $_POST['telefono'];
			$d= $_POST['direccion'];

mysql_query("INSERT INTO alumnos (nombre, apellido_paterno, apellido_materno, edad, cuenta, telefono, direccion)
VALUES ('$n', '$ap', '$am', $e, '$c', '$t', '$d')");
//Todas van entre comillas menos en $e porque la definimos como INT.

	header('Location:alumnos.php');
?>