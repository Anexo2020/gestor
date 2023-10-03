<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Plan de cuotas</h3>
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
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
         <!-- column -->
        <div class="col-12">

            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">Plan de Cuotas</h4>

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
                                    <th>se pago</th>
                                    <th>saldo</th>
                                    
                                </tr>
                            </thead>
                            
                            
                            <tbody>
                            <?php  foreach ($cuotas as $cuota): ?>
                                
                                <tr>
                        			<td><?php echo $cuota['cuotanumero']; ?>
                                    
                                    </td>
                                    <td><?php echo "$".$cuota['valorcuota']; ?></td>
                                    <td><?php $newDate = date("d/m/Y", strtotime($cuota['vence']));
										echo $newDate; ?></td>
                                    <td><?PHP if($cuota['pagada']!=='si'):?>
                                    
                                    <span class="btn btn-danger btn-xs" >NO</span>
                                    <?php else: ?>
                                    <span class="btn btn-info btn-xs" >SI</span>
                                    <?php endif ?>
                                    </td>
                                    <td><?php 
                                    if($cuota['fechap']!=='0000-00-00'){$fepagada = date("d/m/Y", strtotime($cuota['fechap']));}else{$fepagada = "";}
                                    echo $fepagada;
                                    ?></td>
                                    <td><?php echo "$".$cuota['saldo']; ?></td>
                                    
                                </tr>

                            <?php  endforeach  ?>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pagos realizados</h4>
                    <div class="table-responsive m-t-40 {-sm}">
                        <table class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%" >
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Importe</th>
                                    <th>Cobrado por</th>
                                    <th>Concepto</th>
                                    <th>Forma</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($pagos as $pago): ?>
                                <tr> 
                                    <td><?php echo date("d/m/Y", strtotime($pago['fecha'])); ?></td>
                                    <td><?php echo $pago['importe']; ?></td>
                                    <td>
                                    <?php echo $pago['cobro_name']; ?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <a id="delete" data-toggle="modal" data-target="#confirm_delete_<?php echo $pago['idpago'];?>" href="#"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                <?php endif ?>
                                    </td>
                                    <td><?php  if($pago['anticipo']==0){echo "cuota";}else{echo "anticipo";} ?></td>
                                    <td><?php echo $pago['modo']; ?></td>
                                </tr> 
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- column -->
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
                                       <input type="hidden" name="chat_id" value="<?php echo $dato['chat_id']; ?>">
                                       <input type="hidden" name="forma" value="<?php echo $dato['modo']; ?>">
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
                <input type="hidden" id="fecha" name="fecha" value="<?php echo date('Y/m/d'); ?>">
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
                                       <input type="hidden" name="chat_id" value="<?php echo $cliente->chat_id; ?>">

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