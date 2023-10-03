

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Usuario</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Incio</a></li>
                <li class="breadcrumb-item active">Todo los Clientes</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Usuarios activos</small></h6>
                        <h4 class="m-t-0 text-info"><?php echo $count->active_user; ?></h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Usuarios incativos</small></h6>
                        <h4 class="m-t-0 text-primary"><?php echo $count->inactive_user; ?></h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

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

            <div class="card">

                <div class="card-body">

                <?php if ($this->session->userdata('role') == 'admin'): ?>
                    <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Agregar nuevo usario</a> &nbsp;

                    <a href="<?php echo base_url('admin/user/power') ?>" class="btn btn-info"><i class="fa fa-user-o"></i> &nbsp; Agregar nuevo privilegio</a>
                <?php else: ?>
                    <!-- check logged user role permissions -->

                    <?php if(check_power(1)):?>
                        <a href="<?php echo base_url('admin/user') ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Agregar nuevo usuario</a>
                    <?php endif; ?>
                <?php endif ?>
                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                	<th>Cliente</th>
                                    <th>Articulo</th>
                                    <th>Anticipo</th>
                                    <th>Plazo</th>
                                    <th>Cuota</th>
                                    <th>Modalidad</th>
                                    <th>Verificacion</th>
                                    <th>Entregado</th>
                                    <th>Vendedor</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Articulo</th>
                                    <th>Anticipo</th>
                                    <th>Plazo</th>
                                    <th>Cuota</th>
                                    <th>Modalidad</th>
                                    <th>Verificacion</th>
                                    <th>Entregado</th>
                                    <th>Vendedor</th>
                                    
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            <?php  foreach ($creditos as $credito): ?>
                                
                                <tr>
									<td><?php echo $credito['user_name'].' '.$credito['user_apellido']; ?></td>
                                    <td><?php echo $credito['articulo']; ?></td>
                                    <td><?php echo $credito['anticipo']; ?></td>
                                    <td><?php echo $credito['plazo']; ?></td>
                                    <td><?php echo $credito['cuota']; ?></td>
                                    <td><?php echo $credito['modo']; ?></td>
                                    <td><?php echo $credito['verificado']; ?></td>
                                    <td><?php echo $credito['entregado']; ?></td>
                                    <td><?php echo $credito['userv_name']; ?></td>
                                </tr>

                            <?php  endforeach  ?>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>



<?php foreach ($creditos as $credito): ?>
 
<div class="modal fade" id="editModal_<?php echo $credito['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

     <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Estado</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

     <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post" action="<?php echo base_url('admin/user/actualizar_verificado') ?>" class="form-horizontal" novalidate>
            <div class="form-body">
                <br>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5">Estado <span class="text-danger"></span></label>
                            <div class="col-md-7 controls">
                                        <select name="verificado" class="form-control custom-select">
                                        	<option value="pendiente">pendiente</option>
                                            <option value="aprobado">aprobado</option>
                                            <option value="rechazado">rechazado</option>
                                        </select>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>

                <!-- CSRF token -->
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" name="id" value="<?php echo $credito['id']; ?>">
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5"></label>
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            
        </form>
                

      </div>
       <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>



    </div>
  </div>
</div>


<?php endforeach ?>

