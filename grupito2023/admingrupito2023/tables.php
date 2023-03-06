<?php $titulo="Pedidos"; ?>
<?php include('./inc/header.php'); ?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Example</h6>
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
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Pedido</th>
                                            <th>Fecha</th>
                                            <th>Estado</th>
                                            <th>Coste Total</th>
                                            <th>Direcion</th>
                                            
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
                                            <td><?= $pedido['usuario']; ?></td>
                                            
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