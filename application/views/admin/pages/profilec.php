<?php 
 $nameref1 = ""; 
 $nameref2 = ""; 
 $nameref3 = "";
 $telref1 = "";
 $telref2 = "";
 $telref3 ="";
 $relref1 = "";
 $relref2 = "";
 $relref3 = ""; 
 $casapropia = "";
 $rubro = "";
 $comercio = "";
 $direccion_c = "";
 $entrecalles_c = "";
 $localidad = "";
 $antiguedad = "";
 $observaciones = "";
 $idreferencia = "";
 $referencia = ""; 
?>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Cliente</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Perfil</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    
                </div>
                <div class="">
                    
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
    <!-- Row -->
    <div class="row">
        <?php foreach($datos as $dato): ?>
            
        <!-- Column -->
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Perfil</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home" role="tab">Documentos</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Editar Referencias</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    
                    
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5 col-xs-6 b-r">
                                    <h3><strong class="font-bold">Datos Personales</strong></h3>
                                 <p>Dni: <?php echo $dato['dni'] ?>
                                 </br>Apellido y Nombre: <?php echo $dato['last_name']." ".$dato['first_name'] ?>
                                 </br>Direccion: <?php echo $dato['direccion'] ?>
                                 </br>Entrecalles: <?php echo $dato['entre_calles'] ?>
                                 </br>Localidad: <?php echo $dato['localidad'] ?>
                                 </br>Telefono: <?php echo $dato['mobile'] ?>
                                 </p>
                                </div><?php foreach($referencias as $referencia): ?>
                                <?php $nameref1 = $referencia['nombre_r1']; ?>
                                <?php $nameref2 = $referencia['nombre_r2']; ?>
                                <?php $nameref3 = $referencia['nombre_r3']; ?>
                                <?php $telref1 = $referencia['telefono_r1']; ?>
                                <?php $telref2 = $referencia['telefono_r2']; ?>
                                <?php $telref3 = $referencia['telefono_r3']; ?>
                                <?php $relref1 = $referencia['relacion_r1']; ?>
                                <?php $relref2 = $referencia['relacion_r2']; ?>
                                <?php $relref3 = $referencia['relacion_r3']; ?>
                                <?php $casapropia = $referencia['casa_propia']; ?>
                                <?php $rubro = $referencia['rubro']; ?>
                                <?php $comercio = $referencia['comercio']; ?>
                                <?php $direccion_c = $referencia['direccion_c']; ?>
                                <?php $entrecalles_c = $referencia['entrecalles_c']; ?>
                                <?php $localidad = $referencia['localidad']; ?>
                                <?php $antiguedad = $referencia['antiguedad']; ?>
                                <?php $observaciones = $referencia['observaciones']; ?>
                                <?php $idreferencia = $referencia['id_referencia']; ?>
                                

                                <?php endforeach ?>
                                <div class="col-md-4 col-xs-6 b-r"> <h3><strong class="font-bold text-muted">Datos Comerciales</strong></h3>
                                 <p class="text-muted">Rubro: <?php echo $rubro; ?>
                                 </br>Direccion: <?php echo $direccion_c; ?>
                                 </br>Entrecalles: <?php echo $entrecalles_c; ?>
                                 </br>Localidad: <?php echo $localidad; ?>
                                 </br>Antiguedad: <?php echo $antiguedad; ?>
                                 </p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Otros</strong>
                                    <br>
                                    <p class="text-muted">example@email.com</p>
                                </div>
                            </div>
                            <hr>
                             <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Nombre referencia</strong>
                                    </br>
                                    <p class="text-muted"><?php echo $nameref1; ?>
                                    </br><?php echo $nameref2; ?>
                                    </br><?php echo $nameref3; ?></p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Telefono</strong>
                                    </br>
                                    <p class="text-muted"><?php echo $telref1; ?>
                                        </br><?php echo $telref2; ?>
                                        </br><?php echo $telref3; ?>
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Relacion</strong>
                                    </br>
                                    <p class="text-muted"><?php echo $relref1; ?>
                                        </br><?php echo $relref2; ?>
                                        </br><?php echo $relref3; ?>
                                    </p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Es Propietario</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $casapropia; ?></p>
                                </div>
                            </div>
                            <hr>
                            <p class="m-t-30"><?php echo $observaciones; ?></p>
                            <h4 class="font-medium m-t-30">Creditos</h4>
                            <hr>
                            <h5 class="m-t-30">Wordpress <span class="pull-right">50%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:9px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                            <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                            <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                            <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                            </div>
                        </div>
                    </div>

                    <!--second tab ----------------------------------------------------------------------- -->
                    <div class="tab-pane" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                <div class="sl-item">
                                    <div class="sl-left"> <img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user" class="img-circle" /> </div>
                                    <div class="sl-right">
                                        <div> 
                                            <div class="row"><?php foreach($documentos as $documento): ?>
                                                <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url() ?>assets/images/docu/<?php echo $documento['name'] ?>" class="img-responsive radius" /></div>
                                            <?php endforeach ?>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
        <!-------------------------------------------- -->
                           
                    <?php echo form_open_multipart('admin/user/nuevaimagen');?>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                               
                                        <input type="hidden" name="userid" value="<?php echo $dato['id']; ?>" >                                     
                                        <label class="control-label text-right col-md-3"> <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="file" name="files[]" size="20" multiple class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>



                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Subir Imagen</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        </form>
                   
        <!-- ----------------------------------------- -->
                                <hr>
                               
                            </div>
                        </div>
                    </div>
                    <!--third tab ----------------------------------------------------------------------- -->
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url('admin/user/update_referencia') ?>" class="form-horizontal form-material">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Nombre referencia 1</label>
                                    <div>
                                        <input type="text" name="nombre_r1" value="<?php echo $nameref1; ?>" class="form-control form-control-line">
                                        <input type="hidden" name="idreferencia" value="<?php echo $idreferencia; ?>">
                                        <input type="hidden" name="id_user" value="<?php echo $dato['id']; ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label >Telefono referencia 1</label>
                                    <div>
                                        <input type="text" name="telefono_r1" value="<?php echo $telref1; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Relacion referencia 1</label>
                                    <div>
                                        <input type="text" name="relacion_r1" value="<?php echo $relref1; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="form-group col-md-4">
                                    <label>Nombre referencia 2</label>
                                    <div>
                                        <input type="text" name="nombre_r2" value="<?php echo $nameref2; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Telefono referencia 2</label>
                                    <div>
                                        <input type="text" name="telefono_r2" value="<?php echo $telref2; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                 <div class="form-group col-md-4">
                                    <label>Relacion referencia 2</label>
                                    <div>
                                        <input type="text" name="relacion_r2" value="<?php echo $relref2; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Nombre referencia 3</label>
                                    <div>
                                        <input type="text" name="nombre_r3" value="<?php echo $nameref3; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Telefono referencia 3</label>
                                    <div>
                                        <input type="text" name="telefono_r3" value="<?php echo $telref3; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Relacion referencia 3</label>
                                    <div>
                                        <input type="text" name="relacion_r3" value="<?php echo $relref3; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Casa propia</label>
                                    <div>
                                        <input type="text" name="casa_propia" placeholder="si/no" value="<?php echo $casapropia; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Rubro</label>
                                    <div>
                                        <input type="text" name="rubro" placeholder="rubro" value="<?php echo $rubro; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Comercio</label>
                                    <div>
                                        <input type="text" name="comercio" placeholder="si/no" value="<?php echo $comercio; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Antiguedad</label>
                                    <div>
                                        <input type="text" name="antiguedad" placeholder="que Antiguedad tiene el comercio" value="<?php echo $antiguedad; ?>" class="form-control form-control-line">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Direccion comercial</label>
                                    <div>
                                        <input type="text" name="direccion_c" placeholder="direccion del comercio" class="form-control form-control-line" value="<?php echo $direccion_c; ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Entre calles</label>
                                    <div>
                                        <input type="text" name="entrecalles_c" placeholder="Aqui Entrecalles del comercio" class="form-control form-control-line" value="<?php echo $entrecalles_c; ?>" >
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Localidad del comercio</label>
                                    <div>
                                        <input type="text" name="localidad" placeholder="Aqui Localidad comercial" class="form-control form-control-line" value="<?php echo $localidad; ?>">
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-md-12">Observaciones</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" name="observaciones" class="form-control form-control-line"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Acturlizar datos</button>
                                    </div>
                                </div>
                                 <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div><?php endforeach ?>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->