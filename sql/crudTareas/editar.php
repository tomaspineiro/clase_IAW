<?php include("inc/bbdd.php") ?>
<?php

  $tarea = seleccionarTarea($idTarea);

  $idTarea = $tarea["idTarea"];
  $nombre = $tarea["nombre"];
  $descripcion = $tarea["descripcion"];
  $prioridad = $tarea["prioridad"];

?>
?>
<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Editar tareas</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripci�</th>
        <th scope="col">Prioridad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $idTarea ?></th>
        <td><?= $nombre ?></td>
        <td><?= $descripcion ?></td>
        <td><?= $prioridad ?></td>
      </tr>
    </tbody>
  </table>
  <button type="button" class="btn btn-light"><a href="./insertar.php">Insertar</a></button>

</main>

<?php include("inc/footer.php") ?>