

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Lista de gastos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar nuevo item de gasto</li>
            </ol>
        </div>
        
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->

    
    <!-- Start Page Content -->

    <div class="row">

        <div class="col-md-12">
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
        </div>

        <div class="col-lg-5">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Agregar Nuevo item
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/dashboard/add_descripcion_gasto') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Rubro <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                           <div class="form-group">
                                                <select class="form-control custom-select" name="rubro" aria-invalid="false">
                                                    <option value="0">Select</option>
                                                    <?php foreach ($rubro as $rub): ?>
                                                        <option value="<?php echo $rub['id']; ?>"><?php echo $rub['rubro']; ?></option>
                                                    <?php endforeach ?>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Nombre <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <input type="text" name="descripcion" class="form-control" required data-validation-required-message="Debe escribir una descripcion del gasto">
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
                                        <label class="control-label text-right col-md-5"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-7">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Toda la lista</h4>
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive m-t-40">
                        <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($listado as $lista): ?>
                                
                                <tr>
                                    <td><?php echo $lista['descripcion']; ?></td>
                                    <td class="text-nowrap">
                                    
                                        <a data-toggle="modal" data-target="#editModal_<?php echo $lista['id'];?>" href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>

                                        <a id="delete" href="<?php echo base_url('admin/user/delete_power/'.$lista['id']) ?>"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                        
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- End Page Content -->

</div>

<!-- Start Edit User Power Modal  -->
<?php foreach ($listado as $lista): ?>  

<div class="modal fade" id="editModal_<?php echo $lista['id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Actualizar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post" action="<?php echo base_url('admin/user/update_power') ?>" class="form-horizontal" novalidate>
            <div class="form-body">
                <br>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5">Descripcion <span class="text-danger"></span></label>
                            <div class="col-md-7 controls">
                                <input type="text" name="descripcion" value="<?php echo $lista['descripcion']; ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>

                <!-- CSRF token -->
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" name="id" value="<?php echo $lista['id']; ?>">
                
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php endforeach ?>

<!-- End Edit User Power Modal  -->


