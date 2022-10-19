<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 1 de PHP</title>
	</head>
	<body>
		<h1>Boletin 1 de PHP</h1>
		<h5>ejercio 4</h5>
		<?php
			/*
			En una frutería se vende: 160kg de naranjas a 1.25€/Kg; 86kg de manzanas rojas a
			1.53€/Kg; 54Kg de peras a 1.69€/Kg; 65Kg de kakis a 2.25€/kg; y 95Kg de patatas
			0.40€/Kg. Define las variables que necesites y calcula: El total ganado en el día y el
			precio medio por kg de fruta.
			*/

			$pesoNaranja = 160;
			$pesoManzana = 86;
			$pesoPeras = 54;
			$pesoKakis = 65;
			$pesoPatatas = 95;

			$precioNaranjas = 1.25;
			$precioManzanas = 1.53;
			$precioPeras = 1.69;
			$precioKakis = 2.25;
			$precioPatatas = 0.40;

			$ganado = $pesoKakis * $precioKakis + $pesoNaranja * $precioNaranjas + $pesoManzana * $precioManzanas + $pesoPeras * $precioPeras + $pesoPatatas * $precioPatatas;
			$pesoTotal = $pesoKakis + $pesoManzana + $pesoNaranja + $pesoPatatas + $pesoPeras;
			$precioMedio = $ganado / $pesoTotal;

			echo 'A ganado: ', $ganado, '<br/>', 'Precio medio por kilo: ', round($precioMedio, 2);

		?>		
	</body>
</html>