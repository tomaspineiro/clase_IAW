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
<?php $titulo="Pedidos"; ?>
<?php include('./inc/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabla de Usuario</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Usuario</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Typo</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Usuario</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Typo</th>
                            <th>Detalles</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        
                        $listaUsuarios = listarUsuarios();

                        foreach ($listaUsuarios as $usuario) {
                            $typoUser = $usuario['admin'] ? 'administrado' : 'Cliente' ;
                        ?>
                        <tr>
                            <td><?= $usuario['idUser']; ?></td>
                            <td><?= $usuario['nombre']; ?></td>
                            <td><?= $usuario['apellidos']; ?></td>
                            <td><?= $usuario['email']; ?></td>
                            <td><?= $typoUser; ?></td>
                            <td><a href="detallesUsuario.php?idUsuario=<?= $usuario['idUser']; ?>" class="">Detalle</a></td>
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