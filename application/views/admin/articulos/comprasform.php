
<div class="container-fluid" style="padding-top: 1px;">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row" style="margin-top: 10px;">
        <div class="col-6">
            <div class="card">
                <div class="card-body" >

                    <div class="table-responsive m-t-40">
                        <table id="articulos" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>descripcion</th>
                                    <th>costo</th>
                                    <th>stock</th>                       
                                </tr>
                            </thead>
                            <tbody>
                            <?php $c = 0;  foreach ($articulos as $articulo): ?>
                                <tr>
                                    <td><?php echo $articulo['precio_id']; ?></td>
                                    <td><?php echo $articulo['descripcion'].' '.$articulo['marca'].' '.$articulo['modelo'].' '.(int)$articulo['capacidad']." ".$articulo['unidad']; ?></td>
                                    <td><?php echo $articulo['costo']; ?></td>
                                    <td><?php echo $articulo['stock']; ?></td>
                                </tr>
                            <?php  endforeach  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> NUEVA COMPRA
                </div>
                <div class="card-body">
                     <form method="post" action="<?php echo base_url('admin/articulo/comprado') ?>" class="form-horizontal" novalidate>
                    <div class="row" style="height: 60px;">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Proveedor </label>
                                        <div class="col-md-5 controls">
                                           <div class="form-group">
                                                <select class="form-control custom-select" name="proveedor" id="proveedor" aria-invalid="false" required class="form-control">
                                                    <option value="">Select</option>
                                                    <?php foreach ($proveedores as $proveedor): ?>
                                                        <option value="<?php echo $proveedor['id']; ?>"><?php echo strtoupper($proveedor['descripcion']); ?></option>
                                                    <?php endforeach ?>
                                                </select></div>
                                        </div>
                                        <div class="col-md-4 controls">
                                           <div class="form-group">
                                                <input type="date" name="fecha" class="form-control" required class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                        <div class="row" style="height: 60px;">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">FC</label>
                                        <div class="col-md-5 controls">
                                           <div class="form-group">
                                                <input type="text" class="form-control" name="fc" required class="form-control"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
 
                        
                        <div class="col-md-12 " id="titulos"  style="
                            margin-bottom: 0em;
                            padding-bottom: 0em;
                            padding-left: 0em;
                            background-color: #f6f6f6;
                            border: 1px solid #999;
                            border-radius: 0px;
                            height: 27px;
                            ">
                            <div class="row">
                            <div class="col-md-5" >DESCRIPCION</div>    
                            <div class="col-md-1" style="border-right: 1px solid #999; border-left: 1px solid #999;
                            ">ct</div> 
                            <div class="col-md-2" style="border-right: 1px solid #999;
                            ">COSTO</div>
                            <div class="col-md-2" style="border-right: 1px solid #999;
                            ">SUBTOTAL</div>
                            <div class="col-md-2" style="border-right: 1px solid #999;
                            ">CAMB</div>
                            </div>   
                            </div>
                        
                        <div class="col-md-12 " id="eventos"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 0em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;
                            height: 320px;">
                             
                        </div>
                        <div class="col-md-12 " id="eventosa"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;
                            height: 60px;">
                            <p class="float-right" style="padding-right: 2em; font-size: 150%;">TOTAL:  $<span id="total">0</span></p>
                            <input type="hidden" name="total" id="totali" value="">
                                </div>
                        <div class="col-md-12 " id="eventosb"  style="
                            margin-bottom: 1em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-bottom: 1px solid #999;
                            border-radius: 0px;
                            height: 60px;">

                              <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                                <button type="submit" class="float-right btn btn-success ">Cargar</button>
                                </div>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>





