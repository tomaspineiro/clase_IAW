<?php session_start(); ?>
<?php include('./inc/funciones.php'); ?>
<?php include('./inc/bbdd.php'); ?>
<?php
if(!isset($_SESSION['user'])) {
     
    header("location: index.php");
    exit;
     
} else {
    
    $nameUser= $_SESSION['user']['nombre'];

}
    
?>
<?php $titulo="Detalles de Pedidos"; ?>
<?php include('./inc/header.php'); ?>
<?php
;
$idUsuario = recoge('idUsuario');

$rowUser = seleccionarUsuarioTODO($idUsuario);

?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-center">Usuario: <?= $idUsuario; ?></h6>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nombre: <?= $rowUser['nombre']; ?></li>
                                <li class="list-group-item">Apellidos: <?= $rowUser['apellidos']; ?></li>
                                <li class="list-group-item">Telefono: <?= $rowUser['telefono']; ?></li>
                                <li class="list-group-item">Correo: <?= $rowUser['email']; ?></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul sta>
                                <li>Dirección: <?= $rowUser['direccion']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<!-- /.container-fluid -->
<?php include('./inc/footer.php'); ?>