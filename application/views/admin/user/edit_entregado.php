
<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Creditos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Editar credito ya entregado</li>
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
                    <h4 class="m-b-0 text-white"> Confirmar Entrega </h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/edit_entregado/'.$credito->id) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nombre <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls"> 
                                        <input type="text" name="first_name" class="form-control" readonly value="<?php echo $credito->user_name; ?>">
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
                                            <input type="text" name="last_name" class="form-control" readonly value="<?php  echo $credito->user_apellido; ?>">
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
                                            <input type="text" name="dni" class="form-control" value="<?php echo $credito->dni; ?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                             <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Modalidad <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                            <select name="modo" class="form-control custom-select" aria-invalid="false" >
                                                <option value="<?php echo $credito->modo; ?>" ><?php echo $credito->modo; ?></option>
                                                <option value="semanal">semanal</option>
                                                <option value="quincenal">quincenal</option>
                                                <option value="mensual">mensual</option>
                                                <option value="diario">diario</option>
                                                <option value="contado">contado</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Anticipo <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                            <input type="number" name="anticipo" class="form-control" value="<?php echo $credito->anticipo; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Plazo <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                            <input type="number" name="plazo" class="form-control" value="<?php echo $credito->plazo; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Cuota <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                            <input type="number" name="cuota" class="form-control" value="<?php echo $credito->cuota; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Entregado el </label>
                                        <div class="col-md-4 controls">
                                            <div class="form-group has-success">
                                                <input type="date" name="entregado" class="form-control" value="<?php echo $credito->entregado; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                         <div class="align-self-center p-l-30">
                            <label class="custom-control custom-radio">
                                    <input  name="pago" type="radio" checked="" value="adelantada" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Adelantada</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input  name="pago" type="radio" value="vencida" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Vencida</span>
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                            
                           

<!--                            
                            <?php //* if ($user->role == "user"): ?>
                                <?php // $dis = 'block'; ?>
                            <?php // else: ?>
                                <?php // $dis = 'none'; ?>
                            <?php //S endif  ?>

                            <div class="row user_role_area" style="display: <?php // echo $dis; ?>">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Permiso de usuario</label>
                                        <div class="controls">

                                            <?php // foreach ($power as $pw): ?>

                                                <?php /* foreach ($user_role as $role){
                                                        if ($role['action'] == $pw['id']) {
                                                            $check = 'checked';
                                                            break;
                                                        }else{
                                                            $check = '';
                                                        }
                                                    }
                                                */?>

                                                <label class="custom-control custom-checkbox">
                                                    <input <?php //if(isset($check)) {echo $check;} else {echo "";} ?> type="checkbox" value="< //?php echo $pw['power_id'] ?>" name="role_action[]" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description"><?//php echo $pw['name'] ?></span> 
                                                </label>
                                            
                                            <? //php endforeach ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
-->

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