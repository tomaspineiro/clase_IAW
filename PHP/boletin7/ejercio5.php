<?php include("funciones.php");?>
<?php 
	function formularioEje5($contador, $numAdivinar) {
?>
	<form action="" method="GET">
		<p>
			<label for="numUser">Numero: </label>
			<input type="text" name="numUser" id="numUser" value="">
		</p>
		<p>
			<input type="hidden" name="contador" id="contador" value="<?= $contador; ?>">
			<input type="hidden" name="numAdivinar" id="numAdivinar" value="<?= $numAdivinar; ?>">
		</p>
		<p>
			<button type="submit" name="submit" id="submit">Enviar</button>
			<button type="reset" name="reset" id="reset">Borrar</button>
		</p>
	</form>

<?php
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 7 de PHP</title>
	</head>
	<body>
		<h1>Boletin 7 de PHP</h1>
		<article>
			<h5>ejercio 5 </h5>
			<p>
				Adivina un número. Realiza un script en php que te permita adivinar un número aleatorio entre 1 y 100 en un máximo de 5 intentos. Cada vez que el usuario introduce un número, el programa debe darle una pista de si el número que tiene que adivinar es mayor o menor.
			</p>
		</article>
		<?php
			if (!isset($_REQUEST['submit'])) {
				$numAdivinar = rand(1,100);
				$contador = 0
		?>
				<article>
					<?php formularioEje5($contador, $numAdivinar); ?>
				</article>
		<?php
			}else {
		
				$contador = (int)recoge('contador');
				$numUser = (int)recoge('numUser');
				$numAdivinar = (int)recoge('numAdivinar');
				$contador++;

				if ( ($contador < 5) && ($numUser != $numAdivinar) ) {
		?>
					<article>
						<?php if ($numUser > $numAdivinar){ ?>
						
							<p>
								Te pasate.	
							</p>
							
						<?php } else { ?>  
							<p>
								Te quedaste corto. 
							</p>
						<?php 
							}

							formularioEje5($contador, $numAdivinar); 
						?>
						<?=  $numAdivinar?>
					</article>
		<?php	
				} elseif ( $numUser == $numAdivinar)  {
		?>
				<article>
					<p>
						Es el numero correcto, acertaste. 
					</p>
				</article>
		<?php
				}
			}
		?>
			
	</body>
</html>