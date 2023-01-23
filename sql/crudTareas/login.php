<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
?>
<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>
  function formulario($idTarea="", $nombre="", $descripcion="", $prioridad="") {
 ?>
    <form action="" method="GET" >
        <div class="mb-3">
            <label for="idTarea" class="form-label">Id Tarea</label>
            <input type="text" class="form-control" id="idTarea"name="idTarea" value="<?= $idTarea; ?>" readonly="readonly">
        </div>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"name="nombre" value="<?= $nombre; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
    </form>
  

</main>

<?php include("inc/footer.php") ?>