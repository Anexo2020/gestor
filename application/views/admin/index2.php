<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
    <title>Anexo</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <!--alerts CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- toast CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!--dataTable CSS -->
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css" rel="stylesheet">


    <!--Form css plugins -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" rel="stylesheet" />
    <!--Form css plugins end -->


    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="<?php echo base_url() ?>assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Cropper CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/cropper/cropper.min.css" rel="stylesheet">

    <!-- Footable CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/footable/css/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Date picker plugins css -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo base_url() ?>assets/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    

    <!-- Se encarga de copiar contenido de un input en otro -->
    <script type="text/javascript">

	function PasarValor()
		{
			document.getElementById("password").value = document.getElementById("last_name").value;
		}
	</script>
	<!-- fin pasar valor -->
    

</head>

<body class="fix-header fix-sidebar card-no-border">
    
    <!-- Preloader - style you can find in spinners.css -->
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <!-- Main wrapper - style you can find in pages.scss -->
    
    <div id="main-wrapper">
        
        <!-- Topbar header - style you can find in pages.scss -->
        
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                
                <!-- Logo -->
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('admin/dashboard') ?>">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="<?php // echo base_url() ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url() ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                         <!-- dark Logo text -->
                         <!-- <img src="<?php // echo base_url() ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" /> -->
                         <!-- Light Logo text -->    
                         <img src="<?php echo base_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                
                <!-- End Logo -->
                
                <div class="navbar-collapse">
                    
                    <!-- toggle and nav items -->
                    <?php if($this->session->userdata('role')=='cobrador'): ?>
                        <ul>
                        <li></li>
                    </ul>
                    <?php else: ?>
                        <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <?php endif ?>   
                        <!-- Search -->
                        
                        <!-- Messages -->
                        
                        
                        
                        
                        
                    </ul>
                    
                    <!-- User profile and search -->
                    
                    <ul class="navbar-nav my-lg-0">
                        
                        <!-- Comment -->
                        
                        
                        
                        <!-- End Comment -->
                        
                        
                        <!-- Messages -->
                        
                        
                        
                        <!-- End Messages -->
                        
                        
                        
                        <!-- Profile -->
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url() ?>assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?php echo $this->session->userdata('name'); ?></h4>
                                                <p class="text-muted"><?php echo $this->session->userdata('dni'); ?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Language -->
                        
                      <!--   <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- End Topbar header -->
        




        
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        
        <aside class="left-sidebar">
            

            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"></li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Principal</span></a>
                        </li>

                        <li>

                            <a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin/user/all_user_list') ?>" aria-expanded="false"><i class="fas fa-tasks"></i></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <?php if ($this->session->userdata('role') !== 'cliente' && $this->session->userdata('cliente') !== 'si'): ?>

                                <?php if ($this->session->userdata('role') == 'admin'): ?>
                                    <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-angle-right"></i> Agregar Usuario </a></li>
                                    <?php endif ?>
                                <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador'): ?>  
                                    <li><a href="<?php echo base_url('admin/user/nuevocobrador') ?>"><i class="fa fa-angle-right"></i> Agregar Cobrador </a></li>
                                    <li><a href="<?php echo base_url('admin/cob/cobrodia') ?>"><i class="fa fa-angle-right"></i> Recaudacion por dia </a></li>
                                    <li><a href="<?php echo base_url('admin/cob/datos') ?>"><i class="fa fa-angle-right"></i> Totales </a></li>
                                    <li><a href="<?php echo base_url('admin/cob/recaudacion') ?>"><i class="fa fa-angle-right"></i> Cobranza por fechas </a></li>
                                <?php endif ?>
                                <?php if ($this->session->userdata('cliente') !== 'si'): ?>
                                    <li><a href="<?php echo base_url('admin/user/nuevocliente') ?>"><i class="fa fa-angle-right"></i> Nuevo Cliente </a></li>
                                <?php endif ?>
                                    <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador'): ?>
                                    <li id="#div-btn1"><a href="<?php echo base_url('admin/user/all_user_list') ?>"><i class="fa fa-angle-right"></i> Usuarios</a></li>
                                <?php endif ?>
                                    <li><a href="<?php echo base_url('admin/user/all_cliente_list') ?>"><i class="fa fa-angle-right"></i> Clientes</a></li>
                                    <?php if ($this->session->userdata('role') == 'supervisor_a' || $this->session->userdata('role') == 'verificador'): ?>
                                    <li><a href="javascript:verSolicitudes()"><i class="fa fa-angle-right"></i> Solicitudes</a></li>            
                                    <?php endif ?>
                                    <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador'): ?>  
                                    <li><a href="<?php echo base_url('admin/user/add_vendedor') ?>"><i class="fa fa-angle-right"></i> Agregar Vendedor </a></li>
                                    
                            </ul>
                        </li>   
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Solicitudes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/user/creditos_activos') ?>"><i class="fa fa-angle-right"></i>Creditos Activos </a></li>
                                <li ><a href="<?php echo base_url('admin/user/cred_pendientes_entrega') ?>"><i class="fa fa-angle-right"></i>Para Entregar </a></li>
                                <li ><a href="<?php echo base_url('admin/user/creditos_finalizados') ?>"><i class="fa fa-angle-right"></i>Finalizados </a></li>
                                <li><a href="<?php echo base_url('admin/user/all_creditos_pendiente') ?>"><i class="fa fa-angle-right"></i> Pendientes</a></li>
                                <li><a href="<?php echo base_url('admin/user/cred_sin_cobrador') ?>"><i class="fa fa-angle-right"></i> Sin Cobrador</a></li>
                                <li><a href="<?php echo base_url('admin/user/creditos_cancelados') ?>"><i class="fa fa-angle-right"></i> Cancelados</a></li>
                                <li><a href="<?php echo base_url('admin/user/creditos_rechazados') ?>"><i class="fa fa-angle-right"></i> Rechazados</a></li>
                                <li><a href="javascript:verSolicitudes()"><i class="fa fa-angle-right"></i> Lista Completa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Articulos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="javascript:adArticulo()"><i class="fa fa-angle-right"></i> Cargar articulo </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaArticulosInd') ?>"><i class="fa fa-angle-right"></i> Articulos </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Ventas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasPendientes') ?>"><i class="fa fa-angle-right"></i> Ventas Pendientes </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaArticulosInd') ?>"><i class="fa fa-angle-right"></i> Ventas Entregadas </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-calculator"></i><span class="hide-menu">Caja</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/caja') ?>"><i class="fa fa-angle-right"></i> Caja </a></li>
                                <li ><a href="<?php echo base_url('admin/caja/cierre_listado') ?>"><i class="fa fa-angle-right"></i> Cierres de caja </a></li>
                                <li ><a href="<?php echo base_url('admin/vend/comxventaspagar') ?>"><i class="fa fa-angle-right"></i> Comisiones a pagar </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-cog"></i><span class="hide-menu">Configuracion</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/dashboard/add_descripcion_gasto') ?>"><i class="fa fa-angle-right"></i> Agregar Items </a></li>
                            </ul>
                        </li>
                        <?php endif ?>
                        <?php if ($this->session->userdata('role') == 'admin'): ?>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard/backup') ?>" aria-expanded="false"><i class="fa fa-cloud-download"></i><span class="hide-menu">Backup Database</span></a>
                        </li>
                       <?php endif; ?>
                   <?php endif ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="<?php echo base_url('auth/logout') ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->



        </aside>
        
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        










        <!-- Page wrapper  -->
        
        <div id="fluidocont" class="page-wrapper">




        <!-- ==========================Dynamicaly Show Main Page Content============================ -->

            <?php  echo $main_content; ?>
        
        <!-- ==========================Dynamicaly Show Main Page Content============================ -->


                
            <!-- footer -->
            
            <footer class="footer">
               Anexo Creditos
            </footer>
            
            <!-- End footer -->
            
        </div>
        
        <!-- End Page wrapper  -->




    </div>


    
    <!-- End Wrapper -->
    



    
    <!-- All Jquery -->
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
    function cobroDelDia(){
    pnom= $('#nom').val(); // Obtengo del formulario el valor nom
    pfecha= $('#fecha').val(); // Obtengo del formulario el valor fecha
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: 'https://anexo.com.ar/app/admin/cob/test',  // Fichero destino (el PHP que trata los datos)
     data: {
            nom: pnom,
            fecha: pfecha,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function( msg ) { 
        $("#consola").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#consola").append(msg);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#consola").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
/////////////////////////////////////////////////////////////////////////////////////////
function verMiRecaudacion(){
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/cob/mirecaudacion',  // Fichero destino (el PHP que trata los datos)
    
     }).done(function( mireca ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(mireca);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
////////////////////////////////////////////////////////
function adArticulo(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: 'https://anexo.com.ar/app/admin/articulo',  // Fichero destino (el PHP que trata los datos)
     data: {
            nom: 0,
            fecha: 0,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function( msg ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(msg);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
function verArticulo(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: 'https://anexo.com.ar/app/admin/articulo/mostrar_articulos',  // Fichero destino (el PHP que trata los datos)
     data: {
            nom: 0,
            fecha: 0,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function( msg ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(msg);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
  function verPendientesVeri(){
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/user/all_creditos_pendiente_verificar',  // Fichero destino (el PHP que trata los datos)
    
     }).done(function( verific ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(verific);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
  function verCreditosACobrar(){
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/cob',  // Fichero destino (el PHP que trata los datos)
    
     }).done(function( acobrar ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(acobrar);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  
  ////////////////////////////////////////////////////////
  function verCreditosHoy(){
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/cob/cobrarhoy',  // Fichero destino (el PHP que trata los datos)
    
     }).done(function( acobrarh ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(acobrarh);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
function verSolicitudes(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/user/all_creditos_list',  // Fichero destino (el PHP que trata los datos)
     
     }).done(function( lista ) { 
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").html(lista);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
   ////////////////////////////////////////////////////////
function verClientes(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/user/all_cliente_list_cob',  // Fichero destino (el PHP que trata los datos)
     
     }).done(function( cli ) { 
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").html(cli);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
function verFormularioCli(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: 'https://anexo.com.ar/app/admin/user/nuevocliente_cob',  // Fichero destino (el PHP que trata los datos)
     
     }).done(function( nuevocli ) { 
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").html(nuevocli);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
  ////////////////////////////////////////////////////////
  
  ////////////////////////////////////////////////////////////////////////
  function editarArticulo(){
    pdescripcion= $('#descripcion').val(); // Obtengo del formulario el valor nom
    pcosto= $('#costo').val(); // Obtengo del formulario el valor fecha
    pmarkup= $('#markup').val(); // Obtengo del formulario el valor nom
    pestado= $('#estado').val(); // Obtengo del formulario el valor fecha
    panticipo= $('#anticipo').val(); // Obtengo del formulario el valor fecha
    pid= $('#id').val(); // Obtengo del formulario el valor fecha
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: 'https://anexo.com.ar/app/admin/articulo/modificara',  // Fichero destino (el PHP que trata los datos)
     data: {
            descripcion: pdescripcion,
            costo: pcosto,
            markup: pmarkup,
            estado: pestado,
            anticipo: panticipo,
            id: pid,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function( e ) { 
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").html(e);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
</script>
    <!-- All Jquery -->
    
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    
 

    <!--Morris JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/morris-data.js"></script>
    <!-- Chart JS -->
    
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/chartjs.init.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Invoice print JS -->
    <script src="<?php echo base_url() ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>


    <!-- Start Table js -->
    
    <!-- This is data table js -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": true,
                    "targets": 0
                }],
                "order": [
                    [5, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(5, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }

            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }

            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    $(document).ready(function() {
        var events = $('#events');
    var table = $('#example21').DataTable( {

        select: {
            style: 'multi'
        }
    } );
    table
        .on( 'select', function ( e, dt, type, hu ) {
            var rowData = table.rows( hu ).data().toArray();
            events.prepend( '<div style="display:none;" id="ree'+ rowData[0][0]+'"><input type="hidden" id="sum" name="cometa[]" value= "'+ (rowData[0][4]-rowData[0][0]-rowData[0][1])+'"><input type="hidden" name="credito[]" value= "'+ rowData[0][0]+'" ><input type="hidden" name="venta[]" value= "'+ rowData[0][1] +'" > </div>' );
            Calcular();
        } )
         .on( 'deselect', function ( e, dt, type, hu ) {
            var rowData = table.rows( hu ).data().toArray();
            var are = "#ree"+ rowData[0][0];
            $(are).remove();
            Calcular();
        } )

} );

//////////////////////////////////////////////
 function Calcular() {

    var total = 0;

    //recorremos los input para que haga la suma
    $("input").each(
      function() {
        if (Number($(this).val())) {  
                total = total + Number($(this).val());
        }
        if ( $( this ).is( "#stop" ) ) {
      return false;
    }
      });

    $("#total").text(total);
    $("#total2").val(total);
  
};
/////////////////////////////////////////////////

 $(document).ready(function() {
        var eventos = $('#eventos');
    var table = $('#articulos').DataTable( {
       
        select: {
            style: 'multi'
        }
    } );
    table
        .on( 'select', function ( e, dt, type, hu ) {
            var rowData = table.rows( hu ).data().toArray();
            eventos.append( '<div id="ree'+ rowData[0][0]+'"><input type="hidden"  name="idart[]" value= "'+ rowData[0][0]+'"><input type="hidden"  name="stock[]" value= "'+ rowData[0][3]+'"><input type="text"  name="descripcion[]" value= "'+ rowData[0][1]+'" style="width: 41.6%; padding-left: 5px;" readonly><input type="number"  name="cantidad[]" id="cantidad' + rowData[0][0] + '" value= "0" style="width: 8.7%; padding-left: 5px;" oninput="multiplicar(\'cantidad' + rowData[0][0] + '\',\'costo' + rowData[0][0] + '\',\'acumulado' + rowData[0][0] + '\')" ><input type="number" id="costo' + rowData[0][0] + '"  name="costo[]" value= "'+rowData[0][2]+'" style="width: 17.5%; padding-left: 5px;"><input type="text" id="acumulado' + rowData[0][0] + '" name="acumulado[]" value= "0" style="width: 17.5%; margin-right: 2%" class="monto" disabled><select name="modifica[]"><option value="1">si</option><option value="0">no</option></select></div>' );
        } )
         .on( 'deselect', function ( e, dt, type, hu ) {
            var rowData = table.rows( hu ).data().toArray();
            var are = "#ree"+ rowData[0][0];
            $(are).remove();
        } )

} );

///////////////////////////////////////////////
 ///////////////////////////////////////////////
 function multiplicar(cantidad, costo, acumulado) {
       var m1 = document.getElementById(cantidad).value;
       var m2 = document.getElementById(costo).value;
       var r = m1 * m2;
       
       document.getElementById(acumulado).value = r;

       //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
       var total = 0;
       $(".monto").each(function () {
           if (isNaN(parseFloat($(this).val()))) {
               total += 0;
           } else {
               total += parseFloat($(this).val());
           }
       });
       console.log(total);
       $("#total").text(total);
       document.getElementById('totali').value = total;

   }

///////////////////////////////////////////////
///////////////inicio panel de venta//////////////////////////////////

 $(document).ready(function() {
    var eventos = $('#eventos');
    var table = $('#forv').DataTable( {
        "scrollY": '100',
                "scroller": true,
        "dom": 'frtip',
        "bFilter": true,
        "displayLength": 500,
        select: {
            style: 'multi'
        }
    } );
    table
        .on( 'select', function ( e, dt, type, hu ) {
            var rowData = table.rows( hu ).data().toArray();
            var html ='';
            html += '<div class="row" id="ree'+ rowData[0][0]+'">';
            html += '<input type="hidden"  name="idart[]" value= "'+ rowData[0][0]+'">';
            html += '<input type="hidden"  name="pvm[]" id="pvm' + rowData[0][0] + '" value= "'+ rowData[0][5]+'">';
            html += '<div class="col-md-12">';
            html += '<input type="text"  name="descripcion[]" value= "'+ rowData[0][1]+'" style="width: 55%" readonly>';
            html += '<input type="hidden" name="costo[]" id="costo' + rowData[0][0] + '" value="'+rowData[0][3]+'">';
            html += '<input type="hidden" name="sumacosto[]" id="sumacosto' + rowData[0][0] + '" value="" class="Costo">';
            html += '<input type="number"  name="cantidad[]" id="cantidad' + rowData[0][0] + '" value= "0" oninput="multiplicarb(\'cantidad' + rowData[0][0] + '\',\'pvp' + rowData[0][0] + '\',\'acumulado' + rowData[0][0] + '\')" onchange="multiplicarpvm(\'cantidad' + rowData[0][0] + '\',\'pvm' + rowData[0][0] + '\',\'sumapvm' + rowData[0][0] + '\',\'costo' + rowData[0][0] + '\',\'sumacosto' + rowData[0][0] + '\')" style="width: 10%;" >';
            html +='<input type="hidden" id="pvp' + rowData[0][0] + '"  name="pvp[]" value= "'+rowData[0][2]+'">';
            html += '<input type="text" id="acumulado' + rowData[0][0] + '" name="acumulado[]" value= "0" class="monto" style="width: 25%" disabled>';
            html += '<input type="hidden" id="sumapvm' + rowData[0][0] + '" name="sumapvm[]" value= "0" class="montopvm" ><span style="float: right; text-align:center; width: 10%"><a href="#" onclick="elim(\'ree'+ rowData[0][0] + '\')"><i class="fa fa-trash text-danger m-r-10" ></i></a></span>';
            html += '</div></div>';
            eventos.append( html);
        } )
         .on( 'deselect', function ( e, dt, type, hu ) {
            var rowData = table.rows( hu ).data().toArray();
            var are = "#ree"+ rowData[0][0];
            $(are).remove();
            //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
               var totalpvm = 0;
               $(".montopvm").each(function () {
                   if (isNaN(parseFloat($(this).val()))) {
                       totalpvm += 0;
                   } else {
                       totalpvm += parseFloat($(this).val());
                   }
               });
               
               console.log(totalpvm);
                
            //fin SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .montopvm 
            //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
               var total = 0;
               $(".monto").each(function () {
                   if (isNaN(parseFloat($(this).val()))) {
                       total += 0;
                   } else {
                       total += parseFloat($(this).val());
                   }
               });
               const valo = total

                const dollar = currencyFormatter({
                  currency: "USD",
                  valo
                })
               console.log(total);
               $("#total").text(dollar);
               document.getElementById('preciof').value = total;
               //fin SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
        } )
} );

////////////////////////////////////////////////
var rts;
           
 function elim(rts) {
    var are = '#'+rts;

 $(are).remove();
  //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
               var totalpvm = 0;
               $(".montopvm").each(function () {
                   if (isNaN(parseFloat($(this).val()))) {
                       totalpvm += 0;
                   } else {
                       totalpvm += parseFloat($(this).val());
                   }
               });

               var CostoAcumulado = 0;
               $(".Costo").each(function () {
                   if (isNaN(parseFloat($(this).val()))) {
                       CostoAcumulado += 0;
                   } else {
                       CostoAcumulado += parseFloat($(this).val());
                   }
               });
               
               console.log(totalpvm);
                
            //fin SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .montopvm 
            //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
               var total = 0;
               $(".monto").each(function () {
                   if (isNaN(parseFloat($(this).val()))) {
                       total += 0;
                   } else {
                       total += parseFloat($(this).val());
                   }
               });
               const valo = total

                const dollar = currencyFormatter({
                  currency: "USD",
                  valo
                })
               console.log(total);
               $("#total").text(dollar);
               document.getElementById('preciof').value = total;
               //fin SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
               document.getElementById('preciofpvm').value = totalpvm;
               document.getElementById('Costoacumulado').value = CostoAcumulado;

               CalcularComision();

 };
///////////////////////////////////////////////
 function multiplicarb(cantidad, pvp, acumulado) {
       var m1 = document.getElementById(cantidad).value;
       var m2 = document.getElementById(pvp).value;
       var r = m1 * m2;
       
       document.getElementById(acumulado).value = r;

       //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
       var total = 0;
       $(".monto").each(function () {
           if (isNaN(parseFloat($(this).val()))) {
               total += 0;
           } else {
               total += parseFloat($(this).val());
           }
       });
       const valo = total

        const dollar = currencyFormatter({
          currency: "USD",
          valo
        })
       console.log(total);
       $("#total").text(dollar);
       document.getElementById('preciof').value = total;
       document.getElementById('pvts').value = total;



   }
//////////////////////////////////////////////
   function multiplicarpvm(cantidad, pvm, sumapvm, costo, sumacosto) {
       var m3 = document.getElementById(cantidad).value;
       var m4 = document.getElementById(pvm).value;
       var m5 = document.getElementById(costo).value;
       var rm = m3 * m4;
       var ct = m3 * m5;
       
       document.getElementById(sumapvm).value = rm;
       document.getElementById(sumacosto).value = ct;

       //SUMA EL TOTAL DE LOS INPUT QUE TENGA LA CLASS .monto 
       var totalpvm = 0;
       $(".montopvm").each(function () {
           if (isNaN(parseFloat($(this).val()))) {
               totalpvm += 0;
           } else {
               totalpvm += parseFloat($(this).val());
           }
       });

       var CostoAcumulado = 0;
       $(".Costo").each(function () {
           if (isNaN(parseFloat($(this).val()))) {
               CostoAcumulado += 0;
           } else {
               CostoAcumulado += parseFloat($(this).val());
           }
       });


    
       console.log(CostoAcumulado);
       document.getElementById('preciofpvm').value = totalpvm;
       document.getElementById('Costoacumulado').value = CostoAcumulado;

       
       
      CalcularComision();
   }

//////////////////////////////////////////////

//////////////////////////////////////////////
function currencyFormatter({ currency, valo}) {
    const formatter = new Intl.NumberFormat('en-US', {
    style: 'currency',
    minimumFractionDigits: 2,
    currency
  }) 
  return formatter.format(valo)
}

///////////////////////////////////////////////
function showCredForm() {
        element = document.getElementById("credcontent");
        elementc = document.getElementById("contadocontent");
        check = document.getElementById("creditoc");
        if (check.checked) {
            element.style.display='block';
            elementc.style.display='none';
        }
        else {
            element.style.display='none';
            elementc.style.display='block';
            document.getElementById("importecuota").value = 0;
            document.getElementById("cuotas").value = 0;
            document.getElementById("anticipo").value = 0;
        }
    }
/////////////////////////////////////////////////
function MostrarObse() {
    element = document.getElementById("showobservacion");
    element1 = document.getElementById("btnsob");
    element2 = document.getElementById("btnoob");
    element.style.display='block';
    element1.style.display='none';
    element2.style.display='block';
    }

function OcultarObse() {
    element = document.getElementById("showobservacion");
    element1 = document.getElementById("btnsob");
    element2 = document.getElementById("btnoob");
    element.style.display='none';
    element1.style.display='block';
    element2.style.display='none';
}
////////////////fin panel de venta///////////////////////////////
//////////////////////////////////////////////////////////////////////
function NuevaVentaC(){
    var Puser_id;
    var idart = [];
    var descripcion = [];
    var cantidad = [];
    var costounidad = [];
    var pvp = [];
    var Pcreditoc;
    var Ppreciof;
    var Panticipo;
    var Pplazo;
    var Pcuota;
    var Pcondicion;
    var Pvendedor;
    var Ptoken;
    var comision;
    var Pcostototal;
    var Ppvts;
    var lider;
    var comlider;

     var CountIdart = document.getElementsByName("idart[]").length;
    for(i=0;i<CountIdart;i++){
        idart[i] = document.getElementsByName("idart[]")[i].value; 
    };

    var incCount = document.getElementsByName("descripcion[]").length;
    for(i=0;i<incCount;i++){
        descripcion[i] = document.getElementsByName("descripcion[]")[i].value; 
    };

    var CountCant = document.getElementsByName("cantidad[]").length;
    for(i=0;i<CountCant;i++){
        cantidad[i] = document.getElementsByName("cantidad[]")[i].value; 
    };

    var CountCosto = document.getElementsByName("costo[]").length;
    for(i=0;i<CountCosto;i++){
        costounidad[i] = document.getElementsByName("costo[]")[i].value; 
    };

    var CountPvp = document.getElementsByName("pvp[]").length;
    for(i=0;i<CountPvp;i++){
        pvp[i] = document.getElementsByName("pvp[]")[i].value; 
    };

    Puser_id = $('#user_id').val();
    Pcreditoc = $('input[name="creditoc"]:checked').val();
    Pcostototal = $('#Costoacumulado').val();
    Ppreciof = $('#preciof').val();
    Panticipo = $('#anticipo').val();
    Pplazo = $('#cuotas').val();
    Pcuota = $('#importecuota').val();
    Pcondicion = $('input[name="condicion"]:checked').val();
    Pvendedor = $('#vendedor').val();
    Ptoken = $('#token').val();
    comision = $('#comision').val();
    lider = $('#lider').val();
    comlider = $('#comlider').val();
    observacion = $('#observacion').val();
    Ppvts = $('#pvts').val();
        // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/articulo/cargar_creditoVersion3') ?>',
     data: {
            user_id : Puser_id,
            precioc : Ppreciof,
            credocont : Pcreditoc,
            idart : idart,
            articulo : descripcion,
            cantidad : cantidad,
            costo : costounidad,
            pvp : pvp,
            costototal : Pcostototal,
            anticipo : Panticipo,
            plazo : Pplazo,
            cuotas : Pcuota,
            condicion : Pcondicion,
            vendedor : Pvendedor,
            token : Ptoken,
            comision : comision,
            lider : lider,
            comilider : comlider,
            pvts : Ppvts,
            observaciones : observacion,
            
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function( arti ) { 

        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(arti);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }
//////////////////////////////////////////////////////////////////////
    
    </script>

    <!-- Editable datatable-->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();
    });
    </script>

    <!-- End Table js -->



    <!-- Start Forms js -->

    <script src="<?php echo base_url() ?>assets/js/validation.js"></script>
    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script>

    <script src="<?php echo base_url() ?>assets/plugins/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    

    <!-- auto hide message div-->
    <script type="text/javascript">
        $( document ).ready(function(){
           $('.delete_msg').delay(3000).slideUp();
        });
    </script>



    <!-- Style switcher -->
    
    <script src="<?php echo base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="https://kit.fontawesome.com/70d80da2d7.js" crossorigin="anonymous"></script>



</body>

</html>
