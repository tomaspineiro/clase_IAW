<?php session_start(); ?>
<?php include("./inc/bbdd.php"); ?>
<?php include("./inc/funciones.php"); ?>
<?php
$nameSite="producto";

if (isset($_REQUEST['idProducto'])) {
    
    $idProducto = recoge('idProducto');

    $producto = selectProdSiteProducto($idProducto);

} else {
   
    header("location: index.php");
    exit;
}

?>
<?php include("./inc/header.php"); ?>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $producto['imagenG']; ?>" alt="<?= $producto['imagenG']; ?>" /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">IDPRODUCTO:<?= $producto['idProducto']; ?></div>
                        <h1 class="display-5 fw-bolder"><?= $producto['nombre']; ?></h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through"><?= $producto['precio']; ?></span>
                            <span><?= $producto['precioOferta']; ?></span>
                        </div>
                        <p class="lead"><?= $producto['intoDescripcion']; ?></p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 align-items-center my-5">
                    <p class="lead"><?= $producto['Descripcion']; ?></p>
                </div>
            </div>
        </section>
<?php include("inc/footer.php"); ?>