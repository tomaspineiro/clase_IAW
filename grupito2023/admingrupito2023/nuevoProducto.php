<?php session_start(); ?>
<?php include('./inc/funciones.php'); ?>
<?php include('./inc/bbdd.php'); ?>
<?php $titulo="Estados"; ?>

<?php
if(!isset($_SESSION['user'])) {
     
    header("location: index.php");
    exit;
     
} else {
    
    $nameUser= $_SESSION['user']['nombre'];

}
function formularioProducto($nombre="", $descripcion="", $intoDescripción="", $precio="", $precioOferta="") {
?>

    <form action="" method="GET" >
        <div class="mb-3">
            <label for="nombre" class="form-label"><h5>Nombre:</h5></label>
            <input type="text" class="form-control" id="nombre"name="nombre" value="<?= $nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="intoDescripción" class="form-label"><h5>intoDescripción:</h5></label>
            <input type="text" class="form-control" id="intoDescripción" name="intoDescripción" value="<?= $intoDescripción; ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label"><h5>Descripción:</h5></label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $descripcion; ?>">
        </div>
        <div class="mb-3">
            <label for="intoDescripción" class="form-label"><h5>intoDescripción:</h5></label>
            <input type="text" class="form-control" id="intoDescripción" name="intoDescripción" value="<?= $intoDescripción; ?>">
        </div> 
        <div class="mb-3">
            <label for="precio" class="form-label"><h5>Precio:</h5></label>
            <input type="text" class="form-control" id="precio" name="precio" value="<?= $precio; ?>">
        </div>
        <div class="mb-3">
            <label for="precioOferta" class="form-label"><h5>Precio Oferta:</h5></label>
            <input type="text" class="form-control" id="precio" name="precioOferta" value="<?= $precioOferta; ?>">
        </div>
        <div class="mb-3">
            <label for="imagenP" class="form-label"><h5>Imagen Pequeña:</h5></label>
            <input type="file" class="form-control" id="imagenP"name="imagenP">
        </div>
        <div class="mb-3">
            <label for="imagenG" class="form-label"><h5>Imagen Grande:</h5></label>
            <input type="file" class="form-control" id="imagenG" name="imagenG">
        </div>
        <div>
            <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
            <a href="./tablaPrductos.php" class="btn btn-secondary">cancelar</a>
        </div>

        
    </form>
<?php } // montrar formularioTarea ?>

<?php include('./inc/header.php'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Nuevo Estado</h1>
        <div class="card-body">
<?php
if (!isset($_REQUEST['enviar'])) {

    formularioProducto();

} else {

    $nombre = recoge('nombre');
    $intoDescripción = recoge('intoDescripción');
    $descripcion = recoge('descripcion');
    $precio = recoge('precio');
    $precioOferta = recoge('precioOferta');
    
    $errores = "";

    if ($nombre == '') {
        $errores .= "<li>Tiene que tener algo escrito en el nombre</li>";
    }

    if ($intoDescripción == '') {
        $errores .= "<li>Tiene que tener algo escrito en el intoDescripción</li>";
    }

    if ($descripcion == '') {
        $errores .= "<li>Tiene que tener algo escrito en el descripcion</li>";
    }

    if ($precio == '') {
        $errores .= "<li>Tiene que tener un precio</li>";
    }

    if ($precioOferta == '') {
        $errores .= "<li>Tiene que tener un precio oferta</li>";
    }

    if (($errores == '')  && (isset($_FILES['imagenP'])) && (isset($_FILES['imagenG']))) {
        $nombreIMG = trim($nombre);

        $pathFile ="../siteGrupito2023/img";

        $pathGuardar = "img/";

        $imgP = $_FILES['imagenP']['name'];
        $imgG = $_FILES['imagenG']['name'];
        

        $imgPCmps = explode(".", $imgP);
        $imgGCmps = explode(".", $imgG);
        
        $imgGExtension = strtolower(end($imgGCmps));
        $imgPExtension = strtolower(end($imgPCmps));

        $allowedIMGExtensions = array('jpg, png');

        $nombrePathIMG =  $pathFile .  $nombreIMG . 'P' .'.'. $imgPExtension;

        $pathGuardarP = $pathGuardar .  $nombreIMG . 'P' .'.'. $imgPExtension;

        if (!in_array($imgPExtension, $allowedIMGExtensions)) {

            $errores .= "<li>Solo se permiten  .jpg y .png, img p</li>";

        }else {
                    
            if (move_uploaded_file($_FILES['imagenP']['tmp_name'], $nombrePathIMG )){
                
                $corecto .= "<li>El archivo ha sido cargado correctamente.</li>";
            
            }else{
            
                $errores .= "<li>Ocurrió algún error al subir el fichero. No pudo guardarse.</li>";
            
            }
        }

        $nombrePathIMG =  $pathFile .  $nombreIMG . 'G' .'.'. $imgGExtension;

        $pathGuardarG = $pathGuardar .  $nombreIMG . 'G' .'.'. $imgGExtension;

        if (!in_array($imgGExtension, $allowedIMGExtensions)) {

            $errores .= "<li>Solo se permiten  .jpg y .png, img g</li>";

        } else {
                    
            if (move_uploaded_file($_FILES['imagenG']['tmp_name'], $nombrePathIMG )){
                
                $corecto .= "<li>El archivo ha sido cargado correctamente.</li>";
            
            }else{
            
                $errores .= "<li>Ocurrió algún error al subir el fichero. No pudo guardarse.</li>";
            
            }
        }
   
    if ($errores != "") {
?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?= $errores; ?>
        </ul>
    </div>

<?php
        
        formularioProducto($nombre, $descripcion, $intoDescripción, $precio, $precioOferta);

   } else {

        $idEstado = instarEstado($estadoNew);
        if (isset($idEstado)) {

?>
            <div class="alert alert-success" role="alert">
                <p>El estado <?= $estadoNew; ?>, se a insertado correctamet.</p>
            </div>

            <a href="tablaEstados.php">Volver a la tabla </a>
<?php
        } else {
?>
            <div class="alert alert-success" role="alert">
                <p>Al insertar el producto se a producido un error, vuelve a intetarlo.</p>
            </div>
<?php
            formularioProducto($nombre, $descripcion, $intoDescripción, $precio, $precioOferta);
        }
    }

}
?> 
        </div>
    </div>
    <!-- /.container-fluid -->

<?php include('./inc/footer.php'); ?>
