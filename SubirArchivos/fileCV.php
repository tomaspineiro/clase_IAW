<?php function formularioSubirArchivos($nombre="", $apellidos="", $dni="") { ?>
    <form action="" method="post" enctype="multipart/form-data">
            <b>Campo de tipo texto:</b> 
            <div class="mb-3">
                <label for="nombre" class="form-label"><h5>Nombre:</h5></label>
                <input type="text" class="form-control" id="nombre"name="nombre" value="<?= $nombre; ?>">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label"><h5>Apellidos:</h5></label>
                <input type="text" class="form-control" id="apellidos"name="apellidos" value="<?= $apellidos; ?>">
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label"><h5>DNI:</h5></label>
                <input type="text" class="form-control" id="dni"name="dni" value="<?= $dni; ?>">
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label"><h5>DNI:</h5></label>
                <input type="file" class="form-control" id="cv"name="cv" value="">
                <input type="hidden" name="MAX_FILE_SIZE" value="100000">
            </div>
            <div class="mb-3">
                <input type="submit" id="enviar" name="enviar" value="Enviar">
            </div>
        </form>
<?php } ?>
<?php
	function recoge($var, $m = "")  {
	
		$tmp = is_array($m) ? [] : "";
		if (isset($_REQUEST[$var])) {
			if (!is_array($_REQUEST[$var]) && !is_array($m)) {
				$tmp = trim(htmlspecialchars($_REQUEST[$var]));
			} elseif (is_array($_REQUEST[$var]) && is_array($m)) {
				$tmp = $_REQUEST[$var];
				array_walk_recursive($tmp, function (&$valor) {
					$valor = trim(htmlspecialchars($valor));
				});
			}
		}
		return $tmp;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Subir CV</title>
</head>
<body>
    
    <main class="container">
        <?php
            if (isset($_REQUEST["enviar"])) {
                
                formularioSubirArchivos();
            
            } else {

                $nombre = rocoge("nombre");
                $apellidos = recoge("apellidos");
                $dni = rocoge("dni");


                if ()


            }
        ?>
    </main>
</body>
</html>

