<script type="text/javascript">

function recalcula(){
   
	var cuotas=document.getElementsByName('plazo')[0].value;
    var valorcuota=document.getElementsByName('cuota')[0].value;
	  document.getElementById("cft").value=valorcuota*cuotas;
     }

</script>

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Creditos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Cobrador</li>
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
                    <h4 class="m-b-0 text-white"> Asignar Cobrador </h4>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/user/asignar_cobrador/'.$credito->id) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Nombre <span class="text-danger"></span></label>
                                        <div class="col-md-10 controls">
                                        <input type="hidden" name="user_id" value="<?php echo $credito->id; ?>">
                                        <input type="hidden" name="vendedor" value="<?php echo $this->session->userdata('id'); ?>">
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
                                            <input type="text" name="mobile" class="form-control" value="<?php echo $credito->dni; ?>" readonly >
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-2">Cobrador </label>
                                        <div class="col-md-10 controls">
                                            <div class="form-group has-success">
                                                <select class="form-control custom-select" name="cobrador" aria-invalid="false">
                                                    <option value="0"></option>
                                                   <?php foreach ($cobrador as $cob): ?>
                                                        <option value="<?php echo $cob['id']; ?>"><?php echo $cob['first_name']; ?></option>                                                    
												   <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
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