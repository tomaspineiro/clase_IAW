<?php $titulo="Detalles de Pedidos"; ?>
<?php include('./inc/header.php'); ?>
<?php

$idPedido = recoge('idPedido');
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-center">Pedido: <?= $idPedido; ?></h6>
            </div>
            <div class="card-body">
            
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