<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php

  $tarea = seleccionarTarea(recoge("idTarea"));

  $idTarea = $tarea["idTarea"];
  $nombre = $tarea["nombre"];
  $descripcion = $tarea["descripcion"];
  $prioridad = $tarea["prioridad"];
?>
<?php include("inc/encabezado.php") ?>
<main class="container">
    
    <h1>Borrar tarea</h1>
    <div class="text-end">
        <a href="./listado.php" class="btn btn-secondary">Cancelar</a>
    </div>
    
    <?php mostrarTarea($idTarea, $nombre, $descripcion, $prioridad); ?>


</main>

<?php include("inc/footer.php") ?>