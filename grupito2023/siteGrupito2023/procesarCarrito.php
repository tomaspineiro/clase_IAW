<?php session_start(); ?>
<?php include('./inc/funciones.php'); ?>
<?php
if ((!isset($_REQUEST["op"])) || (($_REQUEST['op']!="empty") && !isset($_REQUEST['id']))){

    header("location: index.php");
    exit;

}

$op = recoge('op');

if($op!="empty"){

    $id = recoge("id");
   
}

switch ($op) {
    
    case 'add':
        if(isset($_SESSION['carrito'][$id])) {
            $_SESSION['carrito'][$id]++;
        } else {
            $_SESSION['carrito'][$id]=1;
        }
        break;
    
    case 'remove':
        if(isset($_SESSION['carrito'][$id])) {
            $_SESSION['carrito'][$id]--;
            if($_SESSION['carrito'][$id] <= 0) {
                unset($_SESSION['carrito'][$id]);
            }
        }
        break;
    
    case 'empty':
        unset($_SESSION['carrito']);
        break;
    
    default:
        header("Location: index.php");
        break;

}

header("Location: carrito.php");
exit;
?>