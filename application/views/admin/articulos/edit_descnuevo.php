<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Agregar Articulo</h3>
        
        </div>
        
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
            
            <div class="card card-outline-info">
                <div class="card-header">
                    

                </div>
                <div class="card-body">
                   
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Categoria </label>
                                        <div class="col-md-9 controls">
                                            <select class="form-control custom-select" name="categoriaed" id="categoriaed" aria-invalid="false">
                                                <?php 
                                                $idcategoria = "";
                                                foreach ($categorias as $cate){
                                                    if($cate['categoria'] == $articulos->categoria){
                                                        $idcategoria = $cate['id'];
                                                    }
                                                } ?>
                                                    <option value="<?php echo $idcategoria; ?>"><?php echo $articulos->categoria; ?></option>
                                                    <?php foreach ($categorias as $cat): ?>
                                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categoria']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Subcat </label>
                                        <div class="col-md-9 controls">
                                            <select name="subcategoria" id="subcategoria" class="form-control" aria-invalid="false" >
                                                 <?php 
                                                $idsub = "";
                                                foreach ($sucat as $suca){
                                                    if($suca['subcategoria'] == $articulos->subcategoria){
                                                        $idsub = $suca['id'];
                                                    }
                                                } ?>
                                                 <option value="<?php echo $idsub; ?>"><?php echo $articulos->subcategoria; ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Articulo </label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="descripcion" name="descripcion" class="form-control" value="<?php echo $articulos->descripcion; ?>" required data-validation-required-message="El Articulo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Marca </label>
                                        <div class="col-md-9 controls">
                                            <select class="form-control custom-select" name="marca" id="marca" aria-invalid="false">
                                                 <?php 
                                                $idsub = "";
                                                foreach ($marcas as $mark){
                                                    if($mark['marca'] == $articulos->marca){
                                                        $idmarca = $mark['id'];
                                                    }
                                                } ?>
                                                    <option value="<?php echo $idmarca; ?>"><?php echo $articulos->marca; ?></option>
                                                    <?php foreach ($marcas as $marca): ?>
                                                        <option value="<?php echo $marca['id']; ?>"><?php echo $marca['marca']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Capacidad</label>
                                        <div class="col-md-5 controls">
                                            <select id="um" name="um" class="form-control custom-select">
                                            <?php 
                                                $idcap = "";
                                                foreach ($unidades as $ud){
                                                    if($ud['unidad'] == $articulos->unidad){
                                                        $idcap = $ud['id'];
                                                    }
                                                } ?>

                                            <option value="<?php echo $idcap; ?>"><?php echo $articulos->unidad; ?></option>
                                            <?php foreach ($unidades as $unidad): ?>
                                                        <option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['unidad']; ?></option>
                                                    <?php endforeach ?>
                                            </select>   
                                        </div>
                                      
                                       
                                        <div class="col-md-4 controls">
                                            <input type="text" id="capacidad" name="capacidad" class="form-control" value="<?php echo $articulos->capacidad; ?>" required data-validation-required-message="El Nombre es requerido">
                                        </div>
                                    
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Modelo </label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="modelo" name="modelo" value="<?php echo $articulos->modelo; ?>" class="form-control" required data-validation-required-message="El Modelo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tipo </label>
                                        <div class="col-md-9 controls">
                                           <select id="tipo" name="tipo" class="form-control custom-select">
                                            <?php 
                                                $idtipo = "";
                                                foreach ($tipos as $ti){
                                                    if($ti['tipo'] == $articulos->tipo){
                                                        $idtipo = $ti['id'];
                                                    }
                                                } ?>
                                            <option value="<?php echo $idtipo; ?>"><?php echo $articulos->tipo; ?></option>
                                            <?php foreach ($tipos as $tipo): ?>
                                                        <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['tipo']; ?></option>
                                                    <?php endforeach ?>
                                            </select>   
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Otra </label>
                                        <div class="col-md-9 controls">
                                            <select id="caracteristica" name="caracteristica" class="form-control custom-select">
                                            <?php 
                                                $idcaract = "";
                                                foreach ($caracteristicas as $carac){
                                                    if($carac['caracteristica'] == $articulos->caracteristica){
                                                        $idcaract = $carac['id'];
                                                    }
                                                } ?>
                                            <option value="<?php echo $idcaract; ?>"><?php echo $articulos->caracteristica; ?></option>
                                            <?php foreach ($caracteristicas as $cara): ?>
                                                        <option value="<?php echo $cara['id']; ?>"><?php echo $cara['caracteristica']; ?></option>
                                                    <?php endforeach ?>
                                            </select>  
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                    

                    <!--segunda columna--->

                            <div class="col-md-6">

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Mas det </label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="detalle" name="detalle" value="<?php echo $articulos->detalle; ?>" class="form-control" required data-validation-required-message="El Modelo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Acciona </label>
                                        <div class="col-md-9 controls">
                                            <select id="accionamiento" name="accionamiento" class="form-control custom-select">
                                            <option value="<?php echo $articulos->accionamiento; ?>"><?php echo $articulos->accionamiento; ?></option>
                                            <option value="ninguno">ninguno</option>
                                            <option value="aire">aire</option>
                                            <option value="bateria">bateria</option>
                                            <option value="electrico">electrico</option>
                                            <option value="gas licuado">gas licuado</option>
                                            <option value="gas natural">gas natural</option>
                                            <option value="multigas">multigas</option>
                                            <option value="manual">manual</option>
                                            <option value="nafta">nafta</option>
                                            </select>  
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">An La Al </label>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="ancho" name="ancho" value="<?php echo $articulos->ancho; ?>" class="form-control" value="0" >
                                        </div>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="largo" name="largo" value="<?php echo $articulos->largo; ?>" class="form-control" value="0" >
                                        </div>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="alto" name="alto" value="<?php echo $articulos->alto; ?>" class="form-control" value="0" >
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Costo </label>
                                        <div class="col-md-4 controls">
                                            <input type="text" id="costo" name="costo" value="<?php echo $articulos->costo; ?>" class="form-control" required data-validation-required-message="el costo es requerido" min="0"  step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
