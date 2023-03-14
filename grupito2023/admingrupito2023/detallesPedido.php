<?php $titulo="Detalles de Pedidos"; ?>
<?php include('./inc/header.php'); ?>
<?php
$idPedido = recoge('idPedido');
$idUsuario = recoge('idUsuario');
$fecha = recoge('fecha');
$estadoActual = recoge('estado');

$rowUser = seleccionarUsuarioTODO($idUsuario);

$rowsEstados = todosEstados();

?>
<?php function formularioDetalesPEdido($rowUser,$rowsEstados,$estadoActual,$fecha,$idUsuario,$idPedido) { ?>
    
        <from>
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
                                <select class="form-select" aria-label="select example" name="estado" id="estado >
                                    <option selected><?= $estadoActual; ?></option>
                                    <?php
                                    foreach ($rowsEstados as $estado){
                                    ?>
                                    <option value="<?= $estado['idEstado']?>"><?= $estado['estado']; ?></option>
                                    <?php } // END del foreach de estados?>
                                </select>

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID Producto</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Importe</th>
                            </tr>
                        </thead>
                        
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
            
        </from> 
    <?php } // END de la funcion formularioDetalesPEdido ?>
<?php 
if (!isset($_REQUEST['btnEnviar'])) {

    formularioDetalesPEdido($rowUser, $rowsEstados, $estadoActual,$fecha,$idUsuario,$idPedido );

} else {
    $estadoActual = recoge('estado');

}
?>
<!-- /.container-fluid -->

<!-- DATA-Tables: para las tablas, paginación y como Ordenarlas.  -->
<script>
  var table = document.querySelector("#table");

  var dataTable = new DataTable(table, {
    searchable : true,
    perPage: 6, 
    perPageSelect: [3, 6, 9, 12],

    labels: {
      placeholder: "Buscar Productos...",
      perPage: "{Select}",
      noRows: "Productos no encontrada",
      info: "Productos de {start} a {end} de {rows} Productos"
    }
  });
</script>

<?php include('./inc/footer.php'); ?>