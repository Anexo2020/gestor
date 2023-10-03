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

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">


            <div class="card">

                <div class="card-body">

                    <div  class="table-responsive m-t-10">
                        <table id="example33" class="display nowrap table-zero  table-striped table-bordered " cellspacing="0" width="100%" >
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>edit</th>
                                    <th>Cliente</th>
                                    <th>Articulo</th>
                                    <th>Anticipo</th>
                                    <th>Plazo</th>
                                    <th>Cuota</th>
                                    <th>Modalidad</th>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <th>Creado</th>
                                    <?php endif ?>
                                    <?php if($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
                                    <th>Veri</th>
                                    <?php endif ?>
                                    <th>Verificacion</th>
                                    <th>Motivo</th>
                                    <th>Verifico</th>
                                    <th>Vendedor</th>
                                    <?php if($this->session->userdata('role')!== 'vendedor' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'supervisor_a'): ?>
                                    <th>Credito</th>
                                    
                                    <?php endif ?>
                                </tr>
                            </thead>
                            
                            
                            <tbody>
                            <?php  foreach ($creditos as $credito): ?>
                                
                                <tr>
                                    <td><?php echo $credito['id']; ?></td>
                                    <td> <a href="<?php echo base_url('admin/user/update_credito/'.$credito['id']) ?>"data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a></td>
                                    <td><h6><?php echo $credito['user_apellido'].' '.$credito['user_name']; ?></h6></td>
                                    <td><?php echo $credito['articulo']; ?></td>
                                    <td><?php echo "$".$credito['anticipo']; ?></td>
                                    <td><?php echo $credito['plazo']; ?></td>
                                    <td><?php echo "$".$credito['cuota']; ?></td>
                                    <td><?php echo $credito['modo']; ?>
                                                 

                                    </td>

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

                                    data-toggle="tooltip" data-original-title="Edit" class="btn btn-sm btn-secondary"><?php echo $credito['verificado']; ?></a>
                                    <?php else:?>
                                    <?php echo $credito['verificado']; ?>
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
                                    <td>
                                        <?php echo $credito['userv_name']; ?>
                                    </td>
                                    <?php if($this->session->userdata('role')!== 'vendedor' && $this->session->userdata('role')!== 'verificador' && $this->session->userdata('role')!== 'cobrador' && $this->session->userdata('role')!== 'supervisor_a'): ?>
                                    <td><a href="<?php echo base_url('admin/pages/solicitud/'.$credito['id']) ?>" target="_blank" class="btn btn-xs btn-dark">solicitud</a></td>
                                    
                                    
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