">
                                        </div>
                                        <label class="control-label text-right col-md-2">Iva </label>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="iva" name="iva" value="<?php echo $articulos->iva; ?>" class="form-control" required data-validation-required-message="el costo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Markm <i class="fa fa-calculator text-info m-r-10" onclick="calMkm()"></i></label>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="markm" name="markm" value="<?php echo $articulos->markm; ?>" class="form-control" required data-validation-required-message="el margen es requerido">
                                        </div>
                                        <label class="control-label text-right col-md-2">Pvm <i class="fa fa-calculator text-info m-r-10" onclick="calpvm()"></i></label>
                                        <div class="col-md-4 controls">
                                            <input type="text" id="pvm" name="pvm" value="<?php echo $articulos->pvm; ?>" class="form-control" required data-validation-required-message="el precio es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Markup <i class="fa fa-calculator text-info m-r-10" onclick="calMkp()"></i></label>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="markup" name="markup" value="<?php echo $articulos->markup; ?>" class="form-control" required data-validation-required-message="el margen es requerido">
                                        </div>
                                        <label class="control-label text-right col-md-2">Pvp <i class="fa fa-calculator text-info m-r-10" onclick="calpvp()"></i></label>
                                        <div class="col-md-4 controls">
                                            <input type="text" id="pvp" name="pvp" value="<?php echo $articulos->pvp; ?>" class="form-control" required data-validation-required-message="el precio es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Estado <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <select id="estado" name="estado" class="form-control custom-select">
                                            <option value="disponible">disponible</option>
                                            <option value="nodisponible">nodisponible</option>
                                            </select>   
                                        </div>
                                        <input type="hidden" name="idart" id="idart" value="<?php echo $articulos->id; ?>">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            
                        </div>
                    </div>

         <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" onclick="editarArticulo()" class="btn btn-success">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                   
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->

</div>

<script type="text/javascript">

    function calpvm() {
    var num1 = parseFloat(document.getElementById("costo").value);
    var num2 = parseInt(document.getElementById("markm").value);
    var resultado = num1 * ((num2/100)+1);
    document.getElementById("pvm").value = resultado.toFixed(2);
}

function calMkm() {
    var num1 = parseFloat(document.getElementById("costo").value);
    var num2 = parseFloat(document.getElementById("pvm").value);
    var resultado = ((num2 / num1)-1)*100;
    document.getElementById("markm").value = resultado.toFixed(2);
}

    function calpvp() {
    var num1 = parseFloat(document.getElementById("costo").value);
    var num2 = parseInt(document.getElementById("markup").value);
    var resultado = num1 * ((num2/100)+1);
    document.getElementById("pvp").value = resultado.toFixed(2);
}

function calMkp() {
    var num1 = parseFloat(document.getElementById("costo").value);
    var num2 = parseFloat(document.getElementById("pvp").value);
    var resultado = ((num2 / num1)-1)*100;
    document.getElementById("markup").value = resultado.toFixed(2);
}

////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////




    
</script>