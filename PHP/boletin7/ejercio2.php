<?php include("funciones.php");?>
<?php 
	function formulario($contador = 0, $numTotal = 0) {  // formulario
?>
		<form action="" method="GET">
			<p>
				<label for="numero">Numero: </label>
				<input type="number" name="numero" id="numero"/>
			</p>
			<p>
				<input type="hidden" name='contador' id='contador' value='<?= $contador; ?>'>
				<input type="hidden" name='numTotal' id='numTotal' value='<?= $numTotal; ?>'>
			</p>
			<p>
				<button type="submit" name="enviar" value="enviar">Enviar datos</button> 
				<button type="reset" name="reset" value="Limpiar" >Boorrar datos</button>
			</p>
		</form>

<?php
	}; // cerramos el formulario
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 7 de PHP</title>
	</head>
	<body>
		<h1>Boletin 7 de PHP</h1>
		<article>
			<h5>ejercio 2 </h5>
			<p>
				Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.
			</p>
		</article>

		<?php
			if (!isset($_REQUEST['enviar'])) {

				formulario();

			} elseif (((int)$_REQUEST['numero'] > 0) && isset($_REQUEST['enviar'])) {

				$numero = (int)recoge('numero');
				$contador = (int)recoge('contador');
				$numTotal = (int)recoge('numTotal');

				
				$contador = $contador + 1;
				$numTotal = $numTotal + $numero;

				formulario($contador, $numTotal);
				
			} elseif ($_REQUEST['numero'] < 0)  {	
				$contador = (int)recoge('contador');
				$numTotal = (int)recoge('numTotal');
		?>	
			<article>
				<p>
					<?php 
						$media = $numTotal / $contador ;
						echo 'La media es ' . $media ;
					?>
				</p>
			</article>
		<?php
			}
		?>		
			
	</body>
</html>