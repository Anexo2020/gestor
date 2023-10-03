    <option value="0-0">Seleccionar</option>
<?php foreach ($listado as $lista): ?>
    <option value="<?php echo $lista['id'].'-'.$lista['subcategoria']; ?>"><?php echo $lista['subcategoria']; ?></option>
<?php endforeach ?>