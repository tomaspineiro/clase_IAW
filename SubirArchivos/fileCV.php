<?php function recoge($var, $m = "")  {
	
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
	}?>
<?php function formularioSubirArchivos($nombre="", $apellidos="", $dni="") { ?>
    <form action="" method="POST" enctype="multipart/form-data">
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
<?php } // fin de Funcion del formulario ?>
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
        
        if (!isset($_REQUEST['enviar'])) {
            
            formularioSubirArchivos();
        
        } else {
            
            $nombre = rocoge("nombre");
            $apellidos = recoge("apellidos");
            $dni = rocoge("dni");
            
            $errores = "";

            if ($nombre == "") {
            
                $errores .= "<li>El comapo nombres no puede estar vacio. </li>";
            
            }

            if ($apellidos == "") {
                
                $errores .= "<li>El comapo apellidos  no puede estar vacio. </li>";
            
            }

            if ($dni == "") {
            
                $errores .= "<li>El comapo dni no puede estar vacio. </li>";
            
            } elseif (strlen($dni) != 9) {// falta la funcionde comprobacion de letra de dni 
            
                $errores .= "<li>El dni no esta bien escrito. </li>";
            
            }

            //datos del arhivo
            $nombre_archivo = $_FILES['cv']['name'];
            $tipo_archivo = $_FILES['cv']['type'];
            $tamano_archivo = $_FILES['cv']['size'];
                
            //compruebo si las características del archivo son las que deseo
            if (strpos($tipo_archivo, "pdf")) {
            
                $errores .= "<li>Solo se permiten archivos .pdf";
            
            }else{
                
                if (move_uploaded_file($_FILES['cv']['tmp_name'],  $nombre_archivo)){
                    
                    $corecto = "<li>El archivo ha sido cargado correctamente.</li>";
                
                }else{
                
                    $errores .= "<li>Ocurrió algún error al subir el fichero. No pudo guardarse.</li>";
                
                }
            }

            /* if ($errores "") { */
                ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <lu>
                        <?= $errores; ?>
                    </lu>
                </div> 
                <?php
                
                formularioSubirArchivos($nombre, $apellidos, $dni);
/* 
            } else {
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <lu>
                        <li><?= $corecto; ?></li>
                    </lu>
                </div> 
                <?php
            } */

        } // FIN DEL DEL IF DE COMPROVACION DE QUE LOS DATOS DEL FORMULARIO ESTEN BIEN. 
        ?>
    </main>
</body>
</html>