<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Solicitud</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Creditos</a></li>
                <li class="breadcrumb-item active">Solicitud</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador') : ?>
            <button class="btn btn-info" data-toggle="modal" data-target="#veirifar" >Sobre Cliente</button>
            <button class="btn btn-info" data-toggle="modal" data-target="#Modal02" >Sobre Credito</button>
            <?php endif ?>
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    
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
                <h3><b>SOLICITUD DE CREDITO</b> <span class="pull-right">#00000<?php echo $dato->id; ?></span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <form method="post"  class="form-horizontal" novalidate>
                    <div class="row">
                        <div class="col-4 ">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Datos del Solicitante</b></h3>
                                <p class="m-l-5"><b>Fecha de creacion:</b> <i class="fa fa-calendar"></i> <?php $newDate = date("d/m/Y", strtotime($dato->creado)); echo $newDate; ?>
                                <br/>DNI: <?php echo $dato->dni; ?>
                                    <br/> Titular: <?php echo $dato->user_apellido." ".$dato->user_name; ?>
                                    <input type="hidden" name="id_user" value="<?php echo $dato->user_id; ?>">
                                    <br/> Direccion: <?php echo $dato->direccion; ?>
                                    <input type="hidden" name="direccion" value="<?php echo $dato->direccion; ?>">
                                    <br/> Entrecalles: <?php echo $dato->entre; ?>
                                    <br/> Localidad: <?php foreach($localidad as $local):?> 
                                                    <?php if($local['id'] == $dato->local){ 
                                                    echo $local['name'];
                                                    }?>
                                                    <?php endforeach ?>
                                    <br/> Telefono: <?php echo $dato->celular; ?> 
                                    <input type="hidden" name="telefono" value="<?php echo $dato->celular; ?>">                 
                                </p>
                                
                            </address>

                        </div>
                        <div class="col-4 ">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Datos de Referencia</b></h3>
                                <p class="m-l-5">
                                          Referencia 1: <?php echo $referencia->name1; ?>
                                    <br/> Telefono: <?php echo $referencia->tel1; ?>
                                    <br/> Relacion: <?php echo $referencia->rel1; ?>
                                    <br/> -----------------------------------
                                    <br/> Referencia 2: <?php echo $referencia->name2; ?>
                                    <br/> Telefono: <?php echo $referencia->tel2; ?>
                                    <br/> Relacion: <?php echo $referencia->rel2; ?>
                                    <br/> -----------------------------------
                                    <br/> Referencia 3: <?php echo $referencia->name3; ?>
                                    <br/> Telefono: <?php echo $referencia->tel3; ?>
                                    <br/> Relacion: <?php echo $referencia->rel3; ?>
                                                    
                                </p>
                            </address>
                        </div>
                        <div class="col-4 ">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Datos Comerciales</b></h3>
                                <p class="m-l-5">
                                          Posee comercio: <?php echo $referencia->comer; ?>
                                    <br/> Direccion: <?php echo $referencia->direccion; ?>
                                    <br/> Entrecalles: <?php echo $referencia->entrecalles; ?>
                                    <br/> Localidad: <?php echo $referencia->localidad; ?>
                                    <br/> antiguedad: <?php echo $referencia->antiguedad; ?>
                                    <br/> Propietario: <?php echo $referencia->propia; ?>
                                    <h4> &nbsp;<b class="font-bold">Vendedor</b></h4>
                                <p class="m-l-15"><?php echo $dato->userv_name." ".$dato->userv_apellido; ?></p>                  
                                </p>
                            </address>
                        </div>
                         <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                        <?php if($this->session->userdata('role')=='admin'): ?>
                            <button type="button" onclick="this.form.action='<?php echo base_url('admin/cliente/verificar_1') ?>';this.form.target='_blank';this.form.submit();">enviar</button>
                        <?php endif ?>
                    </div>
                </form>
                    <div class="row">

                        <div class="col-4 ">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Plan</b></h3>
                                <p class="m-l-5">Anticipo <?php echo $dato->anticipo; ?>
                                    <br/> Cantidad de cuotas: <?php echo $dato->plazo; ?>
                                    <br/> Valor de la cuota: <?php echo $dato->cuota; ?>
                                    <br/> Condicion: <?php echo $dato->modo; ?> 
                                    <?php if ($dato->articulo==""): ?>
                                    <?php foreach($articulos as $articulo): ?>  
                                    <br/> Articulo: <?php echo $articulo['descripcion']; ?> -- Cantidad: <?php echo $articulo['cantidad']; ?> 
                                    <?php endforeach ?> 
                                    <?php else: ?>
                                    <br/> Articulo: <?php echo $dato->articulo; ?>   
                                    <?php endif ?>          
                                </p>
                            </address>
                        </div>
                        <div class="col-8">
                            <address>
                            <hr>
                            <h5>Credixsa cli: <b class="font-bold"> <?php echo $referencia->credixsa; ?></b></h5>
                            -----------------------------------
                            <h5>interna Cliente: <b class="font-bold"><?php echo $referencia->interna; ?></b></h5>
                            -----------------------------------
                             <hr>
                            <h5>Credixsa Soli: <b class="font-bold"> <?php echo $dato->credixsa; ?></b></h5>
                            -----------------------------------
                            <h5>interna Soli: <b class="font-bold"><?php echo $dato->interna; ?></b></h5>
                            -----------------------------------
                            <h5>Observaciones: <?php echo $dato->observaciones; ?></h5>
                            <h5><?php echo $referencia->observacion; ?></h5>
                        </address>
                        </div>

                </div>
                        
                    <div class="col-md-12">
                        

                        <hr>
                        <div class="text-right">
             <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                        <div class="row">
                            <div class="col-3"><span>firma Titular</span></div>
                            <div class="col-3"><span>Entrego</span></div>
                            <div class="col-3"><span>tres</span></div>
                            
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><span>
            En <b class="font-bold">ANEXO</b> Te decimos gracias por tu compra <?php echo $dato->user_apellido." ".$dato->user_name; ?></span></div>
                <div class="col-4">
                    <address>
                        <h3> &nbsp;<b class="font-bold">Plan</b></h3>
                        <p class="m-l-5">Anticipo <?php echo $dato->anticipo; ?>
                            <br/> Cantidad de cuotas: <?php echo $dato->plazo; ?>
                            <br/> Valor de la cuota: <?php echo $dato->cuota; ?>
                            <br/> Condicion: <?php echo $dato->modo; ?> 
                            <?php if ($dato->articulo==""): ?>
                            <?php foreach($articulos as $articulo): ?>  
                            <br/> Articulo: <?php echo $articulo['descripcion']; ?> -- Cantidad: <?php echo $articulo['cantidad']; ?> 
                            <?php endforeach ?> 
                            <?php else: ?>
                            <br/> Articulo: <?php echo $dato->articulo; ?>   
                            <?php endif ?>          
                        </p>
                    </address>
                </div>
                <div class="col-3" id="qrcode">
                <img src='https://anexo.com.ar/app/assets/images/qr_img.png'  width="94%" alt="anexo qr"/>
                </div>
                
                <div class="col-5">
                    <p>
                        Para poder ver tu estado de cuenta, tu plan de cuotas tus pagos y tus saldos, debes entrar al sitio web: <b class="font-bold">https:anexo.com.ar/app</b> colocando tu dni como usuario y 12345 para el password.
                        <br/><b class="font-bold">usuario: <?php echo $dato->dni; ?></b>
                        <br/><b class="font-bold">password: 12345</b>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ---------------------------------------- comienzo modal  ----------------------------->
                        <div class="modal fade" id="veirifar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" >
                                <h5 class="modal-title" id="exampleModalLabel">Datos de Verificacion <?php echo $dato->user_id; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                               <?php echo form_open('admin/user/update_verifiacion_sol'); ?>
                                
                                    <div class="form-group"> 
                                    
                                        <label class="control-label" class="col-form-label">Credixsa</label>
                                        <textarea class="form-control" name="credixsa"></textarea>
                                        <input type="hidden" name="user" value="<?php echo $dato->user_id; ?>">
                                        <input type="hidden" name="idu" value="<?php echo $dato->id; ?>">

                                  </div>
                                 
                                  <div class="form-group">
                                        <label class="control-label" class="col-form-label">Interna</label>
                                        <textarea class="form-control" name="interna"></textarea>
                                  </div>
                                  <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal ------------------------------>
<!-- ---------------------------------------- comienzo modal02  ----------------------------->
                        <div class="modal fade" id="Modal02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header" >
                                <h5 class="modal-title" id="exampleModalLabel">Datos de Solicitud <?php echo $dato->id; ?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                               <?php echo form_open('admin/user/update_data_sol'); ?>
                                
                                    <div class="form-group"> 
                                    
                                        <label class="control-label" class="col-form-label">Credixsa</label>
                                        <textarea class="form-control" name="credixsa"></textarea>
                                        <input type="hidden" name="idu" value="<?php echo $dato->id; ?>">

                                  </div>
                                 
                                  <div class="form-group">
                                        <label class="control-label" class="col-form-label">Interna</label>
                                        <textarea class="form-control" name="interna"></textarea>
                                  </div>
                                  <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                                
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
<!----------------------------------------------- fin modal ------------------------------>