<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 9 (while) </h5>
		<?php
			//

			$txt = '@';
			$txt2 = $txt;	

			$contador = 0;
			while ($contador < 6) {

				echo $txt2 , '<br/>';
				$txt2 = $txt2 . $txt;	
				
				$contador += 1;
				
			};

		?>			
	</body>
</html>