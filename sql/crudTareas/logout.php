<?php session_start(); ?>
<?php include("inc/bbdd.php") ?>
<?php include("inc/funciones.php")?>
<?php
if (!isset($_SESSION["usuario"]) ){
    header("location: index.php");
    exit;
}

unset($_SESSION["usuario"]);

?>
<?php include("inc/encabezado.php") ?>

<main class="container">
  
    <h1>Mis tareas</h1>
    
    <div class="alert alert-secondary" role="alert">
        ha cerado sesion corectamente 
    </div>
    <div>
        <a href="./index.php" class="btn btn-secondary text-end">Entrar</a>
    </div>

</main>
<?php include("inc/footer.php") ?>