<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<h5>ejercio 5 </h5>
		<?php
			/*
			Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche.
			*/

			$hora = rand(0,23);
			$minutos = rand(0, 59);

			function mediaNocheEn($hora, $minutos){

				return horasASegundos($hora) + minASegundos($minutos);

			}

			function horasASegundos($hora){

				define('HMEDIANOCHE', 24);
				define('SEGenHORA', 3600);

				$horasFaltan = HMEDIANOCHE - $hora;
				$segundos = $horasFaltan * SEGenHORA;
				
				return $segundos; 

			}

			function minASegundos($minutos){

				define('MINenHORA', 60);
				define('SEGenMIN', 60);
				
				$minFaltan = MINenHORA - $minutos;
				$segundos = $minFaltan * SEGenMIN;
				
				return $segundos;
			}

			echo mediaNocheEn($hora, $minutos) . ' seg para media noche.'; 
		?>		
			
	</body>
</html>