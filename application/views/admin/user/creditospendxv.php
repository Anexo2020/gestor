

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Solicitudes</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Incio</a></li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Info 1</small></h6>
                        <h4 class="m-t-0 text-info">10</h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Info 2</small></h6>
                        <h4 class="m-t-0 text-primary">10</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

            <div class="card">

                

                    <div class="table-responsive m-t-40 {-sm}">
                        <table id="example23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Solicitud</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            <?php  foreach ($creditos as $credito): ?>
                                <div id="fila_<?php echo $credito['id']; ?>">
                                <tr>
                                    <td>
                                        <div><h6><?php echo $credito['user_apellido'].' '.$credito['user_name']; ?></h6>
                                            dni: <?php echo $credito['dni']; ?>
                                        </div>
                                        <div>
                                          Direccion: <?php echo $credito['direccion']; ?>
                                        </div>
                                        <div>
                                          Entrecalles: <?php echo $credito['entrecalles']; ?><br>
                                          localidad: <?php echo $credito['localidad']; ?>
                                        </div>
                                        <div>
                                          <?php echo $credito['articulo']; ?>  
                                        </div>
                                        <div>
                                          Anticipo: <?php echo "$".$credito['anticipo']; ?>
                                        </div>
                                        <div>
                                          Plazo: <?php echo $credito['plazo']; ?> 
                                        </div>
                                        <div>
                                          Cuota: <?php echo "$".$credito['cuota']; ?>  
                                        </div>
                                        <div>
                                          <?php echo $credito['modo']; ?>  
                                        </div>
                                        <div>
                                          Creado: <?php $newDate = date("d/m/Y", strtotime($credito['creado']));
                                        echo $newDate; ?> 
                                        </div>
                                        <div id="estado<?php echo $credito['id']; ?>">
                                        <a data-toggle="modal" data-target="#Pendiente" href="#"
                                        data-idcred="<?php echo $credito['id']; ?>"
                                        data-iduser="<?php echo $credito['user_id']; ?>"

                                        data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm btn-secondary"><?php echo $credito['verificado']; ?></a>
                                        </div>
                                        <div>
                                          Vendio: <?php echo $credito['userv_name']; ?>
                                        </div>
                                        <div>
                                        <div class="pull-left">
                                          <a  href="<?php echo base_url('admin/pages/solicitudcel/'.$credito['id']) ?>"
                                        class="btn btn-sm btn-secondary">solicitud</a>  
                                        </div> 
                                        <div class="pull-right">
                                          <a href=https://api.whatsapp.com/send?phone=549<?php echo $credito['celular'];?>&text=Hola!%20me%20comunico%20de%20ANEXO%20con%20el%20fin%20de%20informar%20que%20tu%20solicitud%20de%20credito%20no%20fue%20aprobada class="btn btn-xs btn-success">whatsapp</a>  
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                </div>

                            <?php  endforeach  ?>

                            </tbody>


                        </table>

<!-- ---------------------------------------- comienzo modal estado  ----------------------------->
                        <div class="modal fade" id="Pendiente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Actualizar estado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                
                                    <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Credito</label>
                                        <select name="verificado" id="verificado" class="form-control custom-select">
                                            <option value="aprobado">aprobado</option>
                                            <option value="rechazado">rechazado</option>
                                            <option value="cancelado">cancelado</option>
                                        </select>
                                    </div>
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-md-7 controls">
                                        <label for="message-text" class="col-form-label">Motivo:</label>
                                        <select name="motivo" id="Motivoi" class="form-control custom-select">
                                            <option value=""></option>
                                            <option value="poco confiable">poco confiable</option>
                                            <option value="Bajos recursos">Bajos recursos</option>
                                            <option value="Tercera visita">Tercera visita</option>
                                            <option value="Moroso del sistema">Moroso del sistema</option>
                                            <option value="Zona muy peligrosa">Zona muy peligrosa</option>
                                            <option value="el cliente esta Indecizo">el cliente esta Indecizo</option>
                                            <option value="Tiene rechazos anteriores">Tiene rechazos anteriores</option>
                                            <option value="Lo cancelo el cliente">Lo cancelo el cliente</option>
                                        </select>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="grd-1" class="btn btn-primary">Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal Estado ------------------------------>
                    </div>
                
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>





 <script>
$('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });



///////////////////actualiza el estado////////////////////////////////////

    var idcred;
    var iduser;
    var ap = '#estado';
    var re = '#fila_';
    var rp;
 
$('#Pendiente').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información de datos- * atributos
  idcred = button.data('idcred') // Extraer información de datos- * atributos
  iduser = button.data('iduser') // Extraer información de datos- * atributos
  xp = ap + idcred;
  console.log(idcred)
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
  $('#grd-1').click(function(){
    pverificado = $('#verificado').val();
    pmotivoi = $('#Motivoi').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/user/actualizar_verificado",
      data: { verificado: pverificado,
              motivo: pmotivoi,
              verifico: '<?php echo $this->session->userdata('id'); ?>',
              el: '<?php echo date('Y/m/d'); ?>',
              id: idcred,
              user_id: iduser,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(est) {
      console.log(est)
      $('#Pendiente').modal('hide');
      $(xp).empty(); 
      $(xp).append(est);  

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.
  var modal = $(this)
  modal.find('.modal-title').text('Actulizar Verificacion')
})
//////////////////////fin actualiza el estado/////////////////////////////////


</script>
