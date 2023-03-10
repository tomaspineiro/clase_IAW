<?php session_start(); ?>
<?php 
if (isset($_SESSION['user'] ) ) {
    
    unset($_SESSION['user']);
    
}
    
    header("location: index.php");
    exit;

?>