
<!-- Container fluid  -->


<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-3 col-3 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Filtro de clientes</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Por Cobrador</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
        </div>
        <div class="col-md-6 col-5 align-self-center">
           <form id="validador">
                    
                        <select class="form-control col-md-3" id="nom" name="nom" aria-invalid="false">
                        <option value="0">Seleccionar</option>
                       <?php foreach ($cobradores as $cobrador): ?>
                        <option value="<?php echo $cobrador['id'] ?>"><?php echo $cobrador['first_name']; ?></option>                                                    
                       <?php endforeach ?>
                        </select>

                           <!-- Botón que hace la llamada a la función validarUsuario() para enviar formulario -->
                           <input class="button btn-info" onclick="filtroClixCob()" type="button" value="buscar" /> 
                        </form>
        </div>
        <div class="col-md-3 col-4 align-self-center">
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
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

            <?php $msg = $this->session->flashdata('msg'); ?>
            <?php if (isset($msg)): ?>
                <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <?php $error_msg = $this->session->flashdata('error_msg'); ?>
            <?php if (isset($error_msg)): ?>
                <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div>
            <?php endif ?>

            <div class="card">

                <div id="consola" class="card-body">

                

                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>
