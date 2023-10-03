

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Creditos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Edita Solicitud</li>
            </ol>
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
            <div class="card card-outline-info">
                <div class="card-header">
                    

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/update_credito/'.$credito->id) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <?php foreach($ArtCargados as $artCargado): ?>
                            <div class="row"  >
                                <div class="col-md-9">
                                    <div class="form-group row" >
                                        <label class="control-label text-right col-md-2">Articulo </label>
                                        <div class="col-md-10 controls">
                                            
                                                <select class="form-control custom-select"  name="articulo[]" aria-invalid="false">
                                                    <option value="<?php echo $artCargado['id_articulo'].'-'.$artCargado['descripcion'].'-'.$artCargado['costo'].'-'.$artCargado['id']; ?>"><?php echo $artCargado['descripcion']; ?></option>
                                                    <?php foreach ($articulos as $articulo): ?>
                                                        <option value="<?php echo $articulo['id'].'-'.$articulo['descripcion'].'-'.$articulo['costo'].'-'.$artCargado['id']; ?>"><?php echo $articulo['descripcion'].' '.$articulo['modelo']; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            
                                        </div>
                                    </div>
                                </div>
                      
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">CANTIDAD </label>
                                        <div class="col-md-10 controls">
                                            <input type="number" name="cantidad[]" class="form-control" value="1">
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <?php endforeach ?>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Anticipo <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="number" name="anticipo" class="form-control" value="<?php echo $credito->anticipo; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Modo <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <select class="form-control custom-select" name="modo" aria-invalid="false">
                                            <option value="<?php echo $credito->modo; ?>"><?php echo $credito->modo; ?></option>
                                            <option value="semanal">semanal</option>
                                            <option value="quincenal">quincenal</option>
                                            <option value="mensual">mensual</option>
                                            <option value="diario">diario</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Plazo <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="number" name="plazo" class="form-control" value="<?php echo $credito->plazo; ?>">
                                            <input type="hidden" name="modifico" value="<?php echo $this->session->userdata('id'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Cuota </label>
                                        <div class="col-md-9 controls">
                                            <input type="number" name="cuota" class="form-control" value="<?php echo $credito->cuota; ?>">
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
                                            <button type="submit" class="btn btn-success">Actualizar</button>
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