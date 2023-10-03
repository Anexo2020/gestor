<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Recibo</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Recibo</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-info"></h4></div>
                    <div class="spark-chart">
                        
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-primary"></h4></div>
                    <div class="spark-chart">
                        
                    </div>
                </div>
                <div>
 
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
            <div class="card card-body printableArea"><?php  foreach ($pagos as $pago): ?>
                <h3><b>RECIBO</b> <span class="pull-right">#00000<?php echo $pago['idpago']; ?></span></h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Comprobante de Pago</b></h3>
                                <p class="m-t-30"><b>Fecha de pago:</b> <i class="fa fa-calendar"></i> <?php $newDate = date("d/m/Y", strtotime($pago['fecha']));echo $newDate; ?></p>
                                <p class="text-muted m-l-5">Credito de referencia:--- <?php echo "CD000".$pago['idcredito']; ?>
                                     <?php  foreach ($cobro as $cob): ?>
                                    <br/> Titular: <?php echo $cob['cliente_apellido']." ".$cob['cliente_name']; ?>
                                 
                                  
                                    <br/> Pago ingresado por: <?php echo strtoupper($cob['cobro_name']." ".$cob['cobro_apellido']); ?>
                                    <br/> Forma de Pago: <?php echo strtoupper($cob['modo']); ?></p>
                                    <?php endforeach ?> 
                            </address>
                        </div>
                        <div class="pull-right text-right">
                            <address>
                                <h3></h3>
                                <h4 class="font-bold"></h4>
                                <p class="text-muted m-l-30">
                                    <br/>
                                    <br/>
                                    <br/></p>
                                
                               
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">
                            
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            <hr>
                            <h3><b>Total :</b> $<?php echo $pago['importe']; ?></h3>
                            <?php endforeach ?>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
             <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
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