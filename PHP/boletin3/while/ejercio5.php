<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 5 (while) </h5>
		<?php
			//Realiza el producto de dos números distintos de 0 utilizando únicamente la operación de suma.
			
			define('NUMmIN', 1);
			define('NUMmAX',100);
			
			# echo NUMmAX,' ', NUMmIN;
			
			$num = rand(NUMmIN, NUMmAX);
			$num2 = rand(NUMmIN, NUMmAX);
			#$num = 8;
			

			$contador = 0;
			$multi = $num2;
			while ($contador < ($num - 1)) {
				$multi += $num2;
			
				$contador += 1 ;

			};

			echo "$num * $num2 =  $multi";

		?>			
	</body>
</html>