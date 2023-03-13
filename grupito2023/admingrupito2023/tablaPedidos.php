<?php $titulo="Pedidos"; ?>
<?php include('./inc/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Pedidos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Coste Total</th>
                            <th>Direcion</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Pedido</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Coste Total</th>
                            <th>Direcion</th>
                            <th>Detalles</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        
                        $listaPedidos = listarPedidos();

                        foreach ($listaPedidos as $pedido) {
                        ?>
                        <tr>
                            <td><?= $pedido['idPedido']; ?></td>
                            <td><?= $pedido['fecha']; ?></td>
                            <td><?= $pedido['estado']; ?></td>
                            <td><?= $pedido['costeTotal']; ?></td>
                            <td><?= $pedido['direccion']; ?></td>
                            <td><a href="detallesPedido.php?idPedido=<?= $pedido['idPedido']; ?>&idUsuario=<?= $pedido['idUsuario']; ?>&fecha=<?= $pedido['fecha']; ?>" class="">Detalle</a></td>
                        </tr>
                        <?php } // end del listado de pedidos. ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php include('./inc/footer.php'); ?>