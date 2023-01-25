<?php session_start(); ?>
<?php
	$pagina = "Desconectar";
	unset($_SESSION['conectado']);
	session_destroy();
	$msj = "Usted se ha desconectado";
?>
<?php include("encabezado.php");  ?> 
  <main>
	<h2><?= $msj ?></h2>
  
  </main>  
<?php include("footer.php");  ?>   