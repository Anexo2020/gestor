<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="DISTRIBUTION" content="IU" />
    <meta name="ROBOTS" content="noarchive" />
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/favicon.png">
    <title><?php echo $this->session->userdata('socio_name'); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/chartist-plugin-tooltip-master/dist/
    chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- toast CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />   


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


    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Calendar CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- summernotes CSS -->
    <link href="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />
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
                            <!--<img src="<?php // echo base_url() ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" /> -->
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
                        <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"></li>

                    <li class="nav-item ">       
                        <div class="h-100 " >
                            <div style="padding-top: 12px;">
                        <input type="text" id="buscli" name="buscli" class="form-control" placeholder="apellido o calle">
                            </div>
                        </div> 
                     </li>      
                        </ul>
                    <?php else: ?>
                        <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <?php endif ?>  
                    <!-- Search -->
                    <?php if($this->session->userdata('role')=='admin' || $this->session->userdata('role')=='administrador' || $this->session->userdata('role')=='supervisor_a'): ?>
                    <li class="nav-item ">
                            
                        <div class="h-100 " >
                            <div style="padding-top: 12px;">
                        <input type="text" id="busqueda" name="busqueda" class="form-control" placeholder="buscar & entrar">
                            </div>
                        </div> 
                     </li>      
                     <?php endif ?>
                        
                       </ul> 
                        <!-- Messages -->
                        
                    
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
                                                <p class="text-muted"><?php echo $this->session->userdata('socio'); ?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="<?php echo base_url('admin/user/all_creditos_vendedor') ?>"><i class="ti-wallet"></i> Mis Solicitudes</a></li>
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

                                <?php if ($this->session->userdata('role') == 'admin' || $this->session->userdata('role') == 'administrador'): ?>
                                    <li><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-angle-right"></i> Agregar Usuario </a></li>
                                    <li ><a href="<?php echo base_url('admin/cob/cuotasAtrasadas') ?>"><i class="fa fa-angle-right"></i>Cuotas Atrasadas </a></li>
                                    <li><a href="<?php echo base_url('admin/cob/clientesxcob') ?>"><i class="fa fa-angle-right"></i> Creditos x Cobrador </a></li>
                                    <li><a href="<?php echo base_url('admin/cob/contexcob') ?>"><i class="fa fa-angle-right"></i> Contenciosos </a></li>
                                    <li><a href="<?php echo base_url('admin/user/nuevocobrador') ?>"><i class="fa fa-angle-right"></i> Agregar Cobrador </a></li>
                                    <li><a href="<?php echo base_url('admin/user/all_cliente_list') ?>"><i class="fa fa-angle-right"></i> Clientes</a></li>
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
                                    <li><a href="<?php echo base_url('admin/user/nueva_solicitud') ?>"><i class="fa fa-angle-right"></i> Nueva Solicitud</a></li>

                                    <?php if ($this->session->userdata('role') == 'supervisor_a' || $this->session->userdata('role') == 'verificador'): ?>
                                    <li ><a href="<?php echo base_url('admin/cob/cuotasAtrasadas') ?>"><i class="fa fa-angle-right"></i>Cuotas Atrasadas </a></li>
                                    <li ><a href="<?php echo base_url('admin/user/creditos_activos') ?>"><i class="fa fa-angle-right"></i>Creditos Activos </a></li>
                                    <li ><a href="<?php echo base_url('admin/user/cred_pendientes_entrega') ?>"><i class="fa fa-angle-right"></i>Para Entregar </a></li>
                                    <li><a href="javascript:verSolicitudes()"><i class="fa fa-angle-right"></i> Lista Completa</a></li>			
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
                                <li ><a href="<?php echo base_url('admin/articulo/compra') ?>"><i class="fa fa-angle-right"></i> Compra </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaArticulosInd') ?>"><i class="fa fa-angle-right"></i> Articulos </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Ventas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasPendientes') ?>"><i class="fa fa-angle-right"></i> Ventas Pendientes </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasEntregadas') ?>"><i class="fa fa-angle-right"></i> Ventas Entregadas </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasCanceladas') ?>"><i class="fa fa-angle-right"></i> Ventas Canceladas </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-calculator"></i><span class="hide-menu">Caja</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/caja') ?>"><i class="fa fa-angle-right"></i> Caja </a></li>
                                <li ><a href="<?php echo base_url('admin/caja/cierre_listado') ?>"><i class="fa fa-angle-right"></i> Cierres de caja </a></li>
                                <li ><a href="<?php echo base_url('admin/vend/comxventaspagar') ?>"><i class="fa fa-angle-right"></i> Comisiones a pagar </a></li>
                                <li ><a href="<?php echo base_url('admin/caja/filtrocaja') ?>"><i class="fa fa-angle-right"></i> Filtro de caja </a></li>
                                <li ><a href="<?php echo base_url('admin/user/proveedores') ?>"><i class="fa fa-angle-right"></i> Cuenta de Proveedor </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-cog"></i><span class="hide-menu">Configuracion</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/dashboard/add_descripcion_gasto') ?>"><i class="fa fa-angle-right"></i> Agregar Items </a></li>
                            </ul>
                        </li>
                        <?php endif ?>
                        <?php if(check_power(6)):?>
                        <li>
                             <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Ventas</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasPendientes') ?>"><i class="fa fa-angle-right"></i> Ventas Pendientes </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasEntregadas') ?>"><i class="fa fa-angle-right"></i> Ventas Entregadas </a></li>
                                <li ><a href="<?php echo base_url('admin/articulo/listaVentasCanceladas') ?>"><i class="fa fa-angle-right"></i> Ventas Canceladas </a></li>
                            </ul>
                        </li>
                        <?php endif ?>
                        <?php if ($this->session->userdata('role') == 'admin'): ?>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/dashboard/backup') ?>" aria-expanded="false"><i class="fa fa-cloud-download"></i><span class="hide-menu">Backup Database</span></a>
                        </li>
                        

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/form/general') ?>"><i class="fa fa-angle-right"></i> Form Basic Layout </a></li>
                                <li><a href="<?php echo base_url('admin/form/addons') ?>"><i class="fa fa-angle-right"></i> Form Addons</a></li>
								<li><a href="<?php echo base_url('admin/form/nuevocliente') ?>"><i class="fa fa-angle-right"></i> nuevo cliente</a></li>
                                <li><a href="<?php echo base_url('admin/form/material') ?>"><i class="fa fa-angle-right"></i> Form Material</a></li>
                                <li><a href="<?php echo base_url('admin/form/validation') ?>"><i class="fa fa-angle-right"></i> Form Validation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/table/basic') ?>"><i class="fa fa-angle-right"></i> Basic Tables</a></li>
                                <li><a href="<?php echo base_url('admin/table/layout') ?>"><i class="fa fa-angle-right"></i> Table Layouts</a></li>
                                <li><a href="<?php echo base_url('admin/table/datatable') ?>"><i class="fa fa-angle-right"></i> Data Tables</a></li>
                                <li><a href="<?php echo base_url('admin/table/editable') ?>"><i class="fa fa-angle-right"></i> Editable Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/ui/cards') ?>"><i class="fa fa-angle-right"></i> Cards</a></li>
                                <li><a href="<?php echo base_url('admin/ui/buttons') ?>"><i class="fa fa-angle-right"></i> Buttons</a></li>
                                <li><a href="<?php echo base_url('admin/ui/modals') ?>"><i class="fa fa-angle-right"></i> Modals</a></li>
                                <li><a href="<?php echo base_url('admin/ui/tabs') ?>"><i class="fa fa-angle-right"></i> Tab</a></li>
                                <li><a href="<?php echo base_url('admin/ui/tooltip') ?>"><i class="fa fa-angle-right"></i> Tooltip stylish</a></li>
                                <li><a href="<?php echo base_url('admin/ui/sweet_alert') ?>"><i class="fa fa-angle-right"></i> Sweet Alert</a></li>
                                <li><a href="<?php echo base_url('admin/ui/notification') ?>"><i class="fa fa-angle-right"></i> Notification</a></li>
                                <li><a href="<?php echo base_url('admin/ui/timeline') ?>"><i class="fa fa-angle-right"></i> Timeline</a></li>
                                <li><a href="<?php echo base_url('admin/ui/typography') ?>"><i class="fa fa-angle-right"></i> Typography</a></li>
                                <li><a href="<?php echo base_url('admin/ui/bootstrap_ui') ?>"><i class="fa fa-angle-right"></i> Bootstrap Ui</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/pages/blank') ?>"><i class="fa fa-angle-right"></i> Blank page</a></li>
                                <li><a href="<?php echo base_url('admin/pages/login') ?>"><i class="fa fa-angle-right"></i> Login</a></li>
                                <li><a href="<?php echo base_url('admin/pages/register') ?>"><i class="fa fa-angle-right"></i> Register</a></li>
                                <li><a href="<?php echo base_url('admin/pages/lockscreen') ?>"><i class="fa fa-angle-right"></i> Lockscreen</a></li>
                                <li><a href="<?php echo base_url('admin/pages/recover') ?>"><i class="fa fa-angle-right"></i> Recover password</a></li>
                                <li><a href="<?php echo base_url('admin/pages/profile') ?>"><i class="fa fa-angle-right"></i> Profile page</a></li>
                                <li><a href="<?php echo base_url('admin/pages/invoice') ?>"><i class="fa fa-angle-right"></i> Invoice</a></li>
                                <li><a href="<?php echo base_url('admin/pages/error') ?>"><i class="fa fa-angle-right"></i> Error Pages</a></li>
                            </ul>
                        </li>
                        

                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/ui/mail') ?>" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                        </li>
                        
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/ui/google_map') ?>"><i class="fa fa-angle-right"></i> Google Maps</a></li>
                                <li><a href="<?php echo base_url('admin/ui/vector_map') ?>"><i class="fa fa-angle-right"></i> Vector Maps</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="<?php echo base_url('admin/ui/widget') ?>" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('admin/ui/morris_chart') ?>"><i class="fa fa-angle-right"></i> Morris Chart</a></li>
                                <li><a href="<?php echo base_url('admin/ui/js_chart') ?>"><i class="fa fa-angle-right"></i> Chartjs</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a href="<?php echo base_url('admin/ui/calender') ?>"><i class="fa fa-angle-right"></i> Calendar</a></li>
                                <li><a href="<?php echo base_url('admin/ui/contact') ?>"><i class="fa fa-angle-right"></i> Contact / Employee</a></li>
                            </ul>
                        </li>  

                        <!-- <li class="nav-devider"></li>
                        <li class="nav-small-cap">EXTRA COMPONENTS</li> -->
                        
                        
                       <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                        <li><a href="#">item 1.3.2</a></li>
                                        <li><a href="#">item 1.3.3</a></li>
                                        <li><a href="#">item 1.3.4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>  
                            </ul>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://anexo.com.ar/subirimagen/jquery.Jcrop.min.js"></script>
    <!-- script para select dependiente  -->
