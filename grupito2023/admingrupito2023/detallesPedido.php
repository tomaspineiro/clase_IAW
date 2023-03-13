<?php $titulo="Detalles de Pedidos"; ?>
<?php include('./inc/header.php'); ?>
<?php
$idPedido = recoge('idPedido');

$row = ListarDetallesPedido($idPedido);
print_r($row);
exit;

?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-center">Pedido: <?= $idPedido; ?></h6>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nombre:</li>
                                <li class="list-group-item">Apellidos:</li>
                                <li class="list-group-item">Telefono:</li>
                                <li class="list-group-item">Correo:</li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul sta>
                                <li>Dirección:</li>
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
                        
                        $listaPedidos = listarPedidos();

                        foreach ($listaPedidos as $pedido) {
                        ?>
                        <!-- falta un <a></a> para ver los de talles de cada pedido  -->
                        <tr>
                            <td><?= $pedido['idPedido']; ?></td>
                            <td><?= $pedido['fecha']; ?></td>
                            <td><?= $pedido['estado']; ?></td>
                            <td><?= $pedido['costeTotal']; ?></td>
                        </tr>
                        <?php } // end del listado de pedidos. ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
<!-- /.container-fluid -->
<?php include('./inc/footer.php'); ?>