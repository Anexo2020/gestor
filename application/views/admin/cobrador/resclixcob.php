<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
$('#example33').DataTable({
        "paging": false,
        fixedHeader: {
            header: true,
            headerOffset: $('#fixed').height(50)
        },
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]

    });
})
</script>
<style type="text/css">
        table.zero{
            width: 100%;
        }
        th{
            padding: 0.5rem;
            vertical-align: middle;
        }
        th, td {
           text-align: center;
        }
    </style>
<div class="table-responsive m-t-10">

                        <table id="example33" class="display nowrap table-zero  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                 <tr>
                                    <th>N°</th>
                                    <th>CLIENTE</th>
                                    <th>DIRECCION</th>
                                    <th>ENTRECALLES</th>
                                    <th>LOCALIDAD</th>
                                    <th>ZONA</th>
                                    <th>ATRASO</th>
                                    <th>ARTICULO</th>
                                    <th>PAGADO</th>
                                    <th>ULTIMO PAGO</th>
                                    <th>CUOTAS PAGAS</th>
                                    <th>ACCION</th>
                                    <th>SIGUIENTE</th>
                                    <th>REPROGRAMADA</th>
                                    <th>ENTREGADO</th>
                                    <th>PLAN</th>
                                    <th>CUOTAS</th>
                                    <th>IMPORTE</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php  foreach ($creditos as $credito): ?>
                                
                                <tr id="fila_<?php echo $credito['id'];?>">
                                    <td><?php echo strtolower($credito['id']);
                                        //////
                                        $pagado = 0; foreach($pagos as $pago){
                                       if($pago['idcredito'] == $credito['id']){
                                        $pagado = $pagado+$pago['importe'];
                                       }
                                       }
                                       ///////
                                       $cancelado = ($pagado/$credito['cuota']);
                                       ///////
                                      ?></td>
                                    <td><?php echo strtoupper($credito['user_apellido']." ".$credito['user_name']); ?></td>
                                    <td><?php echo strtolower($credito['direccion']);  ?></td>
                                    <td><?php echo strtolower($credito['entrecalles']);  ?></td>
                                    <td><?php echo strtolower($credito['localidad']);  ?></td>
                                    <td id="celda_<?php echo $credito['id'];?>">
                                        <a data-toggle="modal" data-target="#zona" href="#"
                                        data-idcredzona="<?php echo $credito['id']; ?>"
                                        class="btn btn-sm btn-primary ">
                                        <?php echo strtolower($credito['zona']);  ?>
                                        </a>
                                        </td>
                                    <td>
                                        <?php 
                                        //$limite = date("Y-m-d", strtotime($credito['rep']));
                                            $hoy=date("Y-m-d");
                                           
                                            $datetime1 = new DateTime($credito['rep']);
                                            $datetime2 = new DateTime($hoy);
                                            $interval = $datetime1->diff($datetime2);
                                            echo $interval->days; 
                                            /*se puede remplazar "days;" x "format('%R%a días');" */
                                         ?>    
                                        </td>
                                    <td>  
                                        <?php  if($cancelado >= 1){
                                            $Date = strtotime($credito['vence']);
                                            switch ($credito['modo']) {

                            case 'semanal':
                               $fechaA = date("Y-m-d",strtotime("+1 week",$Date));
                               $fecha1 = new DateTime($fechaA);
                               $dias = $fecha1->diff($datetime2);
                                echo $dias->format('%R%a días');
                               break;
                            case 'quincenal':
                               $fechaA =  date("Y-m-d",strtotime("+2 week",$Date));
                               $fecha1 = new DateTime($fechaA);
                               $dias = $fecha1->diff($datetime2);
                                echo $dias->format('%R%a días');
                               break;
                            case 'mensual':
                                $fechaA = date("Y-m-d",strtotime("+1 month",$Date));
                                $fecha1 = new DateTime($fechaA);
                               $dias = $fecha1->diff($datetime2);
                                echo $dias->format('%R%a días');
                                break;
                            case 'diario':
                                $fechaA = date("Y-m-d",strtotime("+1 day",$Date));
                                $fecha1 = new DateTime($fechaA);
                               $dias = $fecha1->diff($datetime2);
                                echo $dias->format('%R%a días');
                                break;

                        }
                                        } else { echo date("Y-m-d", strtotime($credito['vence']));

                                    }  ?>
                                        
                                        
                                    </td>
                                    
                                    <td>$ <?php echo $pagado; ?></td>
                                    <td><?php echo date("d/m/Y", strtotime($credito['ultimopago'])); ?></td>
                                    <td><?php echo (int) $cancelado; ?> de <?php echo $credito['plazo'];  ?></td>
                                    <td><a data-toggle="modal" data-target="#sacar" href="#"
                                        data-idcred="<?php echo $credito['id']; ?>"
                                        data-iduser="<?php echo $credito['user_id']; ?>" 
                                        class="btn btn-sm btn-danger ">sacar</a></td>
                                    <td>cuota <?php echo (int) $cancelado+1; ?> vence: <b class="font-bold"><?php  if($cancelado >= 1){
                                            $Date = strtotime($credito['vence']);
                                            switch ($credito['modo']) {

                            case 'semanal':
                               echo  date("d/m/Y",strtotime("+1 week",$Date));
                               break;
                            case 'quincenal':
                               echo  date("d/m/Y",strtotime("+2 week",$Date));
                               break;
                            case 'mensual':
                                echo  date("d/m/Y",strtotime("+1 month",$Date));
                                break;
                            case 'diario':
                                echo  date("d/m/Y",strtotime("+1 day",$Date));
                                break;

                        }
                                        } else { echo date("d/m/Y", strtotime($credito['vence']));}  ?></b></td>
                                    <td><?php echo date("d/m/Y",strtotime($credito['rep'])); ?></td>
                                <td><?php echo date("d/m/Y", strtotime($credito['entregado']));  ?></td>
                                    <td><?php echo strtolower($credito['modo']);  ?></td>
                                    <td><?php echo strtolower($credito['plazo']);  ?></td>
                                    <td>$ <?php echo $credito['cuota'];?></td>
                                    
                                </tr>
                            <?php  endforeach  ?>
                            </tbody>

                                 
                        </table>
                        <div class="align-items-start p-l-50"></div>
                    </div>

                    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ---------------------------------------- comienzo modal de sacar  ----------------------------->
                        <div class="modal fade" id="sacar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Desafectar credito de cobrador</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                 
                                  <div class="form-group">
                                    <div class="col-md-7 controls">
                                        <label class="custom-control custom-radio">Motivo</label>
                                     <select name="estado" id="estado" class="form-control custom-select">
                                            <option value="contencioso">moroso no paga</option>
                                            <option value="retirado">se retiro prod</option>
                                        </select>
                                    </div>
                                  </div>
                                  <div class="form-group"> 
                                    <div class="col-md-7 controls">
                                        <label class="control-label" class="col-form-label">Observacion</label>
                                        <textarea class="form-control" name="Observacion" id="Observacion"></textarea>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="grd-5" data-dismiss="modal" class="btn btn-primary">Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal de sacar------------------------------>

