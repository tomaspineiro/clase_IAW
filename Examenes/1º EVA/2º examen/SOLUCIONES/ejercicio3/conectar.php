<?php session_start(); ?>
<?php
	$pagina = "Conectar";
	
	$_SESSION['conectado']=1;
	$msj = "Usted se ha conectado";
?>
<?php include("encabezado.php");  ?> 
  <main>
	<h2><?= $msj ?></h2>
  
  </main>  
<?php include("footer.php");  ?>   