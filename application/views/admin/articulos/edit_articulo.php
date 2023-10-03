
<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Articulos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Edita Articulo</li>
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
                    

                </div><?php // foreach( $articulos as $articulo): ?>
                <div class="card-body">
                    
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Descripcion <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="descripcion" name="descripcion" value="<?php echo $articulos->descripcion; ?>" class="form-control" required data-validation-required-message="El Nombre es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Costo <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="costo" name="costo" value="<?php echo $articulos->costo; ?>" class="form-control"  required data-validation-required-message="El apellido es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Markup <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="markup" name="markup" value="<?php echo $articulos->markup; ?>" class="form-control" required data-validation-required-message="el DNI es requerido">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                             <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Anticipo <span class="text-danger">*</span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" id="anticipo" name="anticipo" value="<?php echo $articulos->anticipo; ?>" class="form-control" >
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
                                            <select class="form-control custom-select" id="estado" name="estado">
                                                <option value="disponible">disponible</option>
                                                <option value="nodisponible">nodisponible</option>
                                            </select>
                                            <input type="hidden" name="id" id="id" value="<?php echo $articulos->id ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
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

                           <?php // endforeach ?>
                        </div>
                        
                    
                </div>
            </div>
        </div>
    </div>

    <!-- End Page Content -->

</div>