<script language="javascript">
////////////////////////////////////////////////////////////

var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

////////////////////////////////////////////////////////////

$(document).ready(function(){
    $("#category").on('change', function () {
        $("#category option:selected").each(function () {
            var id_category = $(this).val();    

            $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/caja/subcategory') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            id_category: id_category,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(data) { 
        $("#subcategory").html(data);
        console.log(id_category)
        if(id_category == 11){
            $("#prov").load('<?php echo base_url('admin/caja/prov') ?>');        
            }else{
              $("#prov").empty();  
                 }
            });         
        });
   });
});

$(document).ready(function(){
    $("#subcategory").on('change', function () {
        $("#subcategory option:selected").each(function () {
            var id_subcategory = $(this).val(); 
            var id_prov = id_subcategory.split('-');
            var dato = id_prov[0];
            var datod = id_prov[1];
            console.log(dato)

            $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/caja/provcarga') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            id_categorypro: dato,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(data) { 
        $("#subcategorypro").html(data);
            });         
        });
   });
});

////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $("#categoriaed").on('change', function () {
        $("#categoriaed option:selected").each(function () {
            var id_categoria = $(this).val();    

            $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/articulo/subcategoria') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            id_categoria: id_categoria,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(data) { 
        $("#subcategoria").html(data);
        console.log(id_category)
        
            });         
        });
   });
});

