<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ejercio Clase de PHP</title>
	</head>
	<body>
		<h1>ejercio Clase de PHP</h1>
		<h5>ejercio Clase </h5>
		<?php
			//Crear un generador de lista de numeros.  
			
			define('NUMmAX',100);
			
			$num = 1;
			$txt = '';
			
			while($num <= NUMmAX){
				$txt = $txt . ' ' . $num;
				$num++; 
			};
			
			echo $txt;
			
		?>		
			
	</body>
</html>