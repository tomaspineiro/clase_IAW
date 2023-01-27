<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php
if (!isset($_SESSION["usuario"]) ){
  header("location: index.php?error=1");
  exit;
}

$row_count = 6;

if(isset($_REQUEST["pag"])) {
  
  $pag = (  recoge("pag") - 1) * $row_count; 

} else {
  
  $pag = 0;

}

$tareas = seleccionarTareasPaginadas($pag, $row_count);

?>

<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>
  <div class="text-end">
    <a href="./insertar.php" class="btn btn-secondary">Insertar</a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Prioridad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ( $tareas as $tarea) {
          $idTarea = $tarea["idTarea"];
          $nombre = $tarea["nombre"];
          $descripcion = $tarea["descripcion"];
          $prioridad = $tarea["prioridad"];
      ?>
      <tr>
        <th scope="row"><?= $idTarea ?></th>
        <td><?= $nombre ?></td>
        <td><?= $descripcion ?></td>
        <td><?= $prioridad ?></td>
        <td>
          <a href="./editar.php?idTarea=<?= $idTarea; ?>" class="btn btn-success" >Editar</a>
          <a href="./borrar.php?idTarea=<?= $idTarea; ?>" class="btn btn-danger" onclick="return confirm('Est�s seguro de borrar la Tarea <?= $idTarea ?>?');">Borrar</a> <!-- -->
        </td>
      </tr>
      <?php } ?>

    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <?php if ($pag) {?>
      <li class="page-item">
        <a class="page-link" href="listado.php?pag=<?= $pag - 1; ?>" aria-label="Previous">
          <span aria-hidden="true">
            &laquo;
          </span>
        </a>
      </li>
      <?php } ?>
      <li class="page-item">
        <a class="page-link" href="#?pag=1">
          1
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#pag=2">
          2
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#pag=3">
          3
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">
            &raquo;
          </span>
        </a>
      </li>
    </ul>
  </nav>

</main>

<?php include("inc/footer.php") ?>