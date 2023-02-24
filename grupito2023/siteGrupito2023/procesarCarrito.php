<?php session_start(); ?>
<?php include('./inc/bbdd.php'); ?>
<?php include('./inc/funciones.php'); ?>
<?php
if (!isset($_REQUEST["id"]) || !isset($_REQUEST["op"])) {

    header("location: index.php");
    exit;

}

$idProducto = recoge("id");
$op = recoge('op');


switch ($op) {
    
    case 'add':
        # code...
        break;
    
    case '':
        # code...
        break;
    
    case 'add':
        # code...
        break;
    case 'add':
        # code...
        break;
    
    
    default:
        # code...
        break;
}


echo "$idProducto $op";


?>