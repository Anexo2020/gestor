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
                    <h4 class="card-title">Mis Creditos</h4>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Numero</th>
                                    <th style="text-align: center;">Articulo</th>
                                </tr>
                            </thead>
                            <tbody><?php foreach($creditos as $credito): ?>
                                <tr>
                                    <td style="text-align: center;"><a href="<?php echo base_url('admin/cliente/verdetalle/'.$credito['id']) ?>"><span class="label label-success"><?php echo $credito['id']; ?></span></a></td>
                                    <td style="text-align: center;"><?php echo $credito['articulo']; ?></td>
                                </tr><?php endforeach ?>
                                <?php foreach($finalizados as $fin): ?>
                                <tr>
                                    <td style="text-align: center;"><a href="<?php echo base_url('admin/cliente/verdetalle/'.$fin['id']) ?>"><span class="label label-danger"><?php echo $fin['id']; ?></span></a></td>
                                    <td style="text-align: center;"><?php echo $fin['articulo']; ?></td>
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