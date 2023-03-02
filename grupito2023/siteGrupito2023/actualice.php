<?php session_start(); ?>
<?php include("./inc/bbdd.php"); ?>
<?php include("./inc/funciones.php"); ?>
<?php 
if (isset($_REQUEST['idProducto'])) {
    
    $idProducto = recoge('idProducto');

    $producto = selectProdSiteProducto($idProducto);

    $_SESSION['carrito'][$idProducto] = 1;
}


header("location: carrito.php");
exit;
?>