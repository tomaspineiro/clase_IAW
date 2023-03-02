<?php session_start(); ?>
<?php include('inc/bbdd.php'); ?>
<?php include('inc/funciones.php'); ?>
<?php // Indicamos el site 
$nameSite="productos";
if (isset($_SESSION['user'] ) ) {

        $nombre = $_SESSION['user']; 
        
} 
?>
<?php // paginacion
// datos:
$row_count = 8;

$numRow = cantidadProductosOnlen()['numRow'];
$numPag = ceil($numRow/$row_count); 

if(isset($_REQUEST["pag"])) {
  
  $pag = recoge("pag"); 
  $offset = ( $pag - 1) * $row_count;

} else {

  $pag = 1;
  $offset = 0;

}

$productos = seleccionarProductosPaginadas($offset, $row_count);
echo $numPag;
?>
<?php include("./inc/header.php"); ?>
        <!-- Section Productos-->
        <?php 
                // esta es la zona donde se mostraran todos los productos que disponemos 
                mostrarVariosProductos($productos);
        ?>
        <!-- Cierre Section Productos-->
        <!-- Section Paginacion -->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-0">
                <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                                <?php if ($pag <= 1) { ?> 
                                        <li class="page-item disabled">
                                                <a class="page-link" >Previous</a>
                                        </li>
                                <?php } else { ?>
                                        <li class="page-item">
                                                <a class="page-link" href="productos.php?pag=<?= $pag - 1; ?>">Previous</a>
                                        </li>
                                <?php } ?>
                                <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                                <?php if ($pag >= $numPag) { ?> 
                                        <li class="page-item disabled">
                                                <a class="page-link" >Next</a>
                                        </li>
                                <?php } else { ?>
                                        <li class="page-item">
                                                <a class="page-link" href="productos.php?pag=<?= $pag + 1; ?>">Next</a>
                                        </li>
                                <?php } ?>
                        </ul>
                </nav>
            </div>
        </section>
        <!-- Cierre Section Paginacion -->

 <?php include("inc/footer.php"); ?>