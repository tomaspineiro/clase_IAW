<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio 5  </h5>
		<?php
			//Escriba un comparador de tres números indicando si los tres números son iguales, si hay dos iguales o si los tres son distintos.
			define('NUMmIN', 1);
			define('NUMmAX',100);
						
			$num1 = rand(NUMmIN, NUMmAX);
			$num2 = rand(NUMmIN, NUMmAX);
			$num3 = rand(NUMmIN, NUMmAX);
			
			echo 'los tres números son: ', $num1, ', ',$num2, ', ', $num3,'</br></br>';
			
			if(($num1 == $num2) and ($num2 == $num3)){
				echo 'los tres números son iguales; ', $num1, ', ',$num2, ', ',$num3;
			}
			elseif(($num1 == $num2) or ($num3 == $num1) or ($num2 == $num3)){
				echo 'Dos números son iguales';
			}
			elseif(!($num1 == $num2) and !($num2 == $num3)){
				echo 'Los tres números son diferntes; ', $num1, ', ',$num2, ', ',$num3;	
			};
		?>		
			
	</body>
</html>