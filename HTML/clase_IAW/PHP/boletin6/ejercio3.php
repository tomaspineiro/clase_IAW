<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
		<?php include('funciones.php'); ?>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<h5>ejercio 3 </h5>

		<?php
			/*
			Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. Se utilizaran los  tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Solo se tienen en cuanto las horas, los minutos no se deben introducir por teclado.
			*/
			function montoDia($hora){

				define('DIA', 'Buenos días. ');
				define('TARDE', 'Buenas tardes. ');
				define('NOCHE', 'Buenas noches. ');

				if ((6 <= $hora) and ($hora < 13 )){
					return DIA;
				} 
				
				if ((13 <= $hora) and ($hora < 21)){
					return TARDE;
				} 
				
				if (((21 <= $hora) and ($hora <=24 )) or ((0 <= $hora) and ($hora < 6 ))){
					return NOCHE;
				} 
			}

			$h = rand(0,24);
			echo '</br>';
			echo $h;
			echo '</br>';
			echo montoDia($h);
		?>		
			
	</body>
</html>