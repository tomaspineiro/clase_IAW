<?php session_start(); ?>
<?php ob_start(); ?>

<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php include('inc/encabezado.php'); ?>

<?php
if (!isset($_SESSION["usuario"])){
  header("location: index.php?error=1");
  exit;
}

$tareas = seleccionarTodasTareas();

?>

<?php include("inc/encabezado.php") ?>

<main class="container">
  
  <h1>Mis tareas</h1>

  <table class="table" id="tablas-tareas">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Prioridad</th>
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
        
      </tr>
      <?php } ?>

    </tbody>
  </table>

</main>


<?php include('inc/footer.php'); ?>

<?php

    $html= ob_get_clean();
    //echo $html;

    
    require_once("./lib/dompdf/autoload.inc.php");
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $options =  $dompdf -> getOptions();
    $options -> set(array('isRemoteEnabled' => true));

    $dompdf -> setOptions($options);

    $dompdf -> loadHtml($html);
    $dompdf -> setPaper('A4');

    $dompdf -> render();
    $dompdf -> stream('listado.pdf', array("attachement" => false));


?>