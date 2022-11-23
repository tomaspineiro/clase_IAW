<?php include("funciones.php");?><!DOCTYPE html>
<?php
	function formulario($contador = 0) {
?>
	<form action="" method='GET'>
			<p>
				<label for="combinacion">Combinacion: </label>
				<input type="text" name="combinacion" id='combinacion'>
			</p>
			<p>
				<input type="hidden" name="contador" id='contador' value='<?= $contador;?>' >
			</p>
			<p>
				<button type='submit' name='enviar' value='enviar'> Enviar
				</button>
				<button type='reset' name='reset' value='reset'> Borrar
				</button>
			</p>
	</form>

<?php
	}
?>
<html lang="es">
	<head>
		<title>Boletin 7 de PHP</title>
	</head>
	<body>
		<h1>Boletin 7 de PHP</h1>
		<article>
			<h5>ejercio 4 </h5>
			<p>
				Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
			</p>
		</article>
		
		<?php
			
			
			if (!isset($_REQUEST['enviar'])) {
		?>

			<article>
				<?php formulario(); ?>
			</article>
				
		<?php
						   
			} elseif (isset($_REQUEST['enviar']) && ((int)recoge('contador') < 4) && !cajaFuerte(recoge('combinacion'))) { 
				
				$contador = contador((int)recoge('contador'));
													 			
		?>				
			<article>
				<p>
					Lo siento, esa no es la combinación 
					<!--
						<?= $contador; ?>
					-->
				</p>
				<?php 
				 
					
					formulario($contador);
				
				?>
			</article>
		<?php 		
			} elseif (isset($_REQUEST['enviar']) && ((int)recoge('contador') < 4) && cajaFuerte(recoge('combinacion'))) {
		?>
			<article>
				<p>
					La caja fuerte se ha abierto satisfactoriamente
				</p>
			</article>
		<?php
			} else {
				$contador = contador((int)recoge('contador'));
		?>
				<article>
					<p>
						Lo siento, esa no es la combinación 
						<!-- 
							<?= $contador; ?> 
						-->
					</p>
				</article>
		<?php
			}
		?>
	</body>
</html>