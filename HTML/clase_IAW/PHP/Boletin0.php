<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 0 de PHP</title>
	</head>
	<body>
		<h1>Boletin 0 de PHP</h1>
		<h5>ejercio 1 </h5>
		<?php
			//Asignar a 2 variables 2 valores numéricos y mostrar su suma, resta, multiplicación ydivisión.
			 
			# Declaramos los valosres de las varibles 
			$num1 = 6;
			$num2 = 4;
			
			# realizamos las operaciones que nos solicitas
			$suma = $num1 + $num2;
			echo 'Suma ', $suma, '</br>';
			$resta = $num1 - $num2;
			echo "Resta ", $resta, '</br>';
			$division = $num1 / $num2;
			echo "Dibision ", $division, '</br>';
			$multi = $num1 * $num2;
			echo "Multiplicacion ", $multi, '</br>';
			
			
		?>
		<h5>ejercio 2</h5>
		<?php
			/* Convertir Grados Celsius a Grados Fahrenheit. Fórmula: T(°F) = T(°C) × 9/5 + 32
			Fº = B*Cº + A
			*/
			define('B', 9/5);
			define('A', 32);
			$celsius = 45;
			$fahrenheit = $celsius * B + A;
			echo 'Fahrenheit ', $fahrenheit,'º';			
		?>
		<h5>ejercio 3</h5>
		<?php
			// Sacar la hipotenusa de un triángulo rectángulo, pidiendo al usuario el valor de los 2 catetos.
			//const MIN = 1;
			//const MAX = 90;
			$cateto1 = rand(1, 90);
			$cateto2 = rand(1, 90);
			$hipotenusa = sqrt($cateto1**2 + $cateto2**2);
			echo 'Hipotenusa ', $hipotenusa,', Catetos: ', $cateto1,', ',$cateto2;
		?>
		
		<h5>ejercio 4</h5>
		<?php
			//Hacer un Programa que calcule longitudes de Circunferencia.
			
			$radio = rand(1, 90);
			$lonitud = 2 * pi() * $radio;
			echo 'Longitude de la Circunferencia: ', $lonitud,', redio de la circunfercia: ',$radio;
		?>
		<h5>ejercio 5</h5>
		<?php
			//Hacer un Programa que calcule áreas de trapecios.
			
			$altura = rand(1, 90);
			$base1 = rand(1, 90);
			$base2 = rand(1, 90);
			$areaTrapecios = (($base1 + $base2 ) /  2 ) * $altura;
			echo 'El area es ', $areaTrapecios,' las medidad del trapecio son altura: ', $altura,', bases: ',$base1,', ',$base2;
		?>
		<h5>ejercio 6</h5>
		<?php
			// Calcule la media aritmética de 3 números cualesquiera.
			
			$num3 = rand(1,90);
			$num4 = rand(1,90);
			$num5 = rand(1,90);
			$media = ( $num3 + $num4 + $num5) / 3;
			echo 'la media de los numeros ', $num3,' ,', $num4,' y ', $num5, ' es ', $media;
		?>
		<h5>ejercio 7</h5>
		<?php
			//Una tienda ofrece un descuento del 15% sobre el total de la compra y un cliente desea saber cuánto deberá pagar finalmente por su compra.
			define('DESCUENTO',  0.15);
			$descuento = 1 - DESCUENTO;
			#$valorCompra = 100;
			$valorCompra = rand(1,900);
			$costeCompra = $valorCompra * $descuento;
			echo 'valor de la compra total ', $valorCompra, ', valor de la compra que tiene que pagar el cliente ', $costeCompra;
		?>
		<h5>ejercio 8</h5>
		<?php
			// Dadas las horas trabajadas de una persona y el valor por hora. Calcular su salario e imprimirlo
			define('HORAcOSTE', 7.5);
			#$horasTrabajadas = 10;
			$horasTrabajadas = rand(1, 40);
			$salario = HORAcOSTE * $horasTrabajadas;
			echo 'El trabajador un total de ', $horasTrabajadas,', con un coste por hora de ', HORAcOSTE, ', por lo que afinal de mes cobraria ',$salario;
			
		?>
		
		<h5>ejercio 9</h5>
		<?php
			// Calcular el nuevo salario de un obrero si obtuvo un incremento del 25% sobre su salario anterior.
			define('INCREMENTO', 0.25);
			$salarioAntiguo = 1000;
			$salarioNuevo = $salarioAntiguo * ( 1 - INCREMENTO );
			
			echo'El salaro antiguao es ', $salarioAntiguo, ' el nuevo salario es ', $salarioNuevo;
		?>
		<h5>ejercio 10</h5>
		<?php
			/*
				Un alumno desea saber cuál será su calificación final en la materia de
				Algoritmos. Dicha calificación se compone de los siguientes porcentajes:
					• 55% del promedio de sus tres calificaciones parciales.
					• 30% de la calificación del examen final.
					• 15% de la calificación de un trabajo final.
			*/
			define('PARCIALES', 0.55);
			define('EXAMEN', 0.30);
			define('TRABAJO', 0.15);
			
			$parcial1 = rand(0, 10);
			$parcial2 = rand(0, 10);
			$parcial3 = rand(0, 10);
			$examen = rand(0,10);
			$trabajo = rand(0,10);
			
			$mediaParciaes = ($parcial1 + $parcial2 + $parcial3) / 3;
			$notaFinal = PARCIALES * $mediaParciaes + EXAMEN * $examen + TRABAJO * $trabajo;
			
			echo 'Parciales: ', $parcial1,', ',$parcial2, ' y ', $parcial3, '</br>', 'Examen: ', $examen,'</br>', 'Trabajo: ', $trabajo, '</br>' ,'Nota Final: ', $notaFinal;
			
			
		?>
		<h5>ejercio 11</h5>
		<?php
			//Calcular la cantidad de segundos que están incluidos en el número de horas, minutos y segundos ingresados por el usuario.
			$horas = rand(0,24);
			$min = rand(0,60);
			$seg = rand(0,60);
			
			$segTotales = $horas * 3600 + $min * 60 + $seg;
			
			echo 'Hora: ', $horas, '</br>', 'Minutos: ', $min, '</br>','Segundos: ', $seg,'</br>','Segundos totales: ', $segTotales;
			
			
		?>
		
		<h5>ejercio 12</h5>
		<?php
			// Un maestro desea saber que porcentaje de hombres y que porcentaje de mujeres hay en un grupo de estudiantes.
			$chicos = rand(0,50);
			$chicas = rand(0,50);
			
			$porcentajeChicos = $chicos / ($chicos + $chicas);
			$porcentajeChicas = $chicas / ($chicos + $chicas);
			
			echo 'chicos: ', $chicos, '</br>', 'chicas: ', $chicas, '</br>','Porcentaje Chicas: ', $porcentajeChicas,'</br>','Porcentaje Chicas: ', $porcentajeChicas;
			
		?>
		
		<h5>ejercio 13</h5>
		<?php
			// Volumen y Área de un Cubo
			$lado = rand(1,55);
			
			$areaCubo = $lado ** 2;
			$volumenCubo = $lado ** 3;
			
			echo 'Lado: ', $lado, '</br>', 'Area: ', $areaCubo, '</br>','Volumen: ', $volumenCubo;
			
		?>
		<h5>ejercio 14</h5>
		<?php
			//Tres personas deciden invertir su dinero para fundar un empresa. Cada una de ellas invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte con respecto a la cantidad total invertida.
			
			$fundador1 = rand(0,50);
			$fundador2 = rand(0,50);
			$fundador3 = rand(0,50);
			
			$porcentajeFudador1 = $fundador1 / ($fundador1 + $fundador2 + $fundador3);
			$porcentajeFudador2 = $fundador2 / ($fundador1 + $fundador2 + $fundador3);
			$porcentajeFudador3 = $fundador3 / ($fundador1 + $fundador2 + $fundador3);
			
			echo 'Fundudaor 1: ', $fundador1, '</br>', 'Fundudaor 2 ', $fundador2, '</br>', 'Fundudaor 3: ', $fundador3, '</br>', 'Fundudaor 1 porcentaje: ',  $porcentajeFudador1, '</br>', 'Fundudaor 2 porcentaje: ',  $porcentajeFudador2, '</br>', 'Fundudaor 3 porcentaje: ',  $porcentajeFudador3;
			
			
		
		?>
		<h5>ejercio 15</h5>
		<?php
			// Volumen y Área de una Esfera.
			$radioEsfera = rand(0,50);

			$areaEsfera = 4 * pi() * $radioEsfera ** 2;
			$volumenEsfera = 4/3 * pi() * $radioEsfera ** 3;
					
			echo 'Radio: ', $radioEsfera, '</br>','Area: ', $areaEsfera, '</br>', 'Volumen: ', $volumenEsfera;
		?>
		
		
	</body>
</html>
