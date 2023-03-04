<?php session_start(); ?>
<?php 
if (!isset($_SESSION['user'] ) ) {
    
    header("location: index.php");
    exit;
    
} else {
    
    unset($_SESSION['user']);
    
    header("location: index.php");
    exit;

}
?>