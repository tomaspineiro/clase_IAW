<?php session_start(); ?>

<?php

if(isset($_SESSION['user'])) {
     
    unset($_SESSION['user']['nombre']);
    unset($_SESSION['user']['idUser']);
    unset($_SESSION['user']['emial']);
    
} 

header("location: index.php");
exit;

?>