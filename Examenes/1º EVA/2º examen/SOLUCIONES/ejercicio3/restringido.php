<?php session_start(); ?>
<?php
	$pagina = "Restringido";
	if(isset($_SESSION['conectado'])){
		$msj="Bienvenido";
	}else{
		$msj="Acceso restringido";
	}
?>
<?php include("encabezado.php");  ?> 
  <main>
	<h2><?= $msj ?></h2>  
  </main>  
<?php include("footer.php");  ?>   