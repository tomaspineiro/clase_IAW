<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 5 (for) </h5>
		<?php
			//Realiza el producto de dos números distintos de 0 utilizando únicamente la operación de suma.
			
			define('NUMmIN', 1);
			define('NUMmAX',100);
			
			# echo NUMmAX,' ', NUMmIN;
			
			$num = rand(NUMmIN, NUMmAX);
			$num2 = rand(NUMmIN, NUMmAX);
			#$num = 8;
			

			
			$multi = $num2;
			for ($i = 0; $i < ($num - 1); $i++) {
				$multi += $num2;

			};

			echo "$num * $num2 =  $multi";


		?>			
	</body>
</html>