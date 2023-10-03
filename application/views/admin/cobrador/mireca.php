<div class="table-responsive m-t-40 {-sm}">
    <div class="p-l-20">
        <div class="row ">
        <?php $ft=0; foreach($totalft as $efectivo){
        $ft = $efectivo->importe;
        echo "cobrado en efectivo: $".$ft;
        } ?>
        </div>
        <div class="row">
        <?php $mpago=0; foreach($totalmp as $mp){
        $mpago=$mp->importe;
        echo "cobrado con mercadopago:   $".$mpago;
        } ?> 
        </div>
        <div class="row"><b class="font-bold">
        <?php $total = $ft+$mpago; echo "cobrado en total: $".$total; ?></b>
        </div>
    </div>
    
   
                        <table id="example23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                 <tr>
                                    <th>importe</th>
                                    <th>cliente</th>
                                    <th>modo</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr><?php $totalefectivo = 0; $totalmercadopago=0; ?>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php  foreach ($pagos as $pago): ?>
                                
                                <tr>
                                    <td><?php echo "$".$pago['importe']; ?></td>
                                    <td><?php echo $pago['user_apellido']." ".$pago['user_name']; ?>
                                    </td>
                                    <td><?php echo $pago['modo']; ?></td>
                                </tr>
                            <?php  endforeach  ?>
                            </tbody>

                                 
                        </table>
                        <div class="align-items-start p-l-50"></div>
                    </div>