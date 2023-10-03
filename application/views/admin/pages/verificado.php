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
        <div class="col-md-2">dni</div>
        <div class="col-md-3">apellido y nombre</div>
        <div class="col-md-3">direccion</div>
        <div class="col-md-3">localidad</div>
     </div>
            <?php foreach($prueba as $direccion): ?>
                <?php if($direccion['calificacion']){ 
            $estilo = 'style="background-color: orange;"';}else{
            $estilo = 'style="background-color: white;"';
            } ?>
            <div class="row" <?php echo $estilo; ?> >
            <div class="col-md-2"><?php echo $direccion['dni']; ?><i class="fa-thin fa-triangle-exclamation"></i>
            </div>
            <div class="col-md-3"><?php echo strtoupper($direccion['last_name'].' '.$direccion['first_name']); ?>
            </div>
            <div class="col-md-3"><?php echo strtoupper($direccion['direccion']); ?>
            </div>
             <div class="col-md-3"><?php echo strtoupper($direccion['localidad']); ?>
            </div>
            </div>

        <?php endforeach ?>
        <?php print_r($telefonos); ?>
         <div class="row">
        <?php foreach($solicitudes as $solicitud): ?>
            <div class="col-md-12"><?php echo $solicitud['id'].' '.$solicitud['estado']; ?> con un saldo de: <?php echo $solicitud['saldo'];?></div>
        <?php endforeach ?>
        </div>
        <div class="row">
        <?php foreach($creditos as $credito): ?>
            <?php if($credito['vence'] < date('Y-m-d')){$info = 'vencida';}else{$info = '';} ?>
            <div class="col-md-12"><?php echo $credito['id'].' '.$credito['cuotanumero']; ?> que vence el <?php echo date('d/m/Y', strtotime($credito['vence'])).' '.$info;?></div>
        <?php endforeach ?>
        </div>
            
        
   
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->