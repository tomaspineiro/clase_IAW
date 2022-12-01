<?php include 'funciones.php'; ?>
<?php function formularios($nombre = "", $tel = "",$agenda = []) { ?>
	<form action="" method="get">
		<p>
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" id="nombre" value="<?= $nombre; ?>">
		</p>
		<p>
			<label for="tel">Telefono: </label>
			<input type="text" name="tel" id="tel" value="<?= $tel; ?>">
		</p>
		<p>
			<input type="hidden" name="agenda" id="agenda" value='<?php echo serialize($agenda);?>'>
		</p>
		<p>
			<button type="submit" name="gurdar" id="gurdar">guardar</button>
		</p>
	</form>
<?php } ?>
<?php function MostrarAgenda($agenda){
	echo "<h3>Contactos</h3>
	<lu>";
	
	foreach ($agenda as $nombre => $telefono) {

		echo "<li><strong>$nombre</strong>: $telefono</li>";
	}
	
	echo "</lu><hr>";
	
} ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Boletin 8 de PHP</title>
	</head>
	<body>
		<article>
			<h1>Boletin 8 de PHP</h1>
			<h5>Agenda</h5>
			<hr>
		</article>
		<article>
			<?php if (!isset($_REQUEST['gurdar'])){
				formularios();
			} else {
				$nombre = recoge('nombre');
				$tel = recoge('tel');
				$agenda = $_REQUEST['agenda'];
				$agenda = unserialize($agenda);

				$errores = '';

				if ($nombre == '') {
					$errores .= "<li>tienes que introducir un nombre</li>";
				}
				if ($tel == '' ) {
					if ($nombre != "" && isset($agenda[$nombre]) ) {
						unset($agenda[$nombre]);
					} else {
						$errores .= "<li>tienes que introducir el numero</li>";
					}
				}
				if ($errores != '') {
					
					echo "<lu>$errores</lu>";
					formularios($nombre, $tel, $agenda);
					MostrarAgenda($agenda);
				
				} else {
					
					$agenda[$nombre] = $tel;
					
					MostrarAgenda($agenda);

					formularios($nombre, $tel, $agenda);
				}


			} ?>
					
		</article>
		<footer>
			<hr>
    		<p>Tomás Piñeior Alonso</p>
  		</footer>
	</body>
</html>