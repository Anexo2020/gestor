<div id="container-fluid">
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Comprobante</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Comprobante de Venta</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>!</small></h6>
                        <h4 class="m-t-0 text-info">!</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>!</small></h6>
                        <h4 class="m-t-0 text-primary">!</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
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
        <div class="col-md-12">
            <div class="card card-body printableArea">
                <h3><b>OPERACION</b> <span class="pull-right">#<?php echo $venta->id; ?></span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Orden de venta</b></h3>
                                <p class="m-t-30"><b>Fecha Compra :</b> <i class="fa fa-calendar"></i> <?php echo $venta->fecha; ?></p>
                                <p><b>Fecha Entrega :</b> <i class="fa fa-calendar"></i> <?php echo $venta->entregado; ?></p>
                                <p class="text-muted m-l-5">ANEXO ELECTRO
                                    <br/> Capdevila 1160
                                    <br/> Rafael Castillo
                                    <br/>11-6361-9969</p>
                            </address>
                        </div>
                        <div class="pull-right text-right">
                            <address>
                                <h3>Cliente:</h3>
                                <h4 class="font-bold"><?php echo $venta->user_apellido.' '.$venta->user_name; ?></h4>
                                <p class="text-muted m-l-30">DNI: <?php echo $venta->dni; ?>
                                    <br/>Direccion: <?php echo $venta->direccion; ?>
                                    <br/>Enre: <?php echo $venta->entre; ?>
                                    <br/>Localidad: <?php echo $venta->localidad; ?>
                                    <br/>Telefono: <?php echo $venta->celular; ?>
                                    </p>
                                
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        
                        <div class="table-responsive m-t-40" style="clear: both;">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Description</th>
                                        <th class="text-right">Cantidad</th>
                                        <th class="text-right">Precio</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($productos as $producto):  ?>
                                    <tr>
                                        <td class="text-center"><?php echo $producto['id_articulo']; ?>
                                        <input type="hidden" name="idart[]" value="<?php echo $producto['id_articulo']; ?>" />
                                        <input type="hidden" name="cantidad[]" value="<?php echo $producto['cantidad']; ?>" />
                                        </td>
                                        <td><?php echo $producto['descripcion']; ?></td>
                                        <td class="text-right"><?php echo $producto['cantidad']; ?> </td>
                                        <td class="text-right"> <?php echo $producto['pvp']; ?> </td>
                                        <td class="text-right"> <?php echo $producto['cantidad']*$producto['pvp']; ?> </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr>
                         <h4><b>Observaciones</b> </h4>
                        <p class="m-t-30">
                            &nbsp;<?php echo $venta->observacion; ?>
                        </p>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            <p>Sub - Total : $<?php echo $venta->pvts; ?></p>
                            <p>Descuento (<?php echo number_format((1-$venta->total/$venta->pvts)*100 , 2, ',', ' ') ; ?>%) : ($<?php echo $venta->pvts-$venta->total; ?>) </p>
                            <hr>
                            <h3><b>Total :</b> $<?php echo $venta->total; ?></h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <?php if($apertura[0]['usuario']==$this->session->userdata('id')): ?>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#CobrarV"
                             data-idventa="<?php echo $venta->id; ?>"
                            data-iduser="<?php echo $venta->user; ?>" > Proceder al pago </button>
                            <?php endif ?>
                            <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ---------------------------------------- comienzo modal de cobro  ----------------------------->
                        <div class="modal fade" id="CobrarV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingresar Pago</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Importe</label>
                                        <input type="number" class="form-control" name="importe" id="importe" value="<?php echo $venta->total; ?>">
                                        <input type="hidden" id="token" name="token" value="<?php echo time(); ?>">
                                        <input type="hidden" name="vendedor" id="vendedor" value="<?php echo $venta->vendedor; ?>" >
                                        <input type="hidden" name="comision" id="comision" value="<?php echo $venta->comision; ?>">
                                        <input type="hidden" name="lider" id="lider" value="<?php echo $venta->lider; ?>" >
                                        <input type="hidden" name="comlider" id="comlider" value="<?php echo $venta->comlider; ?>">
                                        
                                    </div>
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-md-7 controls">
                                        <label class="custom-control custom-radio"></label>
                                     <select name="modo" id="modo" class="form-control custom-select">
                                            <option value="efectivo">efectivo</option>
                                            <option value="mercadopago">mercadopago</option>
                                        </select>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                                <button type="button" id="btnIPE" data-dismiss="modal" class="btn btn-primary" >Cobrar</button>

                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal de cobro ------------------------------>

<!-- Comprobante print JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
<script type="text/javascript">
   
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });


///////////////////ingresar pago////////////////////////////////////
    

    var idventa;
    var iduser;
    var idart = [];
    var cantidad = [];

 
$('#CobrarV').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información, datos- * atributos
  idventa = button.data('idventa') // Extraer información de datos- * atributos
  iduser = button.data('iduser') // Extraer información de datos- * atributos
  
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#btnIPE').click(function(){
    var CountIdart = document.getElementsByName("idart[]").length;
    for(i=0;i<CountIdart;i++){
        idart[i] = document.getElementsByName("idart[]")[i].value; 
    };
    var CountCant = document.getElementsByName("cantidad[]").length;
    for(i=0;i<CountCant;i++){
        cantidad[i] = document.getElementsByName("cantidad[]")[i].value; 
    };
    pimporte = $('#importe').val();
    ptoken = $('#token').val();
    pmodo = $('#modo').val();
    Pvendedor = $('#vendedor').val();
    Pcomision = $('#comision').val();
    Plider = $('#lider').val();
    Pcomlider = $('#comlider').val();
    console.log(pimporte)
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/insertar_pago_contado",
      data: { idventa: idventa,
              iduser: iduser,
              vendedor : Pvendedor,
              comision : Pcomision,
              lider : Plider,
              comlider : Pcomlider,
              cobrador: '<?php echo $this->session->userdata('id'); ?>',
              importe: pimporte,
              modo: pmodo,
              token: ptoken,
              id_articulo: idart,
              cantidad: cantidad,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
}) .done(function(cobro) {
      
      $('#container-fluid').empty();
      $('#container-fluid').append(cobro);


    });     
   
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar pago/////////////////////////////////
    </script>