

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0"></h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
        <!-- <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div> -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    
        <!-- Column -->

    <?php if($this->session->userdata('role') == 'admin'): ?>
    
        <div class="col-sm-12 p-t-10">
        <div class="col-lg-2 col-md-4">
          <a href="#">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success" onclick="getLocation()">geolocalizar</button></a>
          <p id="demo"></p>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verCreditosACobrar11()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Creditos a Cobrar</button></a>
        </div>
        </div>
    <?php endif ?>
    <?php if($this->session->userdata('role') == 'supervisor_a' || $this->session->userdata('role') == 'verificador' || $this->session->userdata('role') == 'admin'): ?>
    
        <div class="col-sm-12 p-t-10">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verPendientesVeri()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Creditos a Verificar</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/articulo/listavendedores') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Lista de precios</button></a>
        </div>
        </div>
    <?php endif ?>
        <!-- Column -->
        <?php if($this->session->userdata('cobrador') == '1' && $this->session->userdata('role') == 'cobrador' ): ?>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/articulo/listavendedores') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Lista de precios</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verCreditosACobrar11()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Creditos a Cobrar</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verCreditosHoy()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Creditos para hoy</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/user/nueva_solicitud'); ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Cargar Solicitud</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verFormularioCli()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Cargar Cliente</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/vend/') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Mis Solicitudes</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verMiRecaudacion()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Cobros del dia</button></a>
        </div>
        </div>
        <?php endif ?>

        <?php if($this->session->userdata('cobrador') == '1' && $this->session->userdata('role') == 'admin' ): ?>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/articulo/listavendedores') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Lista de precios</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verCreditosACobrar()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Creditos a Cobrar</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verCreditosHoy()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Creditos para hoy</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verFormularioCli()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Cargar Cliente</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/vend/') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Mis Solicitudes</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="javascript:verMiRecaudacion()">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Cobros del dia</button></a>
        </div>
        </div>
        <?php endif ?>

        <!-- Column -->
       <?php if($this->session->userdata('role') === 'vendedor'): ?>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/vend/') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Mis Solicitudes</button></a>
        </div>
        </div>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/articulo/listavendedores') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Lista de precios</button></a>
        </div>
        </div>
        <?php if($this->session->userdata('id') == 5677 || $this->session->userdata('id') == 3473): ?>
        <div class="col-sm-12 p-t-20">
        <div class="col-lg-2 col-md-4">
          <a href="<?php echo base_url('admin/user/clientes_habilitados') ?>">  <button type="button" id="btnVerifCred" class="btn btn-rounded btn-block btn-success">Lista de clientes</button></a>
        </div>
        </div>
        <?php endif ?>
        <?php endif ?>
        <!-- Column -->
        
    </div>
  

    
    
    <!-- Row -->
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
            