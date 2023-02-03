<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
if (!isset($_SESSION["usuario"])){
  header("location: index.php?error=1");
  exit;
}

$row_count = 6;
if(isset($_REQUEST["pag"])) {
  
  $pag = recoge("pag"); 
  $offset = ( $pag - 1) * $row_count; 
} else {
  
  $pag = 1;
  $offset = 0;
}

$tareas = seleccionarTareasPaginadas($offset, $row_count);
$numeroRow = NumeroDeTareas()['numeroRow'];

$numeroPag = ceil($numeroRow/$row_count); 

?>

<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>

  <div>
      <a href="./insertar.php" class="btn btn-secondary">Insertar</a>

      <a href="./logout.php" class="btn btn-secondary text-end">Salir</a>
      <a href="./fileCV.php" class="btn btn-secondary text-end">CV</a>
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
          <a href="./borrar.php?idTarea=<?= $idTarea; ?>" class="btn btn-danger" onclick="return confirm('Estás seguro de borrar la Tarea <?= $idTarea ?>?');">Borrar</a> <!-- -->
        </td>
      </tr>
      <?php } ?>

    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <?php if (($pag) && ($pag != 1)) {?>
      <li class="page-item">
        <a class="page-link" href="./listado.php?pag=<?= $pag - 1; ?>" aria-label="Previous">
          <span aria-hidden="true">
            &laquo;
          </span>
        </a>
      </li>
      <?php } ?>
      
      <?php if ($pag  > 1) {?>
      <li class="page-item">
        <a class="page-link" href="listado.php?pag=1">
          1
        </a>
      </li>
      <?php } ?>
      
    <?php
    if ($pag >  2 ) {
    ?>
        <li class="page-item">
          <span class="page-link" href="#">
            ...
          </span>
        </li>
    <?php 
    } 
    ?>
    <?php 
    for ($i=($pag); ($i < ($pag+4)) && ($i < $numeroPag); $i++) { 
    ?>
      <li class="page-item">
        <a class="page-link" href="listado.php?pag=<?= $i; ?>">
          <?= $i; ?>
        </a>
      </li>
    <?php
    }
    ?>
      <?php if ($pag < ( $numeroPag - 2) ) {?>
        <li class="page-item">
          <span class="page-link" href="#">
            ...
          </span>
        </li>
      <?php } ?>
      <?php if ($pag == $numeroPag) {?>
        
        <li class="page-item">
          <a class="page-link" href="listado.php?pag=<?= $numeroPag - 2; ?>">
            <?= $numeroPag - 2; ?>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="listado.php?pag=<?= $numeroPag - 1; ?>">
            <?= $numeroPag - 1; ?>
          </a>
        </li>
      <?php } ?>
      
      <li class="page-item">
        <a class="page-link" href="listado.php?pag=<?= $numeroPag; ?>">
          <?= $numeroPag; ?>
        </a>
      </li>
      <?php if ($pag != $numeroPag) {?>
      <li class="page-item">
        <a class="page-link" href="listado.php?pag=<?= $pag + 1; ?>" aria-label="Next">
          <span aria-hidden="true">
            &raquo;
          </span>
        </a>
      </li>
      <?php } ?>
    </ul>
  </nav>

</main>

<?php include("inc/footer.php") ?>