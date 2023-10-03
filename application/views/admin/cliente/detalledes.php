<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h5><?php echo "Hola ".$this->session->userdata('name'); ?></h5>
            
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        
                    </div>
                    <div class="spark-chart">
                        
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        
                    </div>
                    <div class="spark-chart">
                        
                    </div>
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
    <div class="row">
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Plan cuotas</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">#</th>
                                    <th style="text-align: center;">Vencimiento</th>
                                    <th style="text-align: center;">Importe</th>
                                    <th style="text-align: center;">Estado</th>
                                    <th style="text-align: center;">pagar</th>
                                </tr>
                            </thead>
                            <tbody><?php foreach($cuotas as $cuota): ?>
                                <tr>
                                    <td style="text-align: center;"><span class="label label-success"><?php echo $cuota['cuotanumero']; ?></span></a></td>
                                    <td style="text-align: center;">
                                        <?php if($cuota['pagada'] == "no" AND $cuota['vence'] < date("Y-m-d")): ?>
                                            <a href="#" data-toggle="tooltip" title="vencida"><span class="label label-danger" >
                                        <?php echo date("d/m/Y", strtotime($cuota['vence'])); ?>
                                    </span></a>
                                        <?php else: ?>
                                        <?php echo date("d/m/Y", strtotime($cuota['vence'])); ?>
                                        <?php endif ?>    
                                        </td>
                                    <td style="text-align: center;">$<?php echo $cuota['valorcuota']; ?></td>
                                    <td style="text-align: center;"><?php if($cuota['pagada'] == "si"){echo "paga";}else{echo "debe";} ?></td>
                                    <td style="text-align: center;"><a href="<?php echo 'https://anexo.com.ar/pagarmp/?bsd='.$cuota['idcuota'] ?>"><span class="label label-success">recibo</span></a></td>
                                </tr><?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mis Pagos</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Recibo</th>
                                    <th style="text-align: center;">fecha</th>
                                    <th style="text-align: center;">importe</th>
                                </tr>
                            </thead>
                            <tbody><?php foreach($pagos as $pago): ?>
                                <tr>
                                    <td style="text-align: center;"><a href="<?php echo base_url('admin/user/recibo_gen_cliente/'.$pago['idpago']) ?>"><span class="label label-success">recibo</span></a></td>
                                    <td style="text-align: center;"><?php echo date("d/m/Y", strtotime($pago['fecha'])); ?></td>
                                    <td style="text-align: center;">$<?php echo $pago['importe']; ?></td>
                                </tr><?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- column -->
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->