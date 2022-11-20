<?php include("funciones.php");?>
<?php 
	function formulario($contador = 0, $numTotal = 0) {  // formulario
?>

		<form action="" method="GET">
			<p>
				<label for="numero">Numero: </label>
				<input type="namber" name="numero" id="numero"/>
			</p>
			<p>
				<input type="hidden" nume='contador' id='contador' value='<?= $contador; ?>'>
				<input type="hidden" nume='numTotal' id='numTotal' value='<?= $numTotal; ?>'>
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
		<h5>ejercio 2 </h5>


		<?php
			if (!isset($_REQUEST['enviar'])) {

				formulario();

			} elseif ((intval($_REQUEST['numero']) > 0) && isset($_REQUEST['enviar'])) {

				$numero = recoge('numero');
				$contador = intval(recoge('contador'));
				$numTotal = intval(recoge('numTotal'));
				
				$contador = $contador + 1;
				$numTotal = $numTotal + $numero;

				formulario($contador, $numTotal);
				
			} elseif ($_REQUEST['numero'] < 0)  {	
				$contador = intval(recoge('contador'));
				$numTotal = intval(recoge('numTotal'));
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