<script type="text/javascript">

function recalcula(){
   
	var cuotas=document.getElementsByName('plazo')[0].value;
    var valorcuota=document.getElementsByName('cuota')[0].value;
	  document.getElementById("cft").value=valorcuota*cuotas;
     }

function cambio(){
    document.getElementById("articulo").value = document.getElementById("id_articulo").innerText
}

</script>

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Nueva Solicitud paso 2</h3>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">

                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">
           <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Seleccionar Articulo y Plan <button class="btn-success" id="otroselect">añadir</button><button class="btn-danger" id="eliminar">quitar</button></h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/cargar_credito2/'.$user->id) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nombre <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                        <input type="hidden" name="user_id" value="<?php echo $user->id; ?>">
                                        <input type="hidden" name="vendedor" value="<?php echo $this->session->userdata('id'); ?>">
                                            <input type="text" name="first_name" class="form-control" readonly value="<?php echo $user->first_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Apellido <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                            <input type="text" name="last_name" class="form-control" readonly value="<?php echo $user->last_name; ?>">
                                            <input type="hidden" name="token" value="<?php $r = time(); 
                                            $rest = substr($r,-5);
                                            $tok = substr($r, 0, -5);
                                            if($rest>99699){
                                                $token_s=$tok+1;
                                            }else{
                                                $token_s=$tok;
                                            }
                                            echo $token_s; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">DNI </label>
                                        <div class="col-md-10 controls">
                                            <input type="text" name="mobile" class="form-control" value="<?php echo $user->dni; ?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Condicion </label>
                                        <div class="col-md-10 controls">
                                         
                                                <select class="form-control custom-select"  name="condicion" aria-invalid="false">
                                                    <option value="semanal">SEMANAL</option>
                                                    <option value="quincenal">QUINCENAL</option>
                                                    <option value="mensual">MENSUAL</option>
                                                    <option value="diario">DIARIO</option>
                                                    <option value="contado">CONTADO</option>
                                                </select>
                                      
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div  id="newselect">
                                <div class="row"  >
                                <div class="col-md-9">
                                    <div class="form-group row" >
                                        <label class="control-label text-right col-md-2">Articulo </label>
                                        <div class="col-md-10 controls">
                                            
                                                <select class="form-control custom-select"  name="articulo[]" id="servicioid" aria-invalid="false" required>
                                                    <option value="">Select</option>
                                                    <?php foreach ($country as $cn): ?>
                                                        <option value="<?php echo $cn['id'].'-'.$cn['descripcion'].' '.$cn['marca'].' '.$cn['modelo'].'-'.$cn['costo'].'-'.$cn['pvp']; ?>"><?php echo $cn['descripcion'].' '.$cn['marca'].' '.$cn['modelo']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">CANTIDAD </label>
                                        <div class="col-md-4 controls">
                                            <input type="number" name="cantidad[]" class="form-control" value="1" required data-validation-required-message="este campo es requerido">
                                        </div>
                                        <label class="control-label text-right col-md-2">PVP </label>
                                        <div class="col-md-4 controls">
                                            <input type="text" name="servicioSelecionado[]" id="servicioSelecionado" class="form-control" value="" >
                                        </div>
                                    </div>
                                </div>
                              
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Anticipo</label>
                                        <div class="col-md-2 controls">
                                          <input type="number" name="anticipo" class="form-control" value="" >  
                                        </div>
                                        <label class="control-label text-right col-md-2">Plazo</label>
                                        <div class="col-md-2 controls">
                                          <input type="number" name="plazo" class="form-control" value="" required data-validation-required-message="este campo es requerido" onchange="recalcula()">  
                                        </div>
                                        <label class="control-label text-right col-md-2">Cuota</label>
                                        <div class="col-md-2 controls">
                                          <input type="number" name="cuota" class="form-control" value="" required data-validation-required-message="campo requerido" onchange="recalcula()">  
                                          <input type="hidden"  id="cft" name="cft" value=""  />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Observacion </label>
                                        <div class="col-md-10 controls">
                                            <input type="textarea" name="observaciones" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
 
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Cargar Solicitud</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>