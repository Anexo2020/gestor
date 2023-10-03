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
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Datos del Solicitante</b></h3>
                                <p class="m-l-15"><b>Fecha de creacion:</b> <i class="fa fa-calendar"></i> <?php $newDate = date("d/m/Y", strtotime($dato->creado)); echo $newDate; ?>
                                <br/>DNI: <?php echo $dato->dni; ?>
                                    <br/> Titular: <?php echo $dato->user_apellido." ".$dato->user_name; ?>
                                    <br/> Direccion: <?php echo $dato->direccion; ?>
                                    <br/> Entrecalles: <?php echo $dato->entre; ?>
                                    <br/> Localidad: <?php foreach($localidad as $local):?> 
                                                    <?php if($local['id'] == $dato->local){ 
                                                    echo $local['name'];
                                                    }?>
                                                    <?php endforeach ?>
                                    <br/> Telefono: <?php echo $dato->celular; ?>                  
                                </p>
                                <h4> &nbsp;<b class="font-bold">Vendedor</b></h4>
                                <p class="m-l-15"><?php echo $dato->userv_name." ".$dato->userv_apellido; ?></p>
                            </address>
                            
                            
                        </div>
                        <div class="col-12 col-md-4">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Datos de Referencia</b></h3>
                                <p class="m-l-15">Referencia 1: <?php echo $referencia->name1; ?>
                                    <br/> Telefono: <?php echo $referencia->tel1; ?>
                                    <br/> Relacion: <?php echo $referencia->rel1; ?>
                                    <br/> --------------------------------------------
                                    <br/> Referencia 2: <?php echo $referencia->name2; ?>
                                    <br/> Telefono: <?php echo $referencia->tel2; ?>
                                    <br/> Relacion: <?php echo $referencia->rel2; ?>
                                    <br/> --------------------------------------------
                                    <br/> Referencia 3: <?php echo $referencia->name3; ?>
                                    <br/> Telefono: <?php echo $referencia->tel3; ?>
                                    <br/> Relacion: <?php echo $referencia->rel3; ?>
                                    <br/>----------------------------------------------
                                    <br/> Propietario: <?php echo $referencia->propia; ?>                
                                </p>
                            </address>
                        </div>
                        <div class="col-12 col-md-4">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Datos Comerciales</b></h3>
                                <p class="m-l-15">Posee comercio: <?php echo $referencia->comer; ?>
                                    <br/> Direccion: <?php echo $referencia->direccion; ?>
                                    <br/> Entrecalles: <?php echo $referencia->entrecalles; ?>
                                    <br/> Localidad: <?php echo $referencia->localidad; ?>
                                    <br/> antiguedad: <?php echo $referencia->antiguedad; ?>                  
                                </p>
                            </address>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="col-12 col-md-4">
                            <address>
                                <h3> &nbsp;<b class="font-bold">Plan</b></h3>
                                <p class="m-l-15">Anticipo <?php echo $dato->anticipo; ?>
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
                        
                    <div class="col-12">
                        <div class="pull-left m-t-30 text-left">
                             <hr>
                            <h5>Credixsa: <b class="font-bold"> <?php echo $referencia->credixsa; ?></b></h5>
                             <hr>
                            <h5>Verificacion interna: <b class="font-bold"><?php echo $referencia->interna; ?></b></h5>
                            <hr>
                            <h5>Observaciones: <?php echo $dato->observaciones; ?></h5>
                            <h5><?php echo $referencia->observacion; ?></h5>

                        </div>
                        <div class="clearfix"></div>


                        <hr>
                        <div class="text-right">
             <a href="<?php echo base_url() ?>admin/dashboard" class="btn btn-success">VOLVER</a>
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