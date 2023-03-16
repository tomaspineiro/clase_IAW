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
<?php $titulo="Productos"; ?>
<?php include('./inc/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Productos</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <a class="btn btn-outline-primary" href="nuevoProducto.php">Añadir Producto</a>
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID producto</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Precio Oferta</th>
                            <th>online</th>
                            <th>Detalles</th>
                            <th>Drop</th>
                            <th>Activar</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <?php
                        
                        $listaProductos = seleccionarTodasProductos();

                        foreach ($listaProductos as $producto) {
                        ?>
                        <tr>
                            <td><?= $producto['idProducto']; ?></td>
                            <td><?= $producto['nombre']; ?></td>
                            <td><?= $producto['precio']; ?></td>
                            <td><?= $producto['precioOferta']; ?></td>
                            <td><?= $producto['online']; ?></td>
                            <td><a href="detallesProducto.php?idProducto=<?= $producto['idProducto']; ?>" class="btn btn-secondary">Detalle</a></td>
                            <td><a href="borrarProducto.php?idProducto=<?= $producto['idProducto']; ?>" class="btn btn-danger">Drop</a></td>
                            <td><a href="activarProducto.php?idProducto=<?= $producto['idProducto']; ?>" class="btn btn-success">Activar</a></td>
                        </tr>
                        <?php } // end del listado de Productos. ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- DATA-Tables: para las tablas, paginación y como Ordenarlas.  -->
<script>
  var table = document.querySelector("#table");

  var dataTable = new DataTable(table, {
    searchable : true,
    perPage: 6, 
    perPageSelect: [3, 6, 9, 12],

    labels: {
      placeholder: "Buscar tarea...",
      perPage: "{Select}",
      noRows: "Tareas no encontrada",
      info: "Tareas de {start} a {end} de {rows} tareas"
    }
  });
</script>

<?php include('./inc/footer.php'); ?>