<!-- ------------------------------------ comienzo modal de zona  ----------------------------->
                        <div class="modal fade" id="zona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Actualizar Zona</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                 
                                  <div class="form-group">
                                    <div class="col-md-7 controls">
                                        <label class="custom-control custom-radio">Zona</label>
                                     <select name="zonaC" id="zonaC" class="form-control custom-select">
                                            <option value="1">Zona 1</option>
                                            <option value="2">Zona 2</option>
                                            <option value="3">Zona 3</option>
                                            <option value="4">Zona 4</option>
                                            <option value="5">Zona 5</option>
                                            <option value="6">Zona 6</option>
                                            <option value="7">Zona 7</option>
                                            <option value="8">Zona 8</option>
                                        </select>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="button" id="grd-25" data-dismiss="modal" class="btn btn-primary">Actualizar</button>
                              </div>
                            </div>
                          </div>
                        </div>
<!-------------------------------------------- fin modal de zona------------------------------>
<script>



///////////////////actualiza el estado////////////////////////////////////

    var idcred;
    var iduser;

    var re = '#fila_';
    var rp;
 
$('#sacar').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información de datos- * atributos
  idcred = button.data('idcred') // Extraer información de datos- * atributos
  iduser = button.data('iduser') // Extraer información de datos- * atributos
  xp = re + idcred;
  console.log(idcred)
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
  $('#grd-5').click(function(){
    recalifica = $('#estado').val();
    Obser = $('#Observacion').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/cob/recalificarCred",
      data: { recalificar: recalifica,
              obse: Obser,
              el: '<?php echo date('Y/m/d'); ?>',
              id: idcred,
              user_id: iduser,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(est) {
      console.log(est)
      $('#sacar').modal('hide');
      $(xp).remove();  

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.
  var modal = $(this)
  modal.find('.modal-title').text('Pasar a contencioso credito '+ idcred)
})
//////////////////////fin actualiza el estado/////////////////////////////////

///////////////////actualiza La Zona////////////////////////////////////

    var idcredzona;

    var rez = '#celda_';
    var rz;
 
$('#zona').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información de datos- * atributos
  idcredzona = button.data('idcredzona') // Extraer información de datos- * atributos
  xz = rez + idcredzona;
  console.log(idcredzona)
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
  $('#grd-25').click(function(){
    zonac = $('#zonaC').val();
    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/cob/ActZona",
      data: { zona: zonac,
              id: idcredzona,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(est) {
      console.log(est)
      $('#zona').modal('hide');
      $(xz).empty(); //vacio el div consola despues de post 
      $(xz).append(est);  // Escribimos en el div consola el mensaje devuelto
     })
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.
  var modal = $(this)
  
})
//////////////////////fin actualiza La Zona/////////////////////////////////


</script>