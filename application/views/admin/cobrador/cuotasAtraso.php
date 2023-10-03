<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Solicitudes</h3>
            
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
    <style type="text/css">
        table.zero{
            width: 100%;
        }
        th{
            padding: 0.5rem;
            vertical-align: middle;
        }
        th, td {
           text-align: center;
        }
    </style>

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-12">


            <div class="card">

                <div class="card-body">

                    <div  class="table-responsive m-t-10">
                        <table id="exampluuue23" class="display nowrap table-zero  table-striped table-bordered " cellspacing="0" width="100%" >
                            <thead>
                                <tr>
                                    <th>Credito</th>
                                    <th>Cuota</th>
                                    <th>Importe</th>
                                    <th>Vencio</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            
                            
                            <tbody>
                            <?php  foreach ($cuotasA as $cuotas): ?>
                                
                                <tr>

                                    <td><?php echo $cuotas['idcredito']; ?></td>
                                    <td><?php echo $cuotas['cuotanumero']; ?></td>
                                    <td><?php echo '$'.$cuotas['valorcuota']; ?></td>
                                    <td><?php echo $cuotas['vence']; ?></td>
                                    <td><?php echo $cuotas['saldo']; ?>
                                                 
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