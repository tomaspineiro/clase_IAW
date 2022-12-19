<?php session_start(); ?>
<?php $siteWeb = "restringido";?>
<?php include("inc/encabezado.php"); ?>
  <main>
	<?php 
  if (isset($_SESSION["activo"]) ){
    
      echo "<h2>Bienvenido</h2>";
    
  } else {
      
    echo "<h2>Acceso Restingido</h2>";
    
  }
  ?>
  
  </main>  
<?php include("inc/footer.php"); ?>
