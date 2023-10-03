
<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Clientes</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Incio</a></li>
                <li class="breadcrumb-item active">Clientes</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

           
            <div class="card">

                <div class="card-body">

                

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>DNI</th>
                                    <th>Nombre</th>
                                    <th>Whatsapp</th>
                                    <th>Dirección</th>
                                    <th>Localidad</th>
                                    <th>Día de ingreso</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
           
                            <tbody>
                            <?php  foreach ($users as $user): ?>
                                
                                <tr>
                                    <td><?php echo $user['dni']; ?></td>
                                    <td><?php echo $user['last_name'].' '.$user['first_name']; ?></td>
                                    <td><a href= "https://api.whatsapp.com/send?phone=549<?php echo $user['mobile'];?>&text=Hola!%20Somos%20Anexo%20Electro%20y%20queremos%20invitarte%20a%20nuestro%20grupo%20de%20difusion,%20para%20que%20no%20te%20pierdas%20del%20stock%20diario%20y%20conozcas%20todas%20las%20ofertas%20%20disponibles!%20Importante:%20No%20te%20olvides%20de%20agendar%20este%20numero!" class="btn btn-xs btn-success" target="_blank">whatsapp</a></td>
                                    <td><?php echo $user['direccion']; ?></td>
                                    <td><?php echo $user['country']; ?></td>

                                    <td><?php echo my_date_show_time($user['created_at']); ?></td>
                                    <td class="text-nowrap">

                                            <a href="<?php echo base_url('admin/pages/profilec/'.$user['id']) ?>" target="_blank" class="btn btn-outline-info">Info</a> 
                                        <div id="tilde<?php echo $user['id']; ?>">
                                        <?php if ($user['contactado'] == 0): ?>
                                            <a href="#" 
                                            data-toggle="modal" 
                                            data-target="#Contactados"                            data-idcliente="<?php echo $user['id']; ?>"
                                            data-contactado="1"> <i class="fa fa-close text-danger m-r-10"></i> </a>
                                        <?php else: ?>
                                            <a href="#" 
                                            data-toggle="modal" 
                                            data-target="#Contactados" 
                                            data-idcliente="<?php echo $user['id']; ?>"
                                            data-contactado="0"><i class="fa fa-check text-info m-r-10"></i> </a>
                                        <?php endif ?>
                                        </div>
                                    </td>
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



<!-- ---------------------------------------- comienzo modal reprogamar  ----------------------------->
                       <div class="modal fade" id="Contactados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Cambiar estado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                
                                <button type="button" id="cctdo" data-dismiss="modal" class="btn btn-primary">Guardar</button>
                                
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal reprogramar ------------------------------>