//////////////////////////////////////////////////////////////////////////
function VerComprobante(veresto) {
        var veresto;
    $("#fluidocont").empty(); //vacio el div consola despues de post

    $("#fluidocont").load('<?php echo base_url('admin/articulo/VerComprobante/') ?>'+veresto);        
    };
/////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $("#CuentaP").on('change', function () {
        $("#CuentaP option:selected").each(function () {
            var id_prove = $(this).val();    

            $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/user/proveedoresprint') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            proveedor: id_prove,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(data) { 
        $("#cuentaProveedor").html(data);

            });         
        });
   });
});


////////////////////////////////////////////////////////////////////////
    function cobroDelDia(){
    pnom= $('#nom').val(); // Obtengo del formulario el valor nom
    pfecha= $('#fecha').val(); // Obtengo del formulario el valor fecha
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/cob/test') ?>',  // Fichero destino (el PHP que trata los datos)
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
 function filtroClixCob(){
    pnom= $('#nom').val(); // Obtengo del formulario el valor nom
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/cob/filtroclixcob') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            nom: pnom,
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
 function ContexCob(){
    pnom= $('#nom').val(); // Obtengo del formulario el valor nom
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/cob/Contenciosoxcob') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            nom: pnom,
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
     
     url: '<?php echo base_url('admin/cob/mirecaudacion') ?>',  // Fichero destino (el PHP que trata los datos)
    
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
     url: '<?php echo base_url('admin/articulo') ?>',  // Fichero destino (el PHP que trata los datos)
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
  function Compra(){
    $("#fluidocont").empty(); //vacio el div consola despues de post
    $("#fluidocont").load('<?php echo base_url('admin/articulo/compra') ?>');
  }
  ////////////////////////////////////////////////////////
function verArticulo(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/articulo/mostrar_articulos') ?>',  // Fichero destino (el PHP que trata los datos)
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
     
     url: '<?php echo base_url('admin/user/all_creditos_pendiente_verificar') ?>',  // Fichero destino (el PHP que trata los datos)
    
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
     
     url: '<?php echo base_url('admin/cob') ?>',  // Fichero destino (el PHP que trata los datos)
    
     }).done(function( acobrar ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(acobrar);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  }

   function verCreditosACobrar11(){
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: '<?php echo base_url('admin/cob/nuevoin') ?>',  // Fichero destino (el PHP que trata los datos)
    
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
   $(document).ready(function(){
    $("#buscli").change(function () {
    var busq = $('#buscli').val(); // Obtengo del formulario el valor nom
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
    type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/cob/buscCredxCob') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            busca: busq,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
    
     }).done(function( acobrar ) { 
        $("#fluidocont").empty(); //vacio el div consola despues de post
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").append(acobrar);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
    });
  });
});
  
  ////////////////////////////////////////////////////////
  function verCreditosHoy(){
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: '<?php echo base_url('admin/cob/cobrarhoy') ?>',  // Fichero destino (el PHP que trata los datos)
    
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
     
     url: '<?php echo base_url('admin/user/all_creditos_list') ?>',  // Fichero destino (el PHP que trata los datos)
     
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
function verFormularioCli(){

    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     
     url: '<?php echo base_url('admin/user/nuevocliente_cob') ?>',  // Fichero destino (el PHP que trata los datos)
     
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
    Pid = $('#idart').val();
    Pcategoria = $('#categoriaed').val();
    Psubcategoria = $('#subcategoria').val();
    Pmarca = $('#marca').val();
    Pum = $('#um').val();
    Pcapacidad = $('#capacidad').val();
    Pmodelo = $('#modelo').val();
    Ptipo = $('#tipo').val();
    Pcaracteristica = $('#caracteristica').val();
    Pdetalle = $('#detalle').val();
    Paccionamiento = $('#accionamiento').val();
    Pancho = $('#ancho').val();
    Plargo = $('#largo').val();
    Palto = $('#alto').val();
    Piva = $('#iva').val();
    pmarkm= $('#markm').val(); // Obtengo del formulario el valor nom
    Ppvm = $('#pvm').val();
    pdescripcion= $('#descripcion').val(); // Obtengo del formulario el valor nom
    pcosto= $('#costo').val(); // Obtengo del formulario el valor fecha
    pmarkup= $('#markup').val();
    ppvp = $('#pvp').val();
    pestado= $('#estado').val(); // Obtengo del formulario el valor fecha
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/articulo/modificara') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            id : Pid,
            categoria : Pcategoria,
            subcategoria : Psubcategoria,
            marca : Pmarca, 
            um : Pum, 
            capacidad : Pcapacidad,
            modelo : Pmodelo,
            tipo : Ptipo,
            caracteristica : Pcaracteristica,
            detalle : Pdetalle,
            accionamiento : Paccionamiento,
            ancho : Pancho,
            largo : Plargo,
            alto : Palto,
            iva : Piva,
            markm: pmarkm,
            pvm : Ppvm,
            descripcion: pdescripcion,
            costo: pcosto,
            markup: pmarkup,
            pvp: ppvp,
            estado: pestado,
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
////////////////////////////////////////////////////////////////////

  $(document).ready(function()
    {
        $("#busqueda").change(function () {
    var busquedaa = $('#busqueda').val(); // Obtengo del formulario el valor nom
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/user/buscar_credito') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            busqueda: busquedaa,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(f) { 
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        src="https://code.jquery.com/jquery-1.9.1.js"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"
      // Función que se ejecuta si todo ha ido bien
      $("#fluidocont").html(f);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#fluidocont").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
        });
    });
  });

  ////////////////////////////////////////////////////////////////////////////////
  $(document).ready(function(){                                                                                      
        $("#buscarcli").focus();
        //comprobamos si se pulsa una tecla
        $("#buscarcli").change(function(){                        
              var consulta = $("#buscarcli").val();//obtenemos el texto introducido en el campo de búsqueda                                                   
              $.ajax({
                    type: "POST",
                    url: "<?php echo base_url("admin/cliente/buscar_cliente");?>",
                    data: {
                    busqueda: consulta,
                    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
                        }
                    }).done(function(data){                                                   
                    //vacio el div despues de cada post.
                    $("#datos_cliente").empty();
                    //console.log(JSON.stringify(data));
                    //recorro el array json
                     for (val of data) {
                        var condi = 'inhabilitado';
                        var uno = '<a href="<?php echo base_url('admin/articulo/venta/') ?>';
                        var dos = val.id;
                        var tres = '">Cargar Solicitud</a>';
                        var soli = uno+dos+tres;
                        var estado = val.calificacion;
                        var viable;
                        if(estado) {viable = condi;} else {viable = soli;}

                    $("#datos_cliente").append( '<tr><td>'+ val.dni +'</td><td>'+ val.last_name +' '+ val.first_name +'</td><td>'+val.direccion+'</td><td>'+viable+'</td></tr>' );
                        };                                     
                    })                                                      
        });
    });

  ////////////////////////////////////////////////////////
  $(document).on('change', '#servicioid', function(event) {
    var cadenasrt = $("#servicioid option:selected").val()
    var arrTerminos = cadenasrt.split('-');

console.log('precio:' + arrTerminos[arrTerminos.length-1]);
     $('#servicioSelecionado').val(arrTerminos[arrTerminos.length-1]);
});




  $(document).ready(function(){                                                                                      
        $("#otroselect").click(function(){  
             $("#newselect").append('<div id="My_selector"></div>')           
                                                  
              $.ajax({
                    type: "POST",
                    url: "<?php echo base_url("admin/articulo/getarticulos");?>",
                    data: {
                    '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
                        }

                    }).done(function(csele){                                                   

                    $("#My_selector").append(csele);
                                                            
                    })                                                      
        });
        $( "#eliminar" ).click(function() {

          $( "#agreg" ).remove();
        });
    });
  ////////////////////////////////////////////////////////////////////
  ///////////////-Maneja el modal de articulos----//////////////////
   $(document).ready(function() {
       
    $('#ArtModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var pru = button.data('titulo') // Extract info from data-* attributes
  var pvp = button.data('pvp')
  var img = button.data('imagen')
  var anticipo = button.data('anti')
  $("#anticipo").val(anticipo)
  $("#imagen").html(img)

  var modal = $(this)
  modal.find('.modal-title').text(pru)

  $("#calcular").click(function(){ 

        var cuotas;
        var Pl = $("#cuotas").val();
        var anti = $("#anticipo").val();
        var condicion = $("#condicion").val();
            console.log(condicion);
        var tasa
        var condi;
        var error;

        if(condicion == 'semanal' && Pl < 41){cuotas = $("#cuotas").val(); tasa = 3; condi = 'semanas'}else if(condicion == 'quincenal' && Pl < 20){cuotas = $("#cuotas").val(); tasa = 6; condi = 'quincenas'}else if(condicion == 'mensual' && Pl < 10){cuotas = $("#cuotas").val(); tasa = 8; anti = 0; $("#anticipo").val(0); condi = 'meses'}else{cuotas = 0;}

       var m1 = cuotas;
       var m2 = pvp-anti;
       var r = m2 * ((((m1*tasa)/100)+1)/m1);
       var entero = r.toFixed();
       var imprimir = ' de $'+entero;
       if(anti < entero*2 && anti != 0){imprimir = 'poco anticipo'}
        if(cuotas != 0 ){
    $("#Anticipode").text('anticipo de $'+ anti)
    $("#plazo").text(m1+' '+condi)
    $("#total").text(imprimir)
    }else{
        $("#Anticipode").empty()
        $("#plazo").empty()
        $("#total").text('tu plazo esta mal')}

});
});
});    
   //////////////////////////////////////////////////////////////
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
    
    <!-- This page plugins -->
    
    <!-- chartist chart -->
    <script src="<?php echo base_url() ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/echarts/echarts-all.js"></script>
    
    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.js"></script>
    <script src='<?php echo base_url() ?>assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="<?php echo base_url() ?>assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/calendar/dist/cal-init.js"></script>
    
    <!-- sparkline chart -->
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard4.js"></script>

    <!-- Sweet-Alert  -->
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    
    <!-- toast notification CSS -->
    <script src="<?php echo base_url() ?>assets/plugins/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url() ?>assets/js/toastr.js"></script>

    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCUBL-6KdclGJ2a_UpmB2LXvq7VOcPT7K4&amp;sensor=true"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/gmaps/jquery.gmaps.js"></script>

    <!-- Vector map JavaScript -->
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/vectormap/jvectormap.custom.js"></script>

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
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
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
        "displayLength": 25,
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    });

    $('#example33').DataTable({
        "paging": false,
        
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]

    });
    
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
    <script src="<?php echo base_url() ?>assets/plugins/summernote/dist/summernote.min.js"></script>
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
    <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/multiselect/js/jquery.multi-select.js"></script>
    
    <!-- End form js -->
 <script type="text/javascript">
    $(document).ready(function()
    {
    $(".form-control").change(function () {
        
           var mil = $('#1000').val();
           var qui = $('#500').val();
           var dos = $('#200').val();
           var cien = $('#100').val();
           var cin = $('#50').val();
           var ve = $('#20').val();
           var diez = $('#10').val();
           var mon = $('#monedas').val();
           miles = (mil*1000)+(qui*500)+(dos*200)+(cien*100)+(cin*50)+(ve*20)+(diez*10)+(mon*1);

           $("#subtotal").val(miles);
           $("#subtotal2").text(miles);

        });

    });
    </script>
    <script type="text/javascript">
    $(document).ready(function()
    {
        $('#bbt').click(function(){
    var dde = $('#desde').val(); // Obtengo del formulario el valor nom
    var hsta = $('#hasta').val(); // Obtengo del formulario el valor nom
    
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/cob/tabla_totales') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            desde: dde,
            hasta: hsta,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(mostrar) { 
        console.log(mostrar);
      // Función que se ejecuta si todo ha ido bien
      $("#tabla_totales").html(mostrar);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#tabla_totales").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
        });
    });
  });
    ////////////////////////////////////////
    $(document).ready(function()
    {
        $('#reca').click(function(){
    var dde = $('#desde').val(); // Obtengo del formulario el valor nom
    var hsta = $('#hasta').val(); // Obtengo del formulario el valor nom
    var cobra = $('#cobrador').val(); // Obtengo del formulario el valor nom
    
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url('admin/cob/recaudacionxfecha') ?>',  // Fichero destino (el PHP que trata los datos)
     data: {
            desde: dde,
            hasta: hsta,
            cobrador: cobra,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
      } // Datos que se envían
     }).done(function(mostrar) { 
        console.log(mostrar);
      // Función que se ejecuta si todo ha ido bien
      $("#tabla_totales").html(mostrar);  // Escribimos en el div consola el mensaje devuelto
     }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
     // Mostramos en consola el mensaje con el error que se ha producido
     $("#tabla_totales").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
        });
    });
  });

    ////////////////////////////////////////
    ///////////////////cambiar estado////////////////////////////////////
