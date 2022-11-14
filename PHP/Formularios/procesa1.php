<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Procesado 1</title>
	</head>
	<body>
		<h1>Boletin  de PHP</h1>
		<h5>ejercio  </h5>
		
		<p>
			<?php			
				print_r($_GET);
			?>	
		</p>
		
		<p>
			<?php			
				print_r($_REQUEST);
			?>	
		</p>
		
		
		<p>Nombre: <?php echo $_REQUEST['nombre']; ?> </p>
		<p>Password: <?php echo $_REQUEST['password']; ?></p>
		<p>Edad: <?php echo $_REQUEST['edad']; ?></p>
		<p>Aficiones:
			<?php 
				foreach ($_REQUEST['aficiones'] as $i ){
					echo $i . ' ';
				}
			?>
		</p>

		<p></p>
		<p></p>
			
	</body>
</html>