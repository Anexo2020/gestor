

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Caja diaria</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar nuevo item de gasto</li>
            </ol>
        </div>
        <div class="col-md-5 col-8 align-self-center">
            <form method="post" action="<?php echo base_url('admin/caja/apertura') ?>" class="form-horizontal" novalidate>
                <input type="hidden" name="usuario" value="<?php echo $this->session->userdata('id'); ?>">
             <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            <div class="col-md-9">
                <div class="form-group row">
                    <label class="control-label text-right col-md-5"></label>
                    <div class="controls"><?php if($apertura[0]['usuario']==0 and $apertura[0]['socio']==$this->session->userdata('socio')): ?>
                        <button type="submit" class="btn btn-success">Abrir Caja</button>
                    <?php endif ?>
                    </div>
                </div>
            </div>
        </form>
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

        <div class="col-lg-4">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Agregar Movimiento
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/caja/salida') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Categoria <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                           <div class="form-group">
                                                <select class="form-control custom-select" name="rubro" id="category" aria-invalid="false">
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
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Descripcion <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <div class="form-group">
                                                <select name="subcategory" id="subcategory" class="form-control" aria-invalid="false" ></select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row" id="prov"></div>
                            <div class="row" id="prov2"></div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Modo <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <div class="form-group">
                                                <select name="forma" id="forma" class="form-control"><option value="efectivo">efectivo</option>
                                                <option value="mercadopago">mercadopago</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Movimiento <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <div class="form-group">
                                                <select name="movimiento" id="movimiento" class="form-control"><option value="0">salida</option>
                                                <option value="1">ingreso</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Importe <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <input type="text" name="importe" class="form-control" required data-validation-required-message="Debe escribir un importe">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Nota <span class="text-danger"></span></label>
                                        <div class="col-md-7 controls">
                                            <input type="text" name="nota" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <input type="hidden" id="token" name="token" value="<?php echo time(); ?>">
                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            
                            <hr>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5"></label>
                                        <div class="controls">
                                            <?php if($apertura[0]['usuario']==$this->session->userdata('id')): ?>
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-8">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Lista de movimientos</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/caja/cierre') ?>" class="form-horizontal" novalidate>
                    <div>
                    <div>
                      <?php
                    echo "<h4>EFECTIVO $".($sumft[0]->importe-$resft[0]->importe+$saldo[0]['efectivo_real'])." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MERCADOPAGO $".($summp[0]->importe-$resmp[0]->importe)."</h4>";
                     ?>
                     <h4>EFECTIVO EN BILLETES $<span id="subtotal2"></span></h4>
                     <input type="hidden" name="mercadopago" value="<?php echo ($summp[0]->importe-$resmp[0]->importe); ?>">
                      <input type="hidden" id="subtotal" name="efectivo_real" value=""><input type="hidden" name="efectivoc" value="<?php echo $sumft[0]->importe-$resft[0]->importe+$saldo[0]['efectivo_real']; ?>">
                    <h4>SALDO DE CAJA $<span><?PHP echo $saldo[0]['efectivo_real']; ?></span></h4> 
                    </div>
                    
                    
                    <div class="table-responsive m-t-40">
                        <table id="example33" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Importe</th>
                                    <th>Movimiento</th>
                                    <th>Moneda</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach ($caja as $lista): ?>
                                
                                <tr>
                                    <td><?php echo $lista['categoria']; ?></td>
                                    <td><?php echo $lista['descripcion']; ?></td>
                                    <td id="impor<?php echo $lista['id']; ?>"><?php echo $lista['importe']; ?></td>
                                    <td><?php if($lista['movimiento']<>0){echo "ingreso";}else{echo "salida";}  ?></td>
                                    <td><?php echo $lista['forma']; ?><input type="hidden" name="item[]" value="<?php echo $lista['id']; ?>"></td>
                                    <td>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $lista['id']; ?>" data-obj="<?php echo $lista['descripcion']; ?>" data-imp="<?php echo $lista['importe']; ?>">Edit</button>
                                        
                                    </td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>

                </div>
                <input type="hidden" name="usuario" value="<?php echo $this->session->userdata('id'); ?>">
                <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                 <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">$1000</label>
                                        <label class="control-label text-right col-md-3">$500</label>
                                        <label class="control-label text-right col-md-3">$200</label>
                                        <label class="control-label text-right col-md-3">$100</label>
                                        <div class="col-md-3 controls">
                                            <input type="text" name="mil" id="1000" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-3 controls">
                                            <input type="text" name="quinientos" id="500" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-3 controls">
                                            <input type="text" name="doscientos" id="200" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-3 controls">
                                            <input type="text" name="cien" id="100" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">$50</label>
                                        <label class="control-label text-right col-md-3">$20</label>
                                        <label class="control-label text-right col-md-3">$10</label>
                                        <label class="control-label text-right col-md-3">monedas</label>
                                        <div class="col-md-3 controls">
                                            <input type="text" name="cincuenta" id="50" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-3 controls">
                                            <input type="text" name="veinte" id="20" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-3 controls">
                                            <input type="text" name="diez" id="10" class="form-control">
                                        </div>
                                        
                                        <div class="col-md-3 controls">
                                            <input type="text" name="monedas" id="monedas" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5"></label>
                                        <div class="controls">
                                            <?php if($apertura[0]['usuario']==$this->session->userdata('id')): ?>
                                            <button type="submit" class="btn btn-success">Cerrar Cja</button>
                                        <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
            </div>
        </div>

    </div>

    <!-- End Page Content -->

</div>

<!-- Start Edit User Power Modal  -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Movimiento:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Movimiento:</label>
            <select name="movimientonew" id="movimientonew" class="form-control custom-select">
                                            <option value="1">ingreso</option>
                                            <option value="0">salida</option>
                                        </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Importe:</label>
            <input type="text" name="importenew" id="importenew" class="form-control" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="edt-1" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    var ap = '#impor'; 
     
        $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever')
  var rej = button.data('obj') // Extract info from data-* attributes
  var impvi = button.data('imp') // Extract info from data-* attributes
  xp = ap + id;
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  $('#edt-1').click(function(){
    importen = $('#importenew').val();
    movimienton = $('#movimientonew').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/caja/editarmovimiento",
      data: { movimiento: movimienton,
              importe: importen,
              id: id,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(est) {
        console.log(JSON.stringify(est));
      $('#exampleModal').modal('hide');
      $(xp).empty(); 
      $(xp).html(est.importe);  

    });
});
  var modal = $(this)
  modal.find('.modal-title').text('Editar Movimiento: ' + rej)
  modal.find('.modal-body input').val(impvi)
})
</script>

<!-- End Edit User Power Modal  -->



