

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Solicitudes</h3>
            
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        
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
    
    <style type="text/css">
        .table-zero{
            width: 100%;
        }
        .table-zero th{
            
            
        }
        .table-zero td {
           text-align: center;
           vertical-align: middle;
           padding: 0.5rem;
        }
    </style>
    
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

                
                

                    <div class="table-responsive m-t-10">
                        <table id="example23" class="display nowrap table table-zero table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr><?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador' || $this->session->userdata('role')=='supervisor_a' || $this->session->userdata('role')=='supervisor_b') : ?>
                                    <th>Credito</th>
                                    <?php endif ?>
                                    <th>Cliente</th>
                                    <th>Articulo</th>
                                    <th>&nbsp;&nbsp;Plan&nbsp;&nbsp;</th>
                                    <th>Estado</th>
                                    <th>Saldo</th>
                                    <th>%Pagado</th>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <th>Creado</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <th>Veri</th>
                                    <?php endif ?>
                                    <th>Verificacion</th>
                                    <th>Motivo</th>
                                    <th>Verifico</th>
                                    <th>Entregado</th>
                                    <th>Cobrador</th>
                                    <th>Vendedor</th>
                                    <?php if($this->session->userdata('role')!== 'vendedor' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'supervisor_a'): ?>
                                    <th>Whatsapp</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('role') == 'verificador' || $this->session->userdata('role') == 'supervisor_a'): ?>
                                    <th>Whatsapp</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <th>Edit</th>
                                <?php endif ?>
                                </tr>
                            </thead>
 
                            <tbody>
                            <?php  foreach ($creditos as $credito): ?>
                                
                                <tr>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador' || $this->session->userdata('role')=='supervisor_a' || $this->session->userdata('role')=='supervisor_b') : ?>
                                    <td><div style="padding:4px">
                                        <a href="<?php echo base_url('admin/pages/solicitud/'.$credito['id']) ?> " target="_blank" class="btn btn-sm btn-dark">SOLICITUD</a>
                                    </div>
                                    <div style="padding:4px">
                                        <a href="<?php echo base_url('admin/user/all_cuotas/'.$credito['id']) ?>" target="_blank" class="btn btn-sm btn-dark"><?php echo "CD00".$credito['id']; ?></a>
                                    </div>
                                    <div style="padding:4px">
                                        <a href="<?php echo base_url('admin/user/all_pagos/'.$credito['id']) ?>" target="_blank" class="btn btn-sm btn-dark">&nbsp;PAGOS&nbsp;&nbsp;</a>
                                    </div>
                                    </td>
                                    <?php endif ?>
                                    <td><h6><?php echo $credito['user_apellido'].' '.$credito['user_name']; ?></h6></td>
                                    <td><?php echo $credito['articulo']; ?></td>
                                    <td>anticipo <?php echo "$".$credito['anticipo']; ?> y <?php echo $credito['plazo']; ?> cuotas de <?php echo "$".$credito['cuota']; ?> <?php echo $credito['modo']; ?></td>
                                    <td><?php echo $credito['estado']; ?></td>
                                    <td><?php echo $credito['saldo']; ?></td>
                                    <td><div><a href="#" data-id="<?php echo $credito["id"]; ?>" data-toggle="tooltip" data-html="true" title="Espere..."><?php echo number_format(($credito['cft']-$credito['saldo'])/$credito['cft']*100 , 0, ',','.'); ?>%</a></div>
                                        <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo number_format(($credito['cft']-$credito['saldo'])/$credito['cft']*100 , 0, ',','.'); ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($credito['cft']-$credito['saldo'])/$credito['cft']*100; ?>%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div></td>

                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <td><?php $newDate = date("d/m/Y", strtotime($credito['creado']));
                                        echo $newDate; ?></td>
                                    <?php endif ?>   
                    <!--  -------------------- veri ------------- ---------- -->
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <td><?php if ($credito['veri'] == 0): ?>
                                            <a href="<?php echo base_url('admin/user/noveri/'.$credito['id']) ?>" data-toggle="tooltip" data-original-title="Sin Verificar"> <i class="fa fa-close text-danger m-r-10"></i> </a>
                                        <?php else: ?>
                                            <a href="<?php echo base_url('admin/user/veri/'.$credito['id']) ?>" data-toggle="tooltip" data-original-title="Verificado"> <i class="fa fa-check text-info m-r-10"></i> </a>
                                        <?php endif ?></td>
                                    <?php endif ?>   
                    <!--  --------------------fin veri ------------- ---------- -->
                    <!--  -------------------- verificacion ------------- ---------- -->                 
                                    <?php if($this->session->userdata('role')!== 'vendedor' && $this->session->userdata('role')!== 'cobrador'): ?>
                                    <td><div id="estado<?php echo $credito['id']; ?>"><?php if($credito['verificado']=="pendiente"): ?>
                                    <a data-toggle="modal" data-target="#Pendiente" href="#"
                                    data-idcred="<?php echo $credito['id']; ?>"
                                    data-iduser="<?php echo $credito['user_id']; ?>"

                                    class="btn btn-sm btn-secondary"><?php echo $credito['verificado']; ?></a>
                                    <?php elseif($credito['verificado']=="aprobado"): ?>
                                    <?php echo $credito['verificado']; ?>
                                    <?php else: ?>
                                    <?php echo $credito['verificado']; ?>
                                    <a data-toggle="modal" data-target="#Pendiente" href="#"
                                    data-idcred="<?php echo $credito['id']; ?>"
                                    data-iduser="<?php echo $credito['user_id']; ?>"

                                    data-toggle="tooltip "> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                    <?php endif ?>
                                    </div>                
                                    </td>
                    <!--  -------------------- fin verificacion ------------- ---------- -->
                    <!--  --------------------Motivo ------------- ---------- -->

                                    <td><div id="<?php echo $credito['id']; ?>"><?php if($credito['verificado']=='rechazado' && $credito['motivo']==''): ?>
                                    <a href="#" data-toggle="modal" data-target="#Motivo" 
                                    data-id="<?php echo $credito['id']; ?>" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                    <?php elseif($credito['verificado']=='cancelado' && $credito['motivo']==''): ?>
                                    <a href="#" data-toggle="modal" data-target="#Motivo" 
                                    data-id="<?php echo $credito['id']; ?>" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                    <?php else: ?>
                                    <?php if ($credito['verificado']=='aprobado'||$credito['verificado']=='pendiente'): ?>

                                    <?php else: ?>
                                     <a class="mytooltip" href="#"> Motivo<span class="tooltip-content5"><span class="tooltip-text3"><span class="tooltip-inner2"><?php echo $credito['motivo'] ?></span></span></span></a> 
                                    <?php endif ?>
                                    <?php endif ?></div> </td>

                                    <td><?php echo $credito['users_name']; ?></td>

                                    <?php else: ?>
                     <!--  --------------------para vendedores ------------- ---------- -->              
                                    <td><?php if($credito['verificado']=="pendiente"): ?>
                                    <?php echo $credito['verificado']; ?></a>
                                    <?php else:?>
                                    <?php echo $credito['verificado']; ?> 
                                    <?php endif ?>                
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <?php endif ?>
                    <!--  --------------------fin verificacion ------------- ---------- -->                        
                                    <td><?php if($credito['entregado']=="0000-00-00" && $credito['verificado']=="aprobado"):?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador'): ?>
                                  
                                    <a href="<?php echo base_url('admin/user/fecha_entrega/'.$credito['id']) ?>" class="btn btn-sm btn-secondary"><i class="fa fa-plus"></i><?php	echo "  fecha"; ?></a>
                                   
                                        <?php else: ?>
                                            <?php echo "En espera" ?>
                                        <?php endif ?>

										<?php elseif($credito['verificado']=="pendiente"): ?>                                    
                                        <?php echo "En espera" ?>
                                        <?php elseif($credito['verificado']=="rechazado"): ?>
                                        <?php echo "Rechazado" ?>
                                        <?php else: ?>
                                        <?php 
										$newDate = date("d/m/Y", strtotime($credito['entregado']));
										echo $newDate; ?>
                          				<?php endif ?>
                                    </td>


                                    <td>
                                        <?php if($credito['userz_name']=="" && $this->session->userdata('role')!== 'vendedor' && $this->session->userdata('role')!== 'cobrador'):?>
                                        <?php if($credito['entregado'] !== "0000-00-00"):?>
                                        <a href="<?php echo base_url('admin/user/asignar_cobrador/'.$credito['id']) ?>" ><?php	echo "asignar"; ?></a>
                                        <?php else: ?>
                                        <?php   echo "asignar"; ?>
                                        <?php endif ?>
										<?php else: ?>
									 	<?php	echo $credito['userz_name']; ?>
                          				<?php endif ?>
                                    </td>

                                    <td>
                                        <?php echo $credito['userv_name']; ?>
                                    </td>
                                    <?php if($this->session->userdata('role')!== 'vendedor' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'supervisor_a'): ?>
                                    
                                    
                                    <td><a href=https://api.whatsapp.com/send?phone=549<?php echo $credito['celular'];?>&text=Hola!%20nos%20comunicamos%20desde%20ANEXO%20para%20confirmar%20que%20tu%20credito%20ya%20ha%20sido%20activado%20puedes%20ingresar%20en%20http://www.anexo.com.ar/app%20para%20ver%20tu%20estado%20de%20cuenta!%20Usuario:%20<?php echo $credito['dni']; ?>%20Password:%20<?php echo $credito['user_apellido']; ?> class="btn btn-xs btn-success">whatsapp</a></td>
                                <?php endif ?>
                                <?php if($this->session->userdata('role') == 'verificador' || $this->session->userdata('role') == 'supervisor_a'): ?>
                                    <td><a href=https://api.whatsapp.com/send?phone=549<?php echo $credito['celular'];?>&text=Hola!%20me%20comunico%20de%20ANEXO%20con%20el%20fin%20de%20informar%20que%20tu%20solicitud%20de%20credito%20no%20fue%20aprobada class="btn btn-xs btn-success">whatsapp</a></td>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <td>
                                       <?php if($credito['entregado']!=="0000-00-00") :?>
                                         <a href="<?php echo base_url('admin/user/edit_entregado/'.$credito['id']) ?>"> <i class="fa fa-pencil text-success m-r-10"></i> </a> 
                                         <?php else: ?>
                                         <a href="<?php echo base_url('admin/user/update_credito/'.$credito['id']) ?>"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                                     <?php endif ?>
                                    </td>
                                <?php endif ?>
                                </tr>

                            <?php  endforeach  ?>

                            </tbody>


                        </table>
