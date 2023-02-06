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
        if (!isset($_REQUEST['Enviar'])) {
            formulario();
        } else  {
            
            $nombre = rocoge("nombre");
            $apellidos = recoge("apellidos");
            $dni = rocoge("dni");

            //datos del arhivo
            $nombre_archivo = $_FILES['userfile']['name'];
            $tipo_archivo = $_FILES['userfile']['type'];
            $tamano_archivo = $_FILES['userfile']['size'];
                
            //compruebo si las características del archivo son las que deseo
            if (!((strpos($tipo_archivo, "gif") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
                echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .gif o .jpg<br><li>se permiten archivos de 100 Kb máximo.</td></tr></table>";
            }else{
                
                if (move_uploaded_file($_FILES['userfile']['tmp_name'],  $nombre_archivo)){
                        echo "El archivo ha sido cargado correctamente.";
                }else{
                        echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
                }
            }

        }
        if ($nombre == "") {
                    $errores .= "<li>El comapo nombres no puede estar vacio. </li>";
                }

                if ($apellidos == "") {
                    $errores .= "<li>El comapo apellidos  no puede estar vacio. </li>";
                }

                if ($dni == "") {

                    $errores .= "<li>El comapo dni no puede estar vacio. </li>";

                } elseif (strlen($dni) != 9) {

                    $errores .= "<li>El dni no esta bien escrito. </li>";

                }
                //tomo el valor de un elemento de tipo texto del formulario
                $cadenatexto = $_POST["cadenatexto"];
                echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";

                //datos del arhivo
                $nombre_archivo = $_FILES['userfile']['name'];
                $tipo_archivo = $_FILES['userfile']['type'];
                $tamano_archivo = $_FILES['userfile']['size'];
                    
                //compruebo si las características del archivo son las que deseo
                if (strpos($tipo_archivo, "pdf")) {
                    $errores .= "<li>Solo se permiten archivos .pdf";
                }else{
                    if (move_uploaded_file($_FILES['fileCV']['tmp_name'],  $nombre_archivo)){
                            $errores .= "<li>El archivo ha sido cargado correctamente.</li>";
                    }else{
                            $errores .= "<li>Ocurrió algún error al subir el fichero. No pudo guardarse.</li>";
                    }
                }

                if ($errores != "") {
                    ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <lu>
                            <?= $errores; ?>
                        </lu>
                    </div> 
                    <?php
                    formularioArchivo();
                } else {


                }
            }
        ?>
    </main>
       ?>
    


                

</body>
</html>

