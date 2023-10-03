
    <option value="0">Seleccionar</option>
<?php foreach ($listado as $lista): ?>
    <option value="<?php echo $lista['id'].'-'.$lista['fc'].'-'.$lista['saldo']; ?>"><?php echo $lista['fc']; ?></option>
<?php endforeach ?>