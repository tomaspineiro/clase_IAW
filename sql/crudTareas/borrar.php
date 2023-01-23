<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
  
  $idTarea = recoge("idTarea");
  
  $borrado = delecteTarea($idTarea);

?>
<?php include("inc/encabezado.php") ?>
<main class="container">
  <h1>Borrar tarea</h1>
   <?php if ($borrado) {?>  
    <div class="alert alert-success" role="alert">
      <h2> Se a borrado corectamente la tarea con el id: <?= $idTarea; ?></h2>
    </div>
    <?php } else { ?>
      <div class="alert alert-danger" role="alert">
        <h2> No se a borrado la tarea <?= $idTarea; ?> corectamente. </h2>
      </div>
    <?php } ?>

  <a href="./listado.php" class="btn btn-secondary">Valver al listado</a> 

</main>

<?php include("inc/footer.php") ?>