<?php include('funciones.php'); ?>
<?php function formulario() { ?>
<form action="" method="GET">
<p>
	<label for="hora">hora</label>
	<input type="number" name="hora" id="hora">
</p>
<p>
	<button type="submit" name="enviar" id="enviar">Enviar</button>
</p>
</form>
<?php } ?>
<?php
	function montoDia($hora){
		define('DIA', 'Buenos días. ');
		define('TARDE', 'Buenas tardes. ');
		define('NOCHE', 'Buenas noches. ');
		if ((6 <= $hora) and ($hora < 13 )){
			return DIA;
		} 
		
		if ((13 <= $hora) and ($hora < 21)){
			return TARDE;
		} 
		
		if (((21 <= $hora) and ($hora <=24 )) or ((0 <= $hora) and ($hora < 6 ))){
			return NOCHE;
		} 
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
			<h5>ejercio 3 </h5>
			<p>
				Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches según la hora. Se utilizaran los  tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Solo se tienen en cuanto las horas, los minutos no se deben introducir por teclado.
			</p>
		</article>
		<article>
			<?php if (!isset($_REQUEST['enviar'])) {
				formulario();
			} else { 
				$hora = recoge('hora');

				$errores = "";

				if ($hora != "") {

					$errores .= "<li>Tienes que indicar una hora </li>";

				} 

				if (((int)$hora >= 0) && ((int)$hora <= 24)) {

					$errores .= "<li> las hora pueden ser entre 0 a 24 </li>";
				
				}

				if ($errores != ""){
					
					echo "<ul>$errores</ul>";
					formulario();

				} else {
			?>
				<p>
					<?php montoDia($hora); ?>
				</p>

			<?php }
			} ?>
		</article>	
	</body>
</html>