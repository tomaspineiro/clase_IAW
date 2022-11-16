<?php include("funciones.php");?>
<?php
	function traductor(string $word, array $dictionary) {	
		if (!array_key_exists($word, $dictionary)){
			return FALSE;
		}		
		return TRUE;
	}
?>	
<?php 
	function formulario(string $word = ""){  // formulario
?>

		<form action="" method="GET">
			<p>
				<label for="word">Palabra(ES): </label>
				<input type="text" name="word" id="word" value="<?= $word;?>"/>
			</p>
		
			<p>
				<button type="submit" name="enviar" value="enviar">Enviar datos</button> 
				<button type="reset" name="reset" value="Limpiar" >Boorrar datos</button>
			</p>
		</form>

<?php
	}; // cerramos el formulario
?>
<?php

	$palabrasWords = array("mazo" => "deck", "nuevo" => "new", "gratis" => "free", "papa" => "dad", "mama" => "mom", "simbolo" => "symbol", "mas" => "plus", "regalo" => "gift", "servidor" => "server", "hermano" => "brother", "mundo" => "world", "palabra" => "word", "vente" => "come", "programa" => "program", "usuario" => "user", "numero" => "number", "animal" => "animal", "perro" => "dog", "gato" => "cat", "pez" => "fish");
	
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 7 de PHP</title>
	</head>
	<body>
		<h1>Boletin 7 de PHP</h1>
		<h5>ejercio 1 </h5>
		<?php
			if (!isset($_REQUEST['enviar'])) { // MONSTRAMOS EL FORM 
			
				formulario();
		
				// fin de FORM 
			} else {
				// RESPUESTA AL FORM 
				$word = recoge($_REQUEST['word']);
				if (!traductor($word, $palabrasWords)){ // esto es si no tenemos la palabra para traductor
					formulario();
				
				} else {
		?>
		<arcticle>	
			zxv<zdv
		</arcticle>
		
		<?php 
				}
			} // Fin RESPUESTA AL FORM 
		?>
		
		
		
		
	
	</body>
</html>
