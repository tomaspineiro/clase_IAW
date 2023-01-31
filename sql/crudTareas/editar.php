<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php include("inc/encabezado.php") ?>
<?php 
if (!isset($_SESSION["usuario"]) ){
  header("location: index.php?error=1");
  exit;
} 

$tarea = seleccionarTarea(recoge("idTarea"));

$idTarea = $tarea["idTarea"];
$nombre = $tarea["nombre"];
$descripcion = $tarea["descripcion"];
$prioridad = $tarea["prioridad"];

?>
<main class="container">
  
  <h1>Editar tareas</h1>
   
  <?php
    if (!isset($_REQUEST["btnEnviar"])) {

      formularioTarea($idTarea, $nombre, $descripcion, $prioridad);

    }  else {

        $idTarea = recoge("idTarea");
        $nombre = recoge("nombre");
        $descripcion = recoge("descripcion");
        $prioridad = recoge("prioridad");
        
        $errores = "";

        if ($idTarea=="") {
          $errores .= "<li>Vuelve a intentarlo</li>";
        }
        if ($nombre=="") {
            $errores .= "<li>la tarea tiene que tener un nombre</li>";
        }
        if ($descripcion=="") {
            $errores .= "<li>la tarea tiene que tener una descripcion</li>";
        }
        if ($prioridad=="") {
            $errores .= "<li>la tarea tiene que tener una prioridad</li>";
        }

        if ($errores!="") {
  ?>
            <div class="alert alert-danger" role="alert">
                <h1>Errores: </h1>
                <ul><?= $errores; ?></ul>
            </div>
  <?php

            formularioTarea($idTarea, $nombre, $descripcion, $prioridad);
        
        } else {

          $actualizado =  actualizarTarea( $idTarea, $nombre, $descripcion, $prioridad);
          
          if ($actualizado) {
?>
            <div class="alert alert-success" role="alert">
              <h2> Se a insertado correctamente con el id: <?= $actualizado; ?></h2>
            </div>
            <a href="./listado.php" class="btn btn-secondary">Volver al listado</a> 
<?php
          } else {
  ?>
            <div class="alert alert-danger" role="alert">
                <h1>No se ha actulizado la tarea con id: <?= $actualizado; ?></h1>
            </div>
            <a href="./listado.php" class="btn btn-secondary">Volver al listado</a> 
  <?php
          }
        }//else de insercion del campo. 
      }// de comprobacion del formularioTarea
  ?>

</main>

<?php include("inc/footer.php") ?>