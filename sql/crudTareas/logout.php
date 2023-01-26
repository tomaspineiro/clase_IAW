<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
if (!isset($_SESSION["usuario"]) ){
    header("location: listado.php");
    exit;
} 
?>
<?php include("inc/encabezado.php") ?>

<main class="container">
  
    <h1>Mis tareas</h1>
    
    <div class="alert alert-secondary" role="alert">
        ha cerado sesion corectamente 
    </div>

    


</main>
<?php include("inc/footer.php") ?>