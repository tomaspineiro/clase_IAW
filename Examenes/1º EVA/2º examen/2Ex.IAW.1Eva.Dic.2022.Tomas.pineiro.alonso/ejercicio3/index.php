<?php session_start(); ?>
<?php $siteWeb = "index";?>
<?php include("inc/encabezado.php"); ?>
  <main>
  <?php 
  if (isset($_SESSION["activo"]) ){
    
      echo "<h2>Conectado</h2>";
    
  } else {
      
    echo "<h2>Desconectado</h2>";
    
  }
  ?>
  
  </main>  
<?php include("inc/footer.php"); ?>
