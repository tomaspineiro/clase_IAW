<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 4 de PHP</title>
	</head>
	<body>		
		<?php 
			define('HORAmIN', 1);
			define('HORAmAX', 50);
			define('TOPE', 35);
			define('HORA', 15);
			define('HORAeXTRA', 22);
			
			$numHoras = rand(HORAmIN, HORAmAX)
			
		?>
		<?php
			 if ($numHoras >= TOPE ) {
				$salario = TOPE * HORA + ($numHoras - TOPE ) * HORAeXTRA;
			 }
			 else {
				$salario = $numHoras * HORA;
			 };
			
		?>		
		<h1>Boletin 4 de PHP</h1>
		<h5>ejercio 2 </h5>
		<p>
		Crear un programa para calcular los salarios semanales de unos empleados a los que se les paga 15 euros por hora si éstas no superan las 35 horas. Cada hora por encima de 35 se considerará extra y se paga a 22 €. Genera un número aleatorio de horas trabajadas entre 1 y 50 y devuelve el salario que se le debe pagar. 
		</p>
		<p>Este trabajador a trabajado un numero de horas totales de <?= $numHoras ?>, Por lo que cobrara 
		un salario de <?=$salario ?>  </p>
			
	</body>
</html>