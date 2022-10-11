<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 2 de PHP</title>
	</head>
	<body>
		<h1>Boletin 2 de PHP</h1>
		<h5>ejercio  </h5>
		<?php
			// Escribe una calculadora de años bisiestos. Los años bisiestos son múltiplos de 4, pero los múltiplos de 100 no son bisiestos, aunque los múltiplos de 400 sí lo son
			
			define('ANOmAX', 1);
			define('ANOmIN',9999);
			
			$ano = rand(ANOmIN, ANOmAX);
			
			if((($ano % 4) != 0) and (($ano % 100) != 0) and (($ano % 400) != 0)){
				echo ' El año ', $ano, ' no es bisiesto.';
			}
			elseif((($ano % 4) == 0) and (($ano % 100) == 0) and (($ano % 400) == 0)) {
				echo ' El año ', $ano, ' es bisiesto.';
			}
			elseif((($ano % 4) == 0) and (($ano % 100) != 0) and (($ano % 400) != 0)){
				echo ' El año ', $ano, ' no es bisiesto.';
			}
			elseif((($ano % 4) == 0) and (($ano % 100) == 0) and (($ano % 400) != 0)){
				echo ' El año ', $ano, ' no es bisiesto.';
			};
			
			/*
			echo '</br></br></br>';
			echo 2007%100, '    ',2007%4, '    ',2007%400,' No es bisiest 2007';			
			echo '</br></br></br>';
			echo 2000%100, '    ',2000%4, '    ',2000%400,'es bisiest 2000';
			echo '</br></br></br>';
			echo 2008%100, '    ',2008%4, '    ',2008%400,'es bisiest 2008';
			echo '</br></br></br>';
			echo 1900%100, '    ',1900%4, '    ',1900%400, ' No es bisiest 1900';
			echo '</br></br></br>';
			echo 400%100;
			*/
			
		?>		
			
	</body>
</html>