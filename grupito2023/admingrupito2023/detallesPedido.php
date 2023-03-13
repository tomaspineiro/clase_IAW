<?php $titulo="Detalles de Pedidos"; ?>
<?php include('./inc/header.php'); ?>
<?php
$idPedido = recoge('idPedido');
$idUsuario = recoge('idUsuario');
$fecha = recoge('fecha');

$rowUser = seleccionarUsuarioTODO($idUsuario);

?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-center">Pedido: <?= $idPedido; ?> / Fecha: <?= $fecha; ?></h6>
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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Producto</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Importe</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Producto</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Importe</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        
                        $listaProductosPedido = ListarDetallesPedido($idPedido) ;

                        foreach ($listaProductosPedido as $producto) {

                            $productoInfo = selectProdSiteProducto($producto['idProducto']);

                            $costeTotalProducto = $producto['precio'] * $producto['cantidad'];
                        ?>
                            <tr>
                                <td><?= $producto['idProducto']; ?></td>
                                <td><?= $productoInfo['nombre']; ?></td>
                                <td><?= $producto['cantidad']; ?></td>
                                <td><?= $costeTotalProducto; ?></td>
                            </tr>
                        <?php } // end del listado de pedidos. ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
<!-- /.container-fluid -->
<?php include('./inc/footer.php'); ?>