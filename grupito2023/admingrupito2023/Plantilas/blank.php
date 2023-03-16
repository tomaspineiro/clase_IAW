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
<?php include('./inc/header.php'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        <div class="card-body">
            <div class="table-responsive">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

<?php include('./inc/footer.php'); ?>
