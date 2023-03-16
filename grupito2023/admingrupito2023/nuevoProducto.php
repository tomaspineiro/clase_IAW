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

    $estadoNew = recoge('nuevoEstado');
    
    $errores = "";

    if ($estadoNew == '') {
        $errores .= "<li>Tiene que tener algo escrito</li>";
    }

    if (comprovacionEstados($estadoNew)) {
        $errores .= "<li>Ya existe el estado.</li>";
    }

    if ($errores != "") {
?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?= $errores; ?>
        </ul>
    </div>

<?php
        formularioEstados();

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
                <p>Al insertar el estado, <?= $estadoNew; ?>, se a producido un erro vuelve a intetarlo.</p>
            </div>
<?php
            formularioEstados();
        }
    }
}
?>
        </div>
    </div>
    <!-- /.container-fluid -->

<?php include('./inc/footer.php'); ?>
