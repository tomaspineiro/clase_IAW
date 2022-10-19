<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 3 de PHP</title>
	</head>
	<body>
		<h1>Boletin 3 de PHP</h1>
		<h5>ejercio 9 (for) </h5>
		<?php
			//

			$txt = '@';
			$txt2 = $txt;	

			for ($i = 0; $i < 6; $i++) {

				echo $txt2 , '<br/>';
				$txt2 = $txt2 . $txt;	
					
			};

		?>			
	</body>
</html>