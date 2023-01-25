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

      formulario($idTarea, $nombre, $descripcion, $prioridad);
      
      echo '<a href="./listado.php" class="btn btn-secondary">cancelar</a>';

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

            formulario($idTarea, $nombre, $descripcion, $prioridad);
            echo '<a href="./listado.php" class="btn btn-secondary">cancelar</a>';
        
        } else {

          $actualizado =  actualizarTarea( $idTarea, $nombre, $descripcion, $prioridad);
          
          if ($actualizado) {
?>
            <div class="alert alert-success" role="alert">
              <h2> Se a inssertado corectamente con el id: <?= $actualizado; ?></h2>
            </div>
            <a href="./listado.php" class="btn btn-secondary">Valver al listado</a> 
<?php
          } else {
  ?>
            <div class="alert alert-danger" role="alert">
                <h1>No se ha actulizado la tarea con id: <?= $idTarea; ?></h1>
            </div>
            <a href="./listado.php" class="btn btn-secondary">Valber al listado</a> 
  <?php
          }
        }//else de insercion del campo. 
      }// de comprobacion del formulario
  ?>

</main>

<?php include("inc/footer.php") ?>