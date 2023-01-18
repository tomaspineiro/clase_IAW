<?php include("inc/bbdd.php") ?>
<?php
  $tareas = seleccionarTodasTareas();
?>
<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripció</th>
        <th scope="col">Prioridad</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ( $tareas as $tarea) {
          $idTareas = $tarea["idTareas"];
          $nombre = $tarea["nombre"];
          $descripcion = $tarea["descripcion"];
          $prioridad = $tarea["prioridad"];
      ?>
      <tr>
        <th scope="row"><?= $idTareas ?></th>
        <td><?= $nombre ?></td>
        <td><?= $descripcion ?></td>
        <td><?= $prioridad ?></td>
        <td>
          <button type="button" class="btn btn-success"><a href="./editar.php">Editar</a></button>
          <button type="button" class="btn btn-danger"><a href="./borrar.php">Borrar</a></button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <button type="button" class="btn btn-light"><a href="./insertar.php">Insertar</a></button>

</main>

<?php include("inc/footer.php") ?>