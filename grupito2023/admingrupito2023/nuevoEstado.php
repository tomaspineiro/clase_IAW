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
function formularioEstados() {
?>
<form class="row g-3">
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden" id="nuevoEstado" name="nuevoEstado">Estado</label>
        
    </div>
    <div class="col-auto">
        
        <input type="text" class="form-control" id="nuevoEstado" name="nuevoEstado">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" name="enviar" id="envia">crear</button>
    </div>
</form>
        
<?php } // END formulario Estado ?>
<?php include('./inc/header.php'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Nuevo Estado</h1>
        <div class="card-body">
<?php
if (!isset($_REQUEST['enviar'])) {

    formularioEstados();

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
