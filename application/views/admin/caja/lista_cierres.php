<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Cierres</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Cierre de Caja</a></li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
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


            <div class="card">

                <div class="card-body">

                
                

                    <div class="table-responsive m-t-40 {-sm}">
                        <table id="exampluuue23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Fecha</th>
                                    <th>Sistema</th>
                                    <th>Real</th>
                                    <th>Mercadopago</th>
                                </tr>
                            </tfoot>
                            
                            <tbody>
                            <?php  foreach ($lista as $item): ?>
                                
                                <tr>
                                    <td><a href="<?php echo base_url('admin/caja/cierre_print/'.$item['id']) ?>"data-toggle="tooltip" data-original-title="ver"><?php echo $item['id'] ?></td>
                                    <td><?php echo $item['fecha'] ?></a></td>
                                    <td><?php echo $item['efectivo_c'] ?></td>
                                    <td><?php echo $item['efectivo_real'] ?></td> 
                                    <td><?php echo $item['mercadopago'] ?></td>                                
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