<?php include('funciones.php'); ?>
<?php function formulario($nota1 = 0, $nota2 = 0 , $nota3 = 0) { ?>
	<form action="" method="GET">
		<p>
			<label for="num1">Numero 1:</label>
			<input type="number" name="num1" id="num1" value="<?= $nota1?>">
		</p>
		<p>
			<label for="num2">Numero 2:</label>
			<input type="number" name="num2" id="num2" value="<?= $nota2?>">
		</p>
		<p>
			<label for="num3">Numero 3:</label>
			<input type="number" name="num3" id="num3" value="<?= $nota3?>">
		</p>
		<p>
			<button type="submit" name="enviar" id='enviar'>Enviar</button>
		</p>
	</form>
 <?php } ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<article>
			<h5>ejercio 4 </h5>
			<p>
				Realiza un programa que calcule la media de tres notas.
			</p>	
		</article>
		<article>
			<?php if (!isset($_REQUEST['enviar'])) {
				
				formulario();
			
			} else { 
				$nota1 = recoge('num1');
				$nota2 = recoge('num2');
				$nota3 = recoge('num3');
				
				$errores = "";

				if ($nota1 != "") {

					$errores .= "<li> no puede quedar en blanco la nota1 "; 
				}

				if ($nota2 != "") {

					$errores .= "<li> no puede quedar en blanco la nota2 "; 
				}

		
				if ($nota3 != "") {

					$errores .= "<li> no puede quedar en blanco la nota3 "; 
				}

				$nota1 = (int)$nota1;
				$nota2 = (int)$nota2;
				$nota3 = (int)$nota3;
				
				if ($errores != ""){
					
					
					formulario($nota1, $nota2, $nota3);
				}

				$media = ($nota1 + $nota2 + $nota3) / 3;	
			?>
				<p>
					tus notas son: <?= $nota1;?> <?= $nota2; ?> <?= $nota3; ?> y su media es <?= $media ?>
				</p>
			<?php }?>
		</article>
	</body>
</html>