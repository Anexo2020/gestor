

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Caja diaria</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar nuevo item de gasto</li>
            </ol>
        </div>
        <div class="col-md-5 col-8 align-self-center">
            
        </div>
        
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->

    
    <!-- Start Page Content -->

    <div class="row">

        <div class="col-md-12">
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
        </div>

        <div class="col-lg-4">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Filtrar Movimiento
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/caja/filtrocajas') ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Desde <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <input id="desde" type="date" name="desde" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Hasta <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <input id="hasta" type="date" name="hasta" class="form-control " />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Categoria <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                           <div class="form-group">
                                                <select class="form-control custom-select" name="rubro" id="category" aria-invalid="false">
                                                    <option value="0">Select</option>
                                                    <?php foreach ($rubro as $rub): ?>
                                                        <option value="<?php echo $rub['id']; ?>"><?php echo $rub['rubro']; ?></option>
                                                    <?php endforeach ?>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-5">Descripcion <span class="text-danger">*</span></label>
                                        <div class="col-md-7 controls">
                                            <div class="form-group">
                                                <select name="descripcion" id="subcategory" class="form-control" aria-invalid="false" ></select>
                                            </div>
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
                                        <label class="control-label text-right col-md-5"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>


        <div class="col-lg-8">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Lista de movimientos</h4>
                </div>
                <div class="card-body">
                
                    <div>
                    <div>
                    </div>
                    
                    
                    <div class="table-responsive m-t-40">
                        <table id="example33" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Importe</th>
                                    <th>Movimiento</th>
                                    <th>Moneda</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>TOTAL</th>
                                    <th><?php echo $suma[0]->importe; ?></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>

                            <tbody>
 
                               <?php foreach ($caja as $lista): ?>
                                
                                <tr>
                                    <td><?php echo date("d/m/Y", strtotime($lista['fecha']));; ?></td>
                                    <td><?php echo $lista['categoria']; ?></td>
                                    <td><?php echo $lista['descripcion']; ?></td>
                                    <td id="impor<?php echo $lista['id']; ?>"><?php echo $lista['importe']; ?></td>
                                    <td><?php if($lista['movimiento']<>0){echo "ingreso";}else{echo "salida";}  ?></td>
                                    <td><?php echo $lista['forma']; ?><input type="hidden" name="item[]" value="<?php echo $lista['id']; ?>"></td>
                                </tr>

                            <?php endforeach ?>

                            </tbody>


                        </table>
                    </div>

                </div>
              
            </div>
        </div>

    </div>

    <!-- End Page Content -->

</div>




