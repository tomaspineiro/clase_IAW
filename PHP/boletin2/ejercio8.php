<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio  8</h5>
		<?php
			//Escribe un programa que a partir de 3 números al azar entre 1 y 100 los muestre en pantalla de menor a mayor.
			define('NUMmIN', 1);
			define('NUMmAX',100);
						
			$num1 = rand(NUMmIN, NUMmAX);
			$num2 = rand(NUMmIN, NUMmAX);
			$num3 = rand(NUMmIN, NUMmAX);

			if(($num1 > $num2) and ($num2 > $num3)){
				echo $num1, ' > ', $num2, ' > ', $num3;
			}
			elseif(($num1 > $num3) and ($num3 > $num2)){
				echo $num1, ' > ', $num3, ' > ', $num2;
			}
			elseif(($num2 > $num1) and ($num1 > $num3)){
				echo $num2, ' > ', $num1, ' > ', $num3;
			}
			elseif(($num2 > $num3) and ($num3 > $num1)){
				echo $num2, ' > ', $num3, ' > ', $num1;
			}
			elseif(($num3 > $num1) and ($num1 > $num2)){
				echo $num3, ' > ', $num1, ' > ', $num2;
			}
			elseif(($num3 > $num2) and ($num2 > $num1)){
				echo $num3, ' > ', $num2, ' > ', $num1;
			}
			elseif(($num1 == $num2) or ($num1 == $num3) or ($num2 == $num3)){
				echo 'dos números son iguales';

			};

			#echo '</br> ','</br> ','</br> ',$num1, ' > ', $num2, ' > ', $num3;
		?>		
			
	</body>
</html>