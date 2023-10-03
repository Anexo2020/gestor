<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Cierre de Caja</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Caja</a></li>
                <li class="breadcrumb-item active">Cierre</li>
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
            <div class="card card-body printableArea">
                <h4><b>CIERRE DE CAJA <i class="fa fa-calendar"></i> <?php echo $ultimo[0]['fecha']; ?></b> <span class="pull-right">Cierre N° 00000<?php echo $ultimo[0]['id']; ?></span></h4>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-left">
                            <address>
                                <h4> &nbsp;Operador de caja: <b class="font-bold"><?php echo $ultimo[0]['nombre_oper']." ".$ultimo[0]['apellido_oper']; ?></b></h4>
                                <p class="m-l-15">
                                
                                    <br/><h4> Total efectivo sistema: <b class="font-bold">$<?php echo $ultimo[0]['efectivo_c']; ?></b></h4>
                                    <br/> Diferencia en efectivo: <b class="font-bold">$<?php echo ($ultimo[0]['efectivo_real']-$ultimo[0]['efectivo_c']); ?></b>
                                    <br/> Ttal mercadopago: <b class="font-bold">$<?php echo $ultimo[0]['mercadopago']; ?></b>                
                                </p>
                            </address>
                            
                        </div>
                        <div class="pull-right text-left">
                            <address>
                                <h4> &nbsp;<b class="font-bold">Efectivo en billetes</b></h4>
                                <p class="m-l-15">Billetes de 1000: <?php echo $ultimo[0]['mil']; ?>
                                    <br/> Billetes de $500: <?php echo $ultimo[0]['quinientos']; ?>
                                    <br/> Billetes de $200: <?php echo $ultimo[0]['doscientos']; ?>
                                    <br/> Billetes de $100: <?php echo $ultimo[0]['cien']; ?>
                                    <br/> Billetes de $50: <?php echo $ultimo[0]['cincuenta']; ?>
                                    <br/> Billetes de $20: <?php echo $ultimo[0]['veinte']; ?>
                                    <br/> Billetes de $10: <?php echo $ultimo[0]['diez']; ?>
                                    <br/> Monedas: <?php echo $ultimo[0]['monedas']; ?>
                                    <br/> --------------------------------------------
                                    <br/><h4>TOTAL: <b class="font-bold">$<?php echo $ultimo[0]['efectivo_real']; ?></b></h4>
                                                  
                                </p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-12">
                    <div class="pull-left">
                    <address>
                                <h4> &nbsp;<b class="font-bold">Detalle de movimientos de caja</b></h4>
                            </address>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="table-responsive m-t-40" style="clear: both;">
                             <table class="table table-hover">
                                <thead>
                                    <tr style="font-size: 10px;"  >
                                        <th class="text-center">id</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Categoria</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Movimiento</th>
                                        <th class="text-center">Moneda</th>
                                        <th class="text-center">Importe</th>
                                    </tr>
                                </thead>
                                <tbody><?php foreach( $ultimo as $caja ): ?>
                                    <tr style="font-size: 10px;">
                                        <td class="text-center"><?php echo $caja['id_caja']; ?></td>
                                        <td class="text-center"><?php echo $caja['fechar']; ?></td>
                                        <td class="text-center"><?php echo $caja['category']; ?></td>
                                        <td class="text-center"><?php echo $caja['descripcion']; ?></td>
                                        <td class="text-center"><?php if($caja['movimiento']<>0){echo "ingreso";}else{echo "salida";} ?></td>
                                        <td class="text-center"><?php echo $caja['forma']; ?></td>
                                        <td class="text-center">$<?php echo $caja['importe']; ?></td>
                                    </tr>
                                   <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-left m-t-30 text-left">
                            <hr>
                            
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