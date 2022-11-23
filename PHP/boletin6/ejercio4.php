<?php include('funciones.php'); ?>
<?php function formulario() { ?>
	<form action="" method="GET">
		<p>
			<label for="num1">Numero 1:</label>
			<input type="number" name="num1" id="num1">
		</p>
		<p>
			<label for="num2">Numero 2:</label>
			<input type="number" name="num2" id="num2">
		</p>
		<p>
			<label for="num3">Numero 3:</label>
			<input type="number" name="num3" id="num3">
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
				$media = ($nota1 + $nota2 + $nota3) / 3;	
			?>
				<p>
					tus notas son: <?= $nota1;?> <?= $nota2; ?> <?= $nota3; ?> y su media es <?= $media ?>
				</p>
			<?php }?>
		</article>
	</body>
</html>