<!-- ---------------------------------------- comienzo modal motivo ---------------------------------->
                        <div class="modal fade" id="Motivo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Motivo de rechazo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="form-group">
                                   
                                    <input type="hidden" class="form-control" id="recipient-name">
                                  </div>
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Motivo:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="ok" class="btn btn-primary">Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
<!---------------------------------------------------- fin modal motivo------------------------------>
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
    </div>


    <!-- End Page Content -->

</div>


 <script>

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
  trigger: 'hover'
}).on('shown.bs.tooltip', function() {
  var link = $(this);
  var id = link.attr("data-id");
  
  $.ajax({
    url:"https://anexo.com.ar/app/admin/caja/pruebatooltipax",
    method:"POST",
    async: false,
    data:{id:id,
        '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',        
    },
    success:function(data)
    {
     fetch_data = data;
     console.log(data);
     link.attr('data-original-title', data);
    }
   });
  
  setTimeout(function() {
    if (link.is(':hover')) {
      link.tooltip("dispose").tooltip("show");
    }
  }, 1000);
});
  
 });



    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    });

///////////////////actualiza el motivo////////////////////////////////////

    var ident;
    var ar = '#';
    var xs;
 
$('#Motivo').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información de datos- * atributos
  ident = button.data('id') // Extraer información de datos- * atributos
  xs = ar + ident;
  console.log(ident)
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
  $('#ok').click(function(){
    pmotivo = $('#message-text').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/user/update_motivo",
      data: { motivo: pmotivo,
              id: ident,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(res) {
      console.log(res)
      $('#Motivo').modal('hide');
      $(xs).empty(); 
      $(xs).append(res);  

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.
  var modal = $(this)
})
//////////////////////fin actualiza el motivo/////////////////////////////////

///////////////////actualiza el estado////////////////////////////////////

    var idcred;
    var iduser;
    var ap = '#estado';
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
