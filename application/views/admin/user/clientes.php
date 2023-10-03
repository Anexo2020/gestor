

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Clientes</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Incio</a></li>
                <li class="breadcrumb-item active">Clientes</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Usuarios activos</small></h6>
                        <h4 class="m-t-0 text-info"></h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Usuarios incativos</small></h6>
                        <h4 class="m-t-0 text-primary"></h4>
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

                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>DNI</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Localidad</th>
                                    <th>Día de ingreso</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            <?php  foreach ($users as $user): ?>
                                
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['dni']; ?></td>
                                    <td><?php echo $user['last_name'].' '.$user['first_name']; ?></td>
                                    <td><?php echo $user['direccion']; ?></td>
                                    <td><?php echo $user['country']; ?></td>

                                    <td><?php echo my_date_show_time($user['created_at']); ?></td>
                                    <td class="text-nowrap">

                                        <?php if ($this->session->userdata('role') == 'admin'): ?>
                                            <a href="<?php echo base_url('admin/user/update/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>


                                            <a href="<?php echo base_url('admin/pages/profilec/'.$user['id']) ?>" target="_blank" class="btn btn-outline-info">Info</a>


                                        <?php elseif($this->session->userdata('role') == 'administrador' || $this->session->userdata('role') == 'supervisor_a'): ?>
                                            <a href="<?php echo base_url('admin/user/update/'.$user['id']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                             <a href="<?php echo base_url('admin//pages/profilec/'.$user['id']) ?>"class="btn btn-outline-info">Info</a>
                                        <?php else: ?>

                                           
                                        <?php endif ?>

                                        
                                         <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador'): ?>
                                        <?php if ($user['status'] == 1): ?>
                                            <a href="<?php echo base_url('admin/user/deactive/'.$user['id']) ?>" > <i class="fa fa-close text-danger m-r-10"></i> </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url('admin/user/active/'.$user['id']) ?>" > <i class="fa fa-check text-info m-r-10"></i> </a>
                                        <?php endif ?>
                                         <?php endif; ?>
                                    </td>
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



<?php foreach ($users as $user): ?>
 
<div class="modal fade" id="confirm_delete_<?php echo $user['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
            <div class="form-body">
                
                Are you sure want to delete? <br> <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="<?php echo base_url('admin/user/delete/'.$user['id']) ?>" class="btn btn-danger"> Borrar</a>
                
            </div>

      </div>


    </div>
  </div>
</div>


<?php endforeach ?>

<script>
$('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>