<?php session_start(); ?>
<?php $siteWeb = "conectar";?>
<?php include("inc/encabezado.php"); ?>
  <main>
    <?php $_SESSION["activo"] = 1 ; ?>
    <h2>Usted se ha conectado</h2>
  </main>  
<?php include("inc/footer.php"); ?>
