<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
		<?php 
			include('funciones.php');
		?>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<h5>ejercio 4 </h5>
		<?php
			/*
			Realiza un programa que calcule la media de tres notas.
			*/

			function mediaNotas(array $notas){
				foreach($notas as $key => $nota){
					if (stringSoloNumeros($nota) == FALSE){
						return FALSE;
					}
					$notas[$key] = floatval($nota);

				}
				
				$media = sumMI($notas) / count($notas);
				return $media;

			}

			print(round(mediaNotas(array('2.1', '5.6', '6.5')),2));
			
		?>		
			
	</body>
</html>