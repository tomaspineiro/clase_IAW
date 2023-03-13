<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
if (!isset($_SESSION["usuario"])){
  header("location: index.php?error=1");
  exit;
}

$tareas =seleccionarTodasTareas();
 

?>

<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>

  <div>
      <a href="./insertar.php" class="btn btn-secondary">Insertar</a>

      <a href="./logout.php" class="btn btn-secondary text-end">Salir</a>
      <a href="./generarPDF.php" class="btn btn-secondary text-end">PDF</a>
  </div>
  <table class="table" id="tabla-tareas">
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
  
</main>
<script>
  var table = document.querySelector("#tabla-tareas");

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

<?php include("inc/footer.php") ?>