<?php session_start(); ?>
<?php
	$pagina = "Inicio";
	
	if(isset($_SESSION['conectado'])){
		$msj="Conectado";
	}else{
		$msj="DESConectado";
	}
?>
<?php include("encabezado.php");  ?> 
  <main>
	<h2><?= $msj ?></h2>  
  </main>  
<?php include("footer.php");  ?>   