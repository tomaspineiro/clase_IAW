<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

    <head>
    <!-- Este deseño baséase nun deseño web libre chamado CrystalX e que se pode descargar desde
         a dirección http://www.oswd.org/design/preview/id/3465 -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="es" />

    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>A miña web</title>
    <meta name="description" content="O meu sitio web" />
    <meta name="keywords" content="sitio, web" />
    
    <link rel="shortcut icon" href="imaxes/Icono.ico"/>
    <link rel="index" href="/" title="Inicio" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="exercicio.css" />
	
</head>

<body>

<!-- Contenedor -->
<div id="contenedor">


    <!-- Cabecera -->
    <div id="cabecera">

        <!-- Logo -->
        <h1 id="logo"><a href="index.php" title="Mi sitio web">O meu sitio web</a></h1>

        <!-- Buscador -->
        <div id="buscador">
            <form action="" method="get">
                <fieldset>
                	<legend>Buscador</legend>
                    <input type="text" name="busqueda" size="30" />
                    <input type="submit" name="botonbuscar" value="Buscar" />
                </fieldset>
            </form>
        </div> <!-- /buscador -->

		<div class="clear"></div>
    </div> <!-- /cabecera -->
    
    <!-- Menú principal -->
     <div id="menu">
            <ul>
                <li><a href="index.php"<?php if($pagina=="index"){ echo 'class="seleccionado"';} ?>>Inicio</a></li>
                <li><a href="blog.php" <?php if($pagina=="blog"){ echo 'class="seleccionado"';}?>>Blog</a></li>
                <li><a href="sobremin.php" <?php if($pagina=="sobremin"){ echo 'class="seleccionado"';}?>>Sobre min</a></li>
                <li><a href="fotos.php" <?php if($pagina=="fotos"){ echo 'class="seleccionado"';}?>>Fotos</a></li>
                <li><a href="contacto.php" <?php if($pagina=="contacto"){ echo 'class="seleccionado"';}?>>Contacto</a></li>
                <li><a href="enlaces.php" <?php if($pagina=="enlaces"){ echo 'class="seleccionado"';}?>>Enlaces</a></li>
            </ul>

        <div class="clear"></div>
     </div> <!-- /menú principal -->
