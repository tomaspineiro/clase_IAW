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
    <form  method="POST" enctype="multipart/form-data">
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
                <label for="cv" class="form-label"><h5>CV:</h5></label>
                <input type="file" class="form-control" id="cv"name="cv" value="">
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
<!-- 
Para poder subir los archivos igual tenemoq ue meter mano al archivo de configuracion de php
<?php echo php_ini_loaded_file(); ?>

; Whether to allow HTTP file uploads.
file_uploads = On : es para permitir la carga de archivos.

; Temporary directory for HTTP uploaded files.
; Will use system default if not set.
;upload_tmp_dir = : Espara indicar un directorio temporal donde gurdaremos los archivos, si no le indicamos nada usara el de por defecto del sistema. 

; Maximum allowed size for uploaded files.
upload_max_filesize = 16M : es el tamaño maximo que se pude cargar un archivo, podefecto es 2M.(sequeda corto hoy endia)

; Maximum number of files that can be uploaded via a single request
max_file_uploads = 20 : Te permite establecer el número máximo de archivos que se pueden cargar a la vez.

; Maximum size of POST data that PHP will accept.
post_max_size = 20M : te permite configurar el tamaño máximo de los datos POST.

max_input_time = 60 : Es el número máximo de segundos que un script puede analizar los datos de entrada. Debe establecerlo en un valor razonable si está tratando con cargas de archivos grandes. 60 [segundos] es un buen valor para la mayoría de las aplicaciones.

memory_limit = 128M : indica la cantidad máxima de memoria que puede consumir un script. 

max_execution_time = 30 : Es el número máximo de segundos que se permite ejecutar un script.

######## Es muy importante que el usuario del SERVIDOR WEB pueda escribir en la carpeta en la que vayamos a subir los cv.pdf
 -->
    <main class="container">
       <?php 
        
        if (!isset($_REQUEST['enviar'])) {
            
            formularioSubirArchivos();
            
        
        } else {
            
            $nombre = recoge("nombre");
            $apellidos = recoge("apellidos");
            $dni = recoge("dni");
           /*  $corecto = recoge("corecto");
            $errores = recoge("errores"); */

            $errores = "";
            $corecto = '';

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

            if (($errores == '')  && (isset($_FILES['cv']))) {

                // datos del usuario para el nombre del archivo
                $nombre = trim($nombre); // elimina todos los espacios  del string
                $apellidos = ltrim($apellidos); // ellimina los espacios al incio del estring
                $apellidos = rtrim($apellidos); // ellimina los espacios al final del estring
                $apellidos = str_replace( ' ', '.', $apellidos); // cambiamos los espacios por un . 

                //datos del arhivo
                $fileName = $_FILES['cv']['name'];
            /*  $tipo_archivo = $_FILES['cv']['type']; este es el error 
                $tamano_archivo = $_FILES['cv']['size']; */

                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));
                $allowedfileExtensions = array('pdf');

                $pathFile = './discharge/';

                $nombrePathFile = $pathFile . $apellidos. '.' . $nombre . '.' . $dni . '.' . $fileExtension;

                //compruebo si las características del archivo son las que deseo
                if (!in_array($fileExtension, $allowedfileExtensions)) {

                    $errores .= "<li>Solo se permiten archivos .pdf</li>";

                } else {
                    
                    if (move_uploaded_file($_FILES['cv']['tmp_name'], $nombrePathFile )){
                        
                        $corecto .= "<li>El archivo ha sido cargado correctamente.</li>";
                    
                    }else{
                    
                        $errores .= "<li>Ocurrió algún error al subir el fichero. No pudo guardarse.</li>";
                    
                    }
                }

            } else {

                $errores .= "<li>El campo CV tiene que tener un archivo. </li>";
            
            }
            

            if ($errores != "") {
                ?>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <lu>
                        <?= $errores; ?>
                    </lu>
                </div> 
                <?php
                
                formularioSubirArchivos($nombre, $apellidos, $dni);

            } elseif ($corecto != "") {
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <lu>
                        <?= $corecto; ?>
                    </lu>
                </div> 
                <?php
            } else {

               formularioSubirArchivos();
               
            }

        } // FIN DEL DEL IF DE COMPROVACION DE QUE LOS DATOS DEL FORMULARIO ESTEN BIEN. 
        ?>
    </main>
</body>
</html>