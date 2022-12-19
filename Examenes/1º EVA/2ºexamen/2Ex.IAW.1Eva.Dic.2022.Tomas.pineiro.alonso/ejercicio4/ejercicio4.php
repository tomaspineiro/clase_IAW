<?php include("inc/funciones.php"); ?>
<?php function formulario($peso = "", $altura = "") {?>
  <form action="" method="post">
    <p>Escriba su peso en kilogramos y su altura en cm para calcular su índice de masa corporal.</p>
    
    <p><label for="peso">Peso</label><input type="float" name="peso" id="peso" value="<?= $peso;?>" />Kg</p>
    <p><label for="altura">Altura</label><input type="int" name="altura" id="altura" value="<?= $altura;?>"/>cm</p>	
      
    <p>
      <input type="submit" name="calcular" id="calcular" value="Calcular">
      <input type="reset" name="borrar" id="borrar" value="Borrar">
    </p>
  </form>
<?php } ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Índice de masa corporal.
    Tomás Piñeiro Alonso 
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="css/estilos.css" rel="stylesheet" type="text/css" title="Color" />  
</head>

<body>
  <section>
      <article>
        <h1>Índice de masa corporal</h1>
        <?php 
        if (!isset($_REQUEST['peso'])) {

          formulario();

        } else {

          $peso = (float)recoge('peso');
          $altura = (int)recoge('altura');

          $errores = '';

          if ($peso == "" ){

            $errores .= "<li>Tiene que indicar el peso </li>";

          } elseif ($peso < 0 ){
            
            $peso = "";
            $errores .= "<li>El peso tiene que ser mayor que 0 </li>";

          }
          
          if ($altura == ""){

            $errores .= "<li>Tiene que indicar el la aultra  </li>";

          } elseif (!is_int($altura) && ($altura < 0)){
            
            $altura = "";
            $errores .= "<li>La aultra tiene que ser un numero entero y mayor de 0 </li>";

          }

          if ($errores != ""){

            echo "<ul>$errores</ul>";
            formulario($peso, $altura);

          } else {

            $imc = imc($peso, $altura);
        ?>    
            <h2>Su IMC</h2>
            <p>Con un peso de <strong><?= $peso; ?>kg</strong> y una altura de <strong><?= $altura; ?> cm</strong>, su índice de masa corporal es <strong><?= $imc; ?></strong>.</p>

            <p>Un imc muy alto indica obesidad. Los valores "normales" de imc están entre 20 y 25, pero esos límites dependen de la edad, del sexo, de la constitución física, etc.</p>
        <?php
          } // else de comprobacion de que no hay errores
        } // cierre de formulario
        ?>    
    </article>
  </section>
  	
	<footer>
	<p>Tomás Piñeiro Alonso</p>
	</footer>
</body>
</html>
