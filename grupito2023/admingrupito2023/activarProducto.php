<?php session_start(); ?>
<?php include('./inc/funciones.php'); ?>
<?php include('./inc/bbdd.php'); ?>
<?php
if(!isset($_SESSION['user'])) {
     
    header("location: index.php");
    exit;
     
} else {

    $nameUser= $_SESSION['user']['nombre'];

}
?>
<?php
$idProducto = recoge('idProducto');
 
if (isset($idProducto)) {

    activarProdcuto($idProducto);
    
}

header("location: tablaProductos.php");
exit;
?>