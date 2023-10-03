<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Credito</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Articulo: </li>
                <li class="breadcrumb-item active"><?php echo $cliente->articulo; ?> anticipo: $ <?php echo $cliente->anticipo; ?></li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-info"><?php echo $cliente->user_apellido." ".$cliente->user_name; ?> </h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>
<?php if($this->session->userdata('role')=='admin' || $this->session->userdata('role')=='administrador'): ?>
<?php if($cliente->anticipo > 0): ?>
    <?php  if($anticipo[0]->importe >= $cliente->anticipo ): ?>
        PAGADO <?php echo $anticipo[0]->importe; ?>
    <?php elseif($apertura[0]['usuario']==$this->session->userdata('id')): ?>
<a data-toggle="modal" data-target="#editModal_2" href="#" data-toggle="tooltip" class="btn btn-info pull-right">anticipo</a>
<?php endif ?>
<?php endif ?>
<?php endif ?>
</small></h6>
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

                        <?php if($this->session->userdata('role')=='admin' || $this->session->userdata('role')=='administrador'): ?>
                        <a data-toggle="modal" data-target="#editModal_1" href="#" data-toggle="tooltip" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Insertar pago</a>
                        <?php endif ?>
                    

                    <div class="table-responsive m-t-40">
                        <table id="example32" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                	<th>N°</th>
                                    <th>importe</th>
                                    <th>vence</th>
                                    <th>paga</th>
                                    <th>saldo</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            <?php  foreach ($cuotas as $cuota): ?>
                                
                                <tr>
                        			<td><?php echo $cuota['cuotanumero']; ?>
                                    
                                    </td>
                                    <td><?php echo "$".$cuota['valorcuota']; ?></td>
                                    <td><?php $newDate = date("d/m/Y", strtotime($cuota['vence']));
										echo $newDate; ?></td>
                                    <td><?PHP if($cuota['pagada']!=='si'):?>
                                    
                                    <span class="btn btn-danger btn-sm" >NO</span>
                                    <?php else: ?>
                                    <span class="btn btn-info btn-sm" >SI</span>
                                    <?php endif ?>
                                    </td>
                                    <td><?php echo "$".$cuota['saldo']; ?></td>
                                    
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



<?php foreach ($cuotas as $cuota): ?>
 
<div class="modal fade" id="editModal_1">
  <div class="modal-dialog">
    <div class="modal-content">

     <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Cobrar Cuota</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

     <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post" action="<?php echo base_url('admin/user/insertar_pago') ?>" class="form-horizontal" novalidate>
            <div class="form-body">
                <br>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5">Importe <span class="text-danger"></span></label>
                            <div class="col-md-7 controls">
                                       <input type="text" name="importe" class="form-control" value="" >
                                       <input type="hidden" name="idcredito" value="<?php echo $cuota['idcredito']; ?>">
                                       <input type="hidden" name="cobrador" value="<?php echo $this->session->userdata('id'); ?>" >
                                       <?php foreach ($datos as $dato): ?>
                                       <input type="hidden" name="user_id" value="<?php echo $dato['user_id']; ?>">
                                       <?php endforeach ?>
                                    <div class="form-check">
                                <label class="custom-control custom-radio">
                                    <input id="user" name="modo" type="radio" checked="" value="efectivo" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">efectivo</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="admin" name="modo" type="radio" value="mercadopago" class="custom-control-input" required data-validation-required-message="You need to select user role type" aria-invalid="false">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">mercadopago</span>
                                </label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                    
                    <div class="form-group row">
                        
                        <div class="controls">
                            
                        </div>
                    </div>
                             
                </div>

                <!-- CSRF token -->
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" name="fecha" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" id="token" name="token" value="<?php echo time(); ?>">
                <input type="hidden" id="role" name="role" value="<?php echo $this->session->userdata('role'); ?>">
                <div class="row pull-right">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5"></label>
                            <div class="controls">
                                <button type="submit" class="btn btn-success">CARGAR</button>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            
        </form>
                

      </div>
       <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>



    </div>
  </div>
</div>


<?php endforeach ?>


 
<div class="modal fade" id="editModal_2">
  <div class="modal-dialog">
    <div class="modal-content">

     <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ingresar Anticipo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

     <!-- Modal body -->
      <div class="modal-body">
        
        <form method="post" action="<?php echo base_url('admin/cob/insert_anticipo') ?>" class="form-horizontal" novalidate>
            <div class="form-body">
                <br>
                
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5">Importe <span class="text-danger"></span></label>
                            <div class="col-md-7 controls">
                                       <input type="text" name="importe" class="form-control" value="" >
                                       <input type="hidden" name="idcredito" value="<?php echo $cliente->id; ?>">
                                       <input type="hidden" name="cobrador" value="<?php echo $this->session->userdata('id'); ?>" >

                                       <input type="hidden" name="user_id" value="<?php echo $cliente->user_id; ?>">

                                       <input type="hidden" name="anticipo" value="1">

                                    <div class="form-check">
                                <label class="custom-control custom-radio">
                                    <input id="user" name="modo" type="radio" checked="" value="efectivo" class="custom-control-input" required data-validation-required-message="debe selecionar la forma en que se realiza" aria-invalid="false">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">efectivo</span>
                                </label>
                                <label class="custom-control custom-radio">
                                    <input id="admin" name="modo" type="radio" value="mercadopago" class="custom-control-input" required data-validation-required-message="debe selecionar la forma en que se realiza" aria-invalid="false">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">mercadopago</span>
                                </label>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                    
                    <div class="form-group row">
                        
                        <div class="controls">
                            
                        </div>
                    </div>
                             
                </div>

                <!-- CSRF token -->
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                <input type="hidden" name="fecha" value="<?php echo date('Y-m-d'); ?>">
                <input type="hidden" id="token" name="token" value="<?php echo time(); ?>">
                <input type="hidden" id="role" name="role" value="<?php echo $this->session->userdata('role'); ?>">
                <div class="row pull-right">
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-5"></label>
                            <div class="controls">
                                <button type="submit" class="btn btn-success">CARGAR</button>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            
        </form>
                

      </div>
       <!-- Modal footer -->
      <div class="modal-footer">
       
      </div>



    </div>
  </div>
</div>