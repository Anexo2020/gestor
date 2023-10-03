
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
           
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-info"></h4></div>
                    <div class="spark-chart">
                        <div ></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-primary"></h4></div>
                    <div class="spark-chart">
                        <div ></div>
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
    <div class="row ">
        <!-- column -->
        <div class="col-lg-6">
           

           
            <div class="card">
                
                    
                   <div class="table-responsive m-t-40 {-sm}">
                        <table id="example23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    
                                    <th>creditos</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0; foreach ($creditos as $credito): ?>
                                <tr> <?php $i++; ?>
                                    
                                    <td><div>
                                        <div class="pull-left w-50"><span class="pull-left">
                                        <a href="<?php echo base_url('admin/user/all_pagos_c/'.$credito['id']) ?>" class="btn btn-xs btn-dark">.   plan   .</a></span>
                                        </div> 
                                        <div class="pull-right w-50">
                                        <span class="pull-right"> <a href=https://api.whatsapp.com/send?phone=549<?php echo $credito['celular'];?>&text=Hola%20<?php echo $credito['user_name'];?>%20soy%20el%20cobrador%20de%20ANEXO: class="btn btn-xs btn-success">whatsapp</a>
                                        </span>
                                        </div>
                                        </div>
                                        <div class="p-t-20"><b class="font-bold">
                                        <?php echo strtoupper($credito['user_apellido']." ".$credito['user_name']); ?></b><br>
                                        direccion: <?php echo strtolower($credito['direccion']);  ?><br>
                                        entre: <?php echo strtolower($credito['entrecalles']);  ?><br>
                                        localidad: <?php echo strtolower($credito['localidad']);  ?><br>

                                        anticipo: $ <?php echo $credito['anticipo'];  ?><br>
                                        plan: <?php echo strtolower($credito['modo']);  ?> en <?php echo strtolower($credito['plazo']);  ?> 
                                        cuotas de <b class="font-bold">$ <?php echo $credito['cuota'];?></b><br>
                                        entregado: <?php echo date("d/m/Y", strtotime($credito['entregado']));  ?><br>

                                       
                                        </div> 
                                        <div id="repro_<?php echo $credito['id']; ?>">
                                        reprogramada para: <?php echo date("d/m/Y",strtotime($credito['rep'])); ?>
                                        </div> 
                                        
                                        <div>
                                        <div class="pull-left w-50">
                                        <a data-toggle="modal" data-target="#Cobrar" href="#"
                                        data-idcred="<?php echo $credito['id']; ?>"
                                        data-iduser="<?php echo $credito['user_id']; ?>" 
                                        data-modalidad="<?php echo $credito['modo']; ?>"
                                        data-chat_id="<?php echo $credito['chat_id']; ?>"
                                        class="btn btn-info btn-block btn-sm ">cobrar</a>
                                        </div>
                                        <div class="pull-right w-50">
                                        <a data-toggle="modal" data-target="#Reprogamar" href="#"
                                        data-idcredito="<?php echo $credito['id']; ?>"
                                        class="btn btn-success btn-block btn-sm ">programar visita</a> 
                                        </div>
                                        

                                        </td>
                                    



    </div>
  </div>
</div>
                                </tr> 
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                
            </div>
        </div>
       
        <!-- column -->
        
        <!-- column -->
       
        <!-- column -->
        
       
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ---------------------------------------- comienzo modal de cobro  ----------------------------->
                        <div class="modal fade" id="Cobrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <input type="number" class="form-control" name="importe" id="importe">
                                        <input type="hidden" id="fecha" name="fecha" value="<?php echo date('Y/m/d'); ?>">
                                        <input type="hidden" id="token" name="token" value="<?php echo time(); ?>">
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <?php if(empty($chequeo)): ?>
                                <button type="button" id="grd-2" data-dismiss="modal" class="btn btn-primary">Guardar</button>
                                <?php endif ?>
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal de cobro ------------------------------>
<!-- ---------------------------------------- comienzo modal reprogamar  ----------------------------->
                        <div class="modal fade" id="Reprogamar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Progamar ruta</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">fecha</label>
                                        <input type="date" class="form-control" name="rep" id="rep">
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                
                                <button type="button" id="grd-3" data-dismiss="modal" class="btn btn-primary">Guardar</button>
                                
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal reprogramar ------------------------------>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<script>
$('#example23').DataTable({
        dom: 'Bfrtip',
        
    });



///////////////////ingresar pago////////////////////////////////////
    

    var idcred;
    var iduser;
    var ptoken;
    var pimporte;
    var modalidad;
    var chat;
 
$('#Cobrar').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información, datos- * atributos
  idcred = button.data('idcred') // Extraer información de datos- * atributos
  iduser = button.data('iduser') // Extraer información de datos- * atributos
  chat = button.data('chat_id') // Extraer información de datos- * atributos
  modalidad = button.data('modalidad') // Extraer información de datos- * atributos
  
  console.log(idcred)
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#grd-2').click(function(){

    pimporte = $('#importe').val();
    pmodo = $('#modo').val();
    pfecha = $('#fecha').val();
    ptoken = $('#token').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/user/insertar_pago",
      data: { idcredito: idcred,
              user_id: iduser,
              cobrador: '<?php echo $this->session->userdata('id'); ?>',
              role: '<?php echo $this->session->userdata('role'); ?>',
              importe: pimporte,
              chat_id: chat,
              modo: pmodo,
              forma: modalidad,
              fecha: pfecha,
              token: ptoken,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(cobro) {
      
 
      $('#fluidocont').empty();
      $('#fluidocont').append(cobro);
      
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar pago/////////////////////////////////
///////////////////reprogramar pago////////////////////////////////////
    
var idcredito;
var prep;
var cadena = '#repro_';
var idaremp;
$('#Reprogamar').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información de datos- * atributos
  idcredito = button.data('idcredito') // Extraer información de datos- * atributos
  idaremp = cadena + idcredito;
  console.log(idcredito);
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#grd-3').click(function(){

    prep = $('#rep').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/cob/reprogamarcobro",
      data: { idcredito: idcredito,
              rep: prep,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(repro) {
      
 
      $(idaremp).empty();
      $(idaremp).append(repro);
      
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin ingresar pago/////////////////////////////////


</script>