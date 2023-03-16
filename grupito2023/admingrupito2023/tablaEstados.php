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
<?php $titulo="Estados"; ?>
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
                <a class="btn btn-outline-primary" href="nuevoEstado.php">Añadir Estado</a>
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Estado</th>
                            <th>Nombre</th>
                            <th>activo</th>
                            <th>modificar</th>
                            <th>borrar</th>
                            <th>activar</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <?php
                        
                        $listaEstados = todosEstados();

                        foreach ($listaEstados as $estado) {
                        ?>
                        <tr>
                            <td><?= $estado['idEstado']; ?></td>
                            <td><?= $estado['estado']; ?></td>
                            <td><?= $estado['activo']; ?></td>
                            <td><a href="editarEstado.php?idEstado=<?= $estado['idEstado']; ?>" class="btn btn-secondary">Detalle</a></td>
                            <td><a href="borrarEstado.php?idEstado=<?= $estado['idEstado']; ?>" class="btn btn-danger">drop</a></td>
                            <td><a href="activarEstado.php?idEstado=<?= $estado['idEstado']; ?>" class="btn btn-success">activar</a></td>
                        </tr>
                        <?php } // end del listado de pedidos. ?>
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