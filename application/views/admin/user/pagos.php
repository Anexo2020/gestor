<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Pagos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Articulo: </li>
                <li class="breadcrumb-item active"><?php echo $cliente->articulo; ?> anticipo: <?php echo $cliente->anticipo; ?></li>
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
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-primary"></h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pagos realizados</h4>
                    <h6 class="card-subtitle">Credito N°</h6>
                    <div class="table-responsive m-t-40 {-sm}">
                        <table class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%" >
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Importe Pagado</th>
                                    <th>Cobrado por</th>
                                    <th>Concepto</th>
                                    <th>Forma de pago</th>
                                    <th>Recibo</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($pagos as $pago): ?>
                                <tr> 
                                    <td><?php echo $pago['fecha']; ?></td>
                                    <td><?php echo $pago['importe']; ?></td>
                                    <td>
									<?php echo $pago['cobro_name']; ?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <a id="delete" data-toggle="modal" data-target="#confirm_delete_<?php echo $pago['idpago'];?>" href="#"  data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-trash text-danger m-r-10"></i> </a>
                                <?php endif ?>
                                    </td>
                                    <td><?php  if($pago['anticipo']==0){echo "cuota";}else{echo "anticipo";} ?></td>
                                    <td><?php echo $pago['modo']; ?></td>
                                    <td><a href="<?php echo base_url('admin/user/recibo_gen_b/'.$pago['idpago']) ?>" class="btn btn-xs btn-dark">Recibo</a></td>
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
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

<?php foreach ($pagos as $pago): ?>
 
<div class="modal fade" id="confirm_delete_<?php echo $pago['idpago'];?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
            <div class="form-body">
                
                ¿Seguro deseas Eliminar este Pago? <br> <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="<?php echo base_url('admin/user/delete_pago/'.$pago['idpago']) ?>" class="btn btn-danger"> Borrar</a>
                
            </div>

      </div>


    </div>
  </div>
</div>


<?php endforeach ?>