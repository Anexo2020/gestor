


<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Ventas</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Incio</a></li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            
            
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Info 1</small></h6>
                        <h4 class="m-t-0 text-info">10</h4>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Info 2</small></h6>
                        <h4 class="m-t-0 text-primary">10</h4>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->


    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">

        

            <div class="card" >

                <div class="card-body">

                           

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Cliente</th>
                                    <th>Importe</th>
                                    <th>Fecha</th>
                                    <th>Entregado</th>
                                    <th>Vendedor</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach ($ventas as $venta): ?>
                           
                                <tr id="fila_<?php echo $venta['id']; ?>" >
                                    <td><?php echo $venta['id']; ?>&nbsp; &nbsp; <span onclick="VerComprobante(<?php echo $venta['id']; ?>)" ><a href="#"><i class="fa fa-eye text-info " ></i></a></span>
                                    <input type="hidden" name="" id="identificador12" value="<?php echo $venta['id']; ?>" >
                                    </td>
                                    <td><?php echo $venta['apellido_cliente'].' '.$venta['nombre_cliente']; ?></td>
                                    <td><?php echo $venta['total']; ?></td>
                                    <td><?php echo $venta['fecha']; ?></td>
                                    <td><?php echo $venta['entregado']; ?></td>
                                    <td><?php echo $venta['apellido_vendedor'].' '.$venta['nombre_vendedor']; ?></td>
                                </tr>

                            <?php  endforeach  ?>

                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>