var idcliente;
var prep;
var cadena = '#tilde';
var idtilde;
$('#Contactados').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
 // Extraer información de datos- * atributos
  idcliente = button.data('idcliente') // Extraer información de datos- * atributos
  conta = button.data('contactado') // Extraer información de datos- * atributos
  idtilde = cadena + idcliente;
  console.log(idcliente);
// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#cctdo').click(function(){

    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/user/contactado",
      data: { idcliente: idcliente,
              contactado: conta,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
})     
    .done(function(repro) {
      
 
      $(idtilde).empty();
      $(idtilde).append(repro);
      
        

    });
});
  // Actualiza el contenido del modal. Usaremos jQuery aquí, pero podría usar una biblioteca de enlace de datos u otros métodos en su lugar.

})
//////////////////////fin cambiar estado/////////////////////////////////
////////////////////Modal para anular venta////////////////////////////
$('#AnularVenta').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botón que activó el modal
  var idventa = button.data('venta') // Extraer información de datos- * atributos
  var filaaeliminar = '#fila_'+idventa;
  console.log(filaaeliminar)

// Si es necesario, puede iniciar una solicitud AJAX aquí (y luego realizar la actualización en una devolución de llamada).
   $('#Anular1').click(function(){

    $.ajax({
      method: "POST",
      url: "<?php echo base_url() ?>admin/articulo/anularventa",
      data: { idventa: idventa,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>',
             }
        })  .done(function(anul) {
      
              $(filaaeliminar).remove();

            });
    });
})
////////////////fin modal anular venta///////////////////
    ////////////////////////////////////////
    $(document).ready(function()
    {
        $('#recpfede').click(function(){
    var dde = $('#desde').val(); // Obtengo del formulario el valor nom
    var hsta = $('#hasta').val(); // Obtengo del formulario el valor nom
    var cobra = $('#cobrador').val(); // Obtengo del formulario el valor nom
    
    // Función que envía y recibe respuesta con AJAX
    $.ajax({
     type: 'POST',  // Envío con método POST
     url: '<?php echo base_url() ?>admin/cob/recaudacionxfechapf',  // Fichero destino (el PHP que trata los datos)
     data: {
            desde: dde,
            hasta: hsta,
            cobrador: cobra,
            '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', //Token que valida el formulario del mismo servidor
            } // Datos que se envían
        }).done(function(mostrar) { 
        console.log(mostrar);
        // Función que se ejecuta si todo ha ido bien
        $("#tabla_totales").html(mostrar);  // Escribimos en el div consola el mensaje devuelto
        }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
            // Mostramos en consola el mensaje con el error que se ha producido
            $("#tabla_totales").html("Ocurrio el siguiente error: "+ textStatus +" "+ errorThrown); 
            });
        });
    });

    </script>



<script type="text/javascript">

    
//////////////////////////////////////////////////////////////////
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
  trigger: 'hover'
}).on('shown.bs.tooltip', function() {
  var link = $(this);
  var id = link.attr("data-id");
  
  $.ajax({
    url:"<?php echo base_url() ?>admin/caja/pruebatooltipax",
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
///////////////////////////////////////////////

</script>


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
