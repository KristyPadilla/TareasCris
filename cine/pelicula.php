<?php 
	include_once("variable.php");
	//declaramos la variable id que sea igual a $GET para que envie los datos.
	$id= $_GET['id'];
	//declaramos la variable pelicula en donde se traerá los datos de la tabla y de la tabla solo agarra el id donde es = a $id para que sea dinamico y no determinar solo uno manualmente.
	$pelicula = mysql_query("SELECT * FROM peliculas WHERE id=$id");
	while($fila = mysql_fetch_array($pelicula)){
			$titulo = $fila['titulo'];
			$fecha = $fila['fecha_estreno'];
			$sinopsis = $fila['sinopsis'];
			$duracion = $fila['duracion'];
			$poster = $fila['poster'];
		}
		$titulo_pagina= $titulo;
	
?>

<!DOCTYPE, html>
<html>
	<head>
		<?php include_once("head.php")?>
	</head>
	<body>
		<header>
			<h1><?php echo $titulo_sitio; ?></h1>
			<?php include_once("menu.php"); ?>
		</header>
		<h1><?php echo $titulo;?></h1>
		<p><?php echo $sinopsis;?></p>
		<img src="img/peliculas/posters/<?php echo $poster;?>" />
	</body>
</html>