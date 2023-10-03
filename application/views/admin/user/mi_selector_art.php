<div class="row" id="agreg" style="background-color: #E6E6FA;">
<div class="col-md-9">
        <div class="form-group row">
            <label class="control-label text-right col-md-2">Articulo </label>
            <div class="col-md-10 controls">
                
                    <select class="form-control custom-select"  name="articulo[]" aria-invalid="false" required>
                        <option value="">Select</option>
                        <?php foreach ($articulos as $articulo): ?>
                            <option value="<?php  echo $articulo['id'].'-'.$cn['descripcion'].' '.$cn['marca'].' '.$cn['modelo'].'-'.$articulo['costo']; ?>"><?php  echo $articulo['descripcion'].' '.$articulo['marca'].' '.$articulo['modelo']; ?></option>
                        <?php  endforeach ?>
                    </select>
               
            </div>
        </div>
    </div>
    <!--/span-->

    <div class="col-md-9">
        <div class="form-group row">
            <label class="control-label text-right col-md-2">CANTIDAD </label>
            <div class="col-md-10 controls">
                <input type="number" name="cantidad[]" class="form-control" value="1">
            </div>
        </div>
    </div>
</div>
    <!--/span-->
