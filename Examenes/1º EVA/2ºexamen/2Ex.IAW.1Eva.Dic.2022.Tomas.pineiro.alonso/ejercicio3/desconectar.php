<?php session_start(); ?>
<?php $siteWeb = "desconectar";?>
<?php include("inc/encabezado.php"); ?>
  <main>
	  <?php unset($_SESSION["activo"]); ?>
    <h2>Usted se ha desconectado</h2>
  </main>  
<?php include("inc/footer.php"); ?>
