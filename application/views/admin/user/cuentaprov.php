<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Solicitud</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Creditos</a></li>
                <li class="breadcrumb-item active">Solicitud</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    
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
            <div class="card card-body">
               <form>
                <div class="form-group row" >
                    <label class="control-label text-right col-md-2">Proveedor </label>
                    <div class="col-md-10 controls">
                        <select class="form-control custom-select"  name="proveedor" aria-invalid="false" id="CuentaP" >
                            <option value="">Select</option>
                            <?php foreach ($proveedores as $proveedor): ?>
                                <option value="<?php echo $proveedor['id']; ?>"><?php echo $proveedor['descripcion']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
               </form>
                <div class="col-md-12" id="cuentaProveedor">
            
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
