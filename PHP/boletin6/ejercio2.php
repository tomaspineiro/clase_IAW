<?php include('funciones.php'); ?>
<?php function formulario() { ?>
	<form action="" method="GET">
		<p>
			<label for="euros">Euros: </label>
			<input type="number" name="euro" id="euro">
		</p>
		<p>
			<button type="submit" name="enviar" id="enviar">Enviar</button>
		</p>
	</form>				
<?php } ?>
<?php
	function eurosPesta($euros){
		
		define('PESETAS', 166.386);
		$euros = floatval($euros);
		
		$pesetas = $euros * PESETAS;
		
		$pesetas = round($pesetas, 2);
		return $pesetas;
	}
?>		
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 6 de PHP</title>
	</head>
	<body>
		<h1>Boletin 6 de PHP</h1>
		<article>
			<h5>ejercio 2 </h5>
			<p>
				Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se debera introducir por teclado.	
			</p>
			<p>
				1 € = 166'386 pesetas
			</p>
		</article>
		<article>
			<?php if (!isset($_REQUEST['enviar'])) {
					 formulario();
				} else {
					$euros = recoge('euro');
					
					$errores = "";

					if ($euros == ""){

						$errores .= "<li>tienes que meter una cantida de auros </li>";
					}

					if ($errores != ""){
						
						echo "<lu>$errores</lu>";
						formulario();

					}else {
			?>
					<p> si tenemos estos <?= $euros; ?> euros, entoces antes tendriamos estas <?=eurosPesta($euros) ?> pesetas</p>
						
			<?php
					}
				}
			?>
		</article>
	</body>
</html>