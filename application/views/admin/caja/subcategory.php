    <option value="0-0">Seleccionar</option>
<?php foreach ($listado as $lista): ?>
    <option value="<?php echo $lista['id'].'-'.$lista['descripcion']; ?>"><?php echo $lista['descripcion']; ?></option>
<?php endforeach ?>