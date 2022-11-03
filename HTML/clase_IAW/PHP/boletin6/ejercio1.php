<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
		<?php include('funciones.php'); ?>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<h5>ejercio 1 </h5>
		<?php
			/*
			Pide al usuario que introduzca los números de su DNI y calcula su letra
			sabiendo que la letra se calcula. Tomamos el número completo de hasta 8
			cifras de nuestro DNI, lo dividimos entre 23 y nos quedamos con el resto de
			dicha división, o dicho de otro modo, calculamos el módulo 23 del DNI
			*/
			$dni = '77460918T';
			/*
			$letra = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E',);
			print(strlen($dni));
			print($dni[0,7]);
			print(in_array($dni[8],$letra));
			*/
			function stringAint($string) {
				if (is_string($string) == false) {
					return 'el valor inroducido no es un string.';
				}
				$n = 0; 
				for ($i=0; $i < strlen($string) ; $i++) { 
					
					switch ($string[$i]) {
						case 0:
							$n = $n . 0;
							break;
						case 1:
							$n .=  1;
							break;
						case 2:
							$n = $n . 2;
							break;
						case 3:
							$n = $n . 3;
							break;
						case 4:
							$n = $n . 4;
							break;
						case 5:
							$n = $n . 5;
							break;
						case 6:
							$n = $n . 6;
							break;
						case 7:
							$n = $n . 7;
							break;
						case 8:
							$n = $n . 8;
							break;
						case 9:
							$n = $n . 9;
							break;
						default:
							return 'contien una letra';
					}
				}
				return $n;
			}

			function dniCorrecto($dni) {
				$letra = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E',);
				if ((strlen($dni) != 9)	or (in_array($dni[8],$letra) == 0)) {
					return false;
				}
				$dniCorto = cortarDNI($dni);
				$dniNum = stringAint($dniCorto);
				$comprobador = $dniNum % 23; 
				if ($letra[$comprobador] == $dni[8]){
					return true;
				
				} else {
					return false;
				}
			}

			function cortarDNI($dni){
				$nDNI = '';
				for ($i=0; $i < 8; $i++) { 
					$nDNI .=$dni[$i];
				}
				return $nDNI;
			}

			echo dniCorrecto($dni); 	
			
			/*
			$numStrin = '12345';

			$num = stringAint($numStrin);
			echo $num;
			echo is_int($num);
			echo ' ' . ($num / 3);
			*/	 
		
		?>		
			
	</body>
</html>