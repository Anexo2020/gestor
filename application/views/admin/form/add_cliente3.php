
<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Datos Complementarios</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Referencias y datos</li>
            </ol>
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
                    <h4 class="m-b-0 text-white"> Agregar info </h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/add_info') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row"><?php foreach ($user as $us) :?><input type="hidden" name="id_user" value="<?php echo $us['id']; ?>">
                                        <label class="control-label text-right col-md-3">Nombre R1 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls"><?php endforeach ?>
                                            <input type="text" name="nombre_r1" class="form-control" required data-validation-required-message="El Nombre es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Telefono R1 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="number" name="telefono_r1" class="form-control" required data-validation-required-message="El Telefono es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Relacion R1 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="relacion_r1" class="form-control" required data-validation-required-message="Este campo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nombre R2 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="nombre_r2" class="form-control" required data-validation-required-message="el Nombre es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Telefono R2 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="number" name="telefono_r2" class="form-control" required data-validation-required-message="el Telefono es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Relacion R2 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="relacion_r2" class="form-control" required data-validation-required-message="Este campo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nombre R3 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="nombre_r3" class="form-control" required data-validation-required-message="el Nombre es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Telefono R3 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="number" name="telefono_r3" class="form-control" required data-validation-required-message="el Telefono es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Relacion R3 <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="relacion_r3" class="form-control" required data-validation-required-message="Este campo es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Casa Propia</label>
                                        <div class="radio-list">
                                            <label class="custom-control custom-radio">
                                                <input id="radio3" name="casa_propia" type="radio" value="si" checked="" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">SI</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio4" name="casa_propia" type="radio" value="no" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">NO</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                           
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tiene Comercio</label>
                                        <div class="controls">
                                            <div class="form-check">
                                                <label class="custom-control custom-radio">
                                                    <input id="user" name="comercio" type="radio" value="si" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">SI</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input id="admin" name="comercio" type="radio" value="no" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">NO</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="user_role_area" style="display: none;">
                            <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Rubro <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="rubro" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Direccion <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="direccion_c" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Entrecalles <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="entrecalles_c" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Localidad <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="localidad" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Antiguedad <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="antiguedad" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                  <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Observaciones <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="textarea" name="observaciones" class="form-control">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            </div> 
                            


                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Guardar</button>
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