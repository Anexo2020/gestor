
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
                                        <label class="control-label text-right col-md-3">Categoria 
                                            <a data-toggle="modal" data-target="#Categorya" href="#"
                                        ><i class="fa fa-plus text-info m-r-10"></i></a></label>
                                        <div class="col-md-9 controls">
                                            <select class="form-control custom-select" name="categoria" id="categoria" aria-invalid="false">
                                                    <option value="0">Select</option>
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
                                        <label class="control-label text-right col-md-3">Subcat <a data-toggle="modal" data-target="#sbCategorya" href="#"
                                        ><i class="fa fa-plus text-info m-r-10"></i></a></label>
                                        <div class="col-md-9 controls">
                                            <select name="subcategoria" id="subcategoria" class="form-control" aria-invalid="false" ></select>
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
                                            <input type="text" id="descripcion" name="descripcion" class="form-control" required data-validation-required-message="El Articulo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Marca <a data-toggle="modal" data-target="#Marca" href="#"
                                        ><i class="fa fa-plus text-info m-r-10"></i></a></label>
                                        <div class="col-md-9 controls">
                                            <select class="form-control custom-select" name="marca" id="marca" aria-invalid="false">
                                                    <option value="0">Select</option>
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
                                        <label class="control-label text-right col-md-3">Capacidad <a data-toggle="modal" data-target="#Medida" href="#"
                                        ><i class="fa fa-plus text-info m-r-10"></i></a></label>
                                        <div class="col-md-5 controls">
                                            <select id="um" name="um" class="form-control custom-select">
                                            <option value="">seleccionar</option>
                                            <?php foreach ($unidades as $unidad): ?>
                                                        <option value="<?php echo $unidad['id']; ?>"><?php echo $unidad['unidad']; ?></option>
                                                    <?php endforeach ?>
                                            </select>   
                                        </div>
                                      
                                       
                                        <div class="col-md-4 controls">
                                            <input type="text" id="capacidad" name="capacidad" class="form-control" required data-validation-required-message="El Nombre es requerido">
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
                                            <input type="text" id="modelo" name="modelo" class="form-control" required data-validation-required-message="El Modelo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tipo <a data-toggle="modal" data-target="#Tipod" href="#"
                                        ><i class="fa fa-plus text-info m-r-10"></i></a></label>
                                        <div class="col-md-9 controls">
                                           <select id="tipo" name="tipo" class="form-control custom-select">
                                            <option value="">seleccionar</option>
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
                                        <label class="control-label text-right col-md-3">Otra <a data-toggle="modal" data-target="#McaracteristicaM" href="#"
                                        ><i class="fa fa-plus text-info m-r-10"></i></a></label>
                                        <div class="col-md-9 controls">
                                            <select id="caracteristica" name="caracteristica" class="form-control custom-select">
                                            <option value="">seleccionar</option>
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
                                            <input type="text" id="detalle" name="detalle" class="form-control" required data-validation-required-message="El Modelo es requerido">
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
                                            <option value="">ninguno</option>
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
                                            <input type="text" id="ancho" name="ancho" class="form-control" value="0" >
                                        </div>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="largo" name="largo" class="form-control" value="0" >
                                        </div>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="alto" name="alto" class="form-control" value="0" >
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
                                            <input type="text" id="costo" name="costo" class="form-control" required data-validation-required-message="el costo es requerido" placeholder="$0.00" min="0"  step="0.01" title="Currency" pattern="^\d+(?:\.\d{1,2})?$" onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'
">
                                        </div>
                                        <label class="control-label text-right col-md-2">Iva </label>
                                        <div class="col-md-3 controls">
                                            <input type="text" id="iva" name="iva" class="form-control" required data-validation-required-message="el costo es requerido">
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
                                            <input type="text" id="markm" name="markm" class="form-control" required data-validation-required-message="el margen es requerido">
                                        </div>
                                        <label class="control-label text-right col-md-2">Pvm <i class="fa fa-calculator text-info m-r-10" onclick="calpvm()"></i></label>
                                        <div class="col-md-4 controls">
                                            <input type="text" id="pvm" name="pvm" class="form-control" required data-validation-required-message="el precio es requerido">
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
                                            <input type="text" id="markup" name="markup" class="form-control" required data-validation-required-message="el margen es requerido">
                                        </div>
                                        <label class="control-label text-right col-md-2">Pvp <i class="fa fa-calculator text-info m-r-10" onclick="calpvp()"></i></label>
                                        <div class="col-md-4 controls">
                                            <input type="text" id="pvp" name="pvp" class="form-control" required data-validation-required-message="el precio es requerido">
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
                                            <button type="submit" onclick="insertArticulo()" class="btn btn-success">Guardar</button>
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
<!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ---------------------------------------- comienzo modal categoria  ----------------------------->
                        <div class="modal fade" id="Categorya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Categoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Categoria</label>
                                        <input type="text" class="form-control" name="Acategoria" id="Acategoria">
                                    </div>
                                  </div>
                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            
                                <button type="button" id="AGC" data-dismiss="modal" class="btn btn-primary">Agregar</button>
          
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal categoria ------------------------------>
<!-- ---------------------------------------- comienzo modal subcategoria  ----------------------------->
                        <div class="modal fade" id="sbCategorya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Subcategoria</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>

                                    <div class="form-group">
                                    <div class="col-md-7 controls">
                                        <label class="custom-control custom-radio"></label>
                                     <select name="mcategoria" id="mcategoria" class="form-control custom-select">
                                            <option value="0">Select</option>
                                                    <?php foreach ($categorias as $cat): ?>
                                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categoria']; ?></option>
                                                    <?php endforeach ?>
                                        </select>
                                    </div>
                                  </div>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Subcategoria</label>
                                        <input type="text" class="form-control" name="msubcategoria" id="msubcategoria">
                                    </div>
                                  </div>
                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            
                                <button type="button" id="gsc" data-dismiss="modal" class="btn btn-primary">Agregar</button>
          
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal subcategoria ------------------------------>
<!-- ---------------------------------------- comienzo modal marca  ----------------------------->
                        <div class="modal fade" id="Marca" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Marca</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Marca</label>
                                        <input type="text" class="form-control" name="Amarca" id="Amarca">
                                    </div>
                                  </div>
                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            
                                <button type="button" id="AGM" data-dismiss="modal" class="btn btn-primary">Agregar</button>
          
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal marca ------------------------------>
<!-- ---------------------------------------- comienzo modal medida  ----------------------------->
                        <div class="modal fade" id="Medida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Unidad de Medida</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Unidad</label>
                                        <input type="text" class="form-control" name="Unidad" id="Unidad">
                                    </div>
                                  </div>
                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            
                                <button type="button" id="AUM" data-dismiss="modal" class="btn btn-primary">Agregar</button>
          
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal medida ------------------------------>
<!-- ---------------------------------------- comienzo modal tipo  ----------------------------->
                        <div class="modal fade" id="Tipod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Tipo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Tipo</label>
                                        <input type="text" class="form-control" name="Tipo" id="Tipo">
                                    </div>
                                  </div>
                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            
                                <button type="button" id="Agt" data-dismiss="modal" class="btn btn-primary">Agregar</button>
          
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal tipo ------------------------------>
<!-- ---------------------------------------- comienzo modal caracteristica  ----------------------------->
                        <div class="modal fade" id="McaracteristicaM" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar Otra Caracteristica</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Caracteristica</label>
                                        <input type="text" class="form-control" name="Mcarac" id="Mcarac">
                                    </div>
                                  </div>
                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            
                                <button type="button" id="AgoT" data-dismiss="modal" class="btn btn-primary">Agregar</button>
          
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal Caracteristica ------------------------------>

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

$(document).ready(function(){
    $("#categoria").on('change', function () {
        $("#categoria option:selected").each(function () {
            var id_categoria = $(this).val();    

            $.ajax({
     type: 'POST',  // Envío con método POST
     url: 'https://anexo.com.ar/app/admin/articulo/subcategoria',  // Fichero destino (el PHP que trata los datos)
     data: {
            id_categoria: id_categoria,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(data) { 
        $("#subcategoria").html(data);
        console.log(id_categoria)
        
            });         
        });
   });
});


////////////////////////////////////////////////////////////////////////
///////////////////ingresar categoria////////////////////////////////////
    
    var Acategoria;
   
 
$('#Categorya').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
   
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#AGC').click(function(){

    Acategoria = $('#Acategoria').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertarCategoria",
      data: { 
              categoria: Acategoria,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(artic) {
      
    $("#fluidocont").empty(); //vacio el div consola despues de post
    // Función que se ejecuta si todo ha ido bien
    $("#fluidocont").append(artic);  // Escribimos en el div consola el mensaje devuelto
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar categoria/////////////////////////////////
///////////////////ingresar subcategoria////////////////////////////////////
    

    var psubcategoria;
    var pcategoria;
   
 
$('#sbCategorya').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
   
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#gsc').click(function(){

    psubcategoria = $('#msubcategoria').val();
    pcategoria = $('#mcategoria').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertarSubcategoria",
      data: { subcategoria: psubcategoria,
              categoria: pcategoria,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(artic) {
      
    $("#fluidocont").empty(); //vacio el div consola despues de post
    // Función que se ejecuta si todo ha ido bien
    $("#fluidocont").append(artic);  // Escribimos en el div consola el mensaje devuelto
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar subcategoria/////////////////////////////////
///////////////////ingresar marca////////////////////////////////////
    
    var Amarca;
   
 
$('#Marca').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
   
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#AGM').click(function(){

    Amarca = $('#Amarca').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertarMarca",
      data: { 
              marca: Amarca,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(artim) {
      
    $("#fluidocont").empty(); //vacio el div consola despues de post
    // Función que se ejecuta si todo ha ido bien
    $("#fluidocont").append(artim);  // Escribimos en el div consola el mensaje devuelto
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar categoria/////////////////////////////////
///////////////////ingresar unidad de medida////////////////////////////////////
    
    var Umedida;
   
 
$('#Medida').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
   
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#AUM').click(function(){

    Umedida = $('#Unidad').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertarUnidad",
      data: { 
              unidad: Umedida,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(artiu) {
      
    $("#fluidocont").empty(); //vacio el div consola despues de post
    // Función que se ejecuta si todo ha ido bien
    $("#fluidocont").append(artiu);  // Escribimos en el div consola el mensaje devuelto
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar unidad de medida/////////////////////////////////
///////////////////ingresar tipo////////////////////////////////////
    
    var Tipo;
   
 
$('#Tipod').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
   
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#Agt').click(function(){

    Tipo = $('#Tipo').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertarTipo",
      data: { 
              tipo: Tipo,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(artiT) {
      
    $("#fluidocont").empty(); //vacio el div consola despues de post
    // Función que se ejecuta si todo ha ido bien
    $("#fluidocont").append(artiT);  // Escribimos en el div consola el mensaje devuelto
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar tipo/////////////////////////////////
///////////////////ingresar Caracteristica////////////////////////////////////
    
    var Pcarac;
   
 
$('#McaracteristicaM').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
   
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#AgoT').click(function(){

    Pcarac = $('#Mcarac').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertarCaracteristica",
      data: { 
              caracteristica: Pcarac,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(artiT) {
      
    $("#fluidocont").empty(); //vacio el div consola despues de post
    // Función que se ejecuta si todo ha ido bien
    $("#fluidocont").append(artiT);  // Escribimos en el div consola el mensaje devuelto
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar tipo/////////////////////////////////
/////////////////////////////////////////////////////////////////////////


    function insertArticulo(){
    Pcategoria = $('#categoria').val();
    Psubcategoria = $('#subcategoria').val();
    Pmarca = $('#marca').val();
    Pum = $('#um').val();
    Pcapacidad = $('#capacidad').val();
    Pmodelo = $('#modelo').val();
    Ptipo = $('#tipo').val();
    Pcaracteristica = $('#caracteristica').val();
    Pdetalle = $('#detalle').val();
    Paccionamiento = $('#accionamiento').val();
    Pancho = $('#ancho').val();
    Plargo = $('#largo').val();
    Palto = $('#alto').val();
    Piva = $('#iva').val();
    pmarkm= $('#markm').val(); // Obtengo del formulario el valor nom
    Ppvm = $('#pvm').val();
    pdescripcion= $('#descripcion').val(); // Obtengo del formulario el valor nom
    pcosto= $('#costo').val(); // Obtengo del formulario el valor fecha
    pmarkup= $('#markup').val();
    ppvp = $('#pvp').val();
    pestado= $('#estado').val(); // Obtengo del formulario el valor fecha
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: 'https://anexo.com.ar/app/admin/articulo/insertararticulos',  // Fichero destino (el PHP que trata los datos)
     data: {
            categoria : Pcategoria,
            subcategoria : Psubcategoria,
            marca : Pmarca, 
            um : Pum, 
            capacidad : Pcapacidad,
            modelo : Pmodelo,
            tipo : Ptipo,
            caracteristica : Pcaracteristica,
            detalle : Pdetalle,
            accionamiento : Paccionamiento,
            ancho : Pancho,
            largo : Plargo,
            alto : Palto,
            iva : Piva,
            markm: pmarkm,
            pvm : Ppvm,
            descripcion: pdescripcion,
            costo: pcosto,
            markup: pmarkup,
            pvp: ppvp,
            estado: pestado,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function( arti ) { 

        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(arti);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
</script>