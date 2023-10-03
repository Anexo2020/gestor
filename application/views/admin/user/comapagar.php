

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <p style="font-weight: bolder; font-size: 40px;">Total: $<span id="total">0</span></p>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-info"></h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-primary"></h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

            <div class="card">

                <div class="card-body">
                    <form method="post" action="<?php echo base_url('admin/vend/pago_cometa') ?>" class="form-horizontal" novalidate>
                        <div id="events"  style="
                            margin-bottom: 1em;
                            padding: 1em;
                            background-color: #f6f6f6;
                            border: 1px solid #999;
                            border-radius: 3px;
                            height: 80px;
                            overflow: auto;">
                                <div>
                                    <input type="hidden" id="stop" name="">
                                    <input type="hidden" name="caja" id="total2">
                                    <label class="custom-control custom-radio">
                                    <input type="radio" name="forma" value="efectivo" checked class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Efectivo</span>
                                </label>
                                    <label class="custom-control custom-radio">
                                    <input type="radio" name="forma" value="mercadopago" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Mercadopago</span>
                                </label>
                                </div>
                                    <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                            <div class="pull-right fixed">
                                <?php if($apertura[0]['usuario']==$this->session->userdata('id')): ?>
                                <button type="submit" class="btn btn-success">pagar</button>
                                <?php endif ?>
                            </div>
                        </div>
                    </form>
                
                

                    <div class="table-responsive m-t-40">
                        <table id="example21" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Credito</th>
                                    <th>Venta</th>
                                    <th>Pagada</th>
                                    <th>Vendedor</th>
                                    <th>Comision</th>                       
                                </tr>
                            </thead>
                           
                            <tbody>
                            <?php $c = 0;  foreach ($comisiones as $comision): ?>
                                <tr>
                                    <td><?php echo $comision['idcredito']; ?></td>
                                    <td><?php echo $comision['idventa']; ?></td> 
                                    <td><?php echo $comision['pagada']; ?></td>
                                    <td><?php echo $comision['user_apellido']." ".$comision['user_name']; ?></td>
                                    <td><?php echo $comision['comision']; ?></td>
                                </tr>
                            <?php  endforeach  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>

<script type="text/javascript">
 

</script>




