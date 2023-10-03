<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Datos</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Subtotales</a></li>
                <li class="breadcrumb-item active">Ingresos</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        
                        <h4 class="m-t-0 text-info"></h4></div>
                    <div class="spark-chart">
                        <div ></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small></small></h6>
                        <h4 class="m-t-0 text-primary"></h4></div>
                    <div class="spark-chart">
                        <div ></div>
                    </div>
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
            <div class="card card-body printableArea">
                <h3><b>Estadisticas</b> </h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address><form>
                                <h3> &nbsp;<b class="text-danger">Desde</b></h3>
                                <input id="desde" type="date" name="desde" class="form-control " />
                            </address>
                        </div>
                        <div class="pull-left">
                            <address>
                                <h3> &nbsp;<b class="text-danger">Hasta</b></h3>
                                <input id="hasta" type="date" name="desde" class="form-control " />
                            </address>
                        </div>
                        <div class="clearfix" style="padding-top: 60px">
                            <address>
                                <h3> &nbsp;</h3>
                                <input type="button" id="bbt" class="btn btn-success" value="BUSCAR" /></form>
                            </address>
                        </div>
                        
                    </div>
                    <div id="tabla_totales" class="col-md-12">
                    
                        
                    
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
