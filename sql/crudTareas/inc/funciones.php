<?php
function recoge($var, $m = "")  {
	
    $tmp = is_array($m) ? [] : "";
    if (isset($_REQUEST[$var])) {
        if (!is_array($_REQUEST[$var]) && !is_array($m)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$var]));
        } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
            $tmp = $_REQUEST[$var];
            array_walk_recursive($tmp, function (&$valor) {
                $valor = trim(htmlspecialchars($valor));
            });
        }
    }
    return $tmp;
}
?>
<?php
function formulario($idTarea="", $nombre="", $descripcion="", $prioridad="") {
 ?>
    <form action="" method="POST" >
        <div class="mb-3">
            <label for="idTarea" class="form-label">Id Tarea</label>
            <input type="text" class="form-control" id="idTarea"name="idTarea" value="<?= $idTarea; ?>" readonly="readonly">
        </div>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre"name="nombre" value="<?= $nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?= $descripcion; ?>">
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="baja"
            <?php if ($prioridad=="baja") { echo "checked='checked'"; } ?>>
            <label class="form-check-label" for="baja">baja</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="media"
            <?php if ($prioridad=="media") { echo "checked='checked'"; } ?>>
            <label class="form-check-label" for="media">media</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="prioridad" id="prioridad" value="alta"
            <?php if ($prioridad=="alta") { echo "checked='checked'"; } ?>>
            <label class="form-check-label" for="alta">alta</label>
        </div>
        <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
    </form>
<?php } // montrar formulario ?>
<?php function mostrarTarea($idTarea, $nombre, $descripcion, $prioridad) { ?>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripci�</th>
        <th scope="col">Prioridad</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?= $idTarea ?></th>
        <td><?= $nombre ?></td>
        <td><?= $descripcion ?></td>
        <td><?= $prioridad ?></td>
      </tr>
    </tbody>
  </table>

<?php } // cerrar fubncion mostrarTarea?>