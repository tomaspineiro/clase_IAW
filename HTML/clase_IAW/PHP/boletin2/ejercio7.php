<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio  </h5>
		<?php
			/*
			Hacer una página PHP que tenga 2 variables numéricas y nos indique si la suma de los números es mayor que el producto de ellos o lo contrario. Ejemplo:
				 $num1=2; $num2=3; --> "el producto es mayor que la suma"
				 $num1=1; $num2=5; --> "la suma es mayor que el producto "
			*/
			define('NUMmIN', 1);
			define('NUMmAX',100);
						
			$num1 = rand(NUMmIN, NUMmAX);
			$num2 = rand(NUMmIN, NUMmAX);
			
			 echo 'los numeros son:' 
			if(($num1 * $num2) > ($num1 + $num2)){
				echo 'El producto es mayor que la suma';
			}
			else{
				echo 'La suma es mayor que el producto';
			};			
		?>		
			
	</body>
</html>