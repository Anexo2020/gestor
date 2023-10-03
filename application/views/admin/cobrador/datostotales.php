<div class="col-md-12">
 <div  class="table-responsive m-t-40" style="clear: both;">

    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center">descripcion</th>
                <th class="text-right">Subtotales</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th class="text-center"><span style="font-size: 25px" ><b class="font-bold">TOTAL</b></span></th>
                <th class="text-right"><span style="font-size: 25px" ><b class="font-bold">$<?php echo number_format(($disap[0]['importe']+$cobranza[0]['importe']+$anticipo[0]['importe']) , 0, ',','.'); ?></b></span></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Cobranza disap</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo number_format($disap[0]['importe'] , 0, ',','.'); ?></span></td>
            </tr>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Cobranza anexo</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo number_format($cobranza[0]['importe'] , 0, ',','.'); ?></span></td>
            </tr>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Anticipos</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo number_format($anticipo[0]['importe'] , 0, ',','.'); ?></span></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<div class="col-md-12">
    <div class="pull-right m-t-30 text-right">
        <p>Cantidad de solicitudes canceladas: <?php echo $cancelados; ?></p>
        <p>Cantidad de solicitudes rechazadas: <?php echo $rechazos; ?></p>
        <p>Cantidad de solicitudes entregadas: <?php echo $cantidad; ?></p>
        <p>Objetivo de venta por mes: $6.500.000</p>
        <p>Porcentaje de Objetivo Alcanzado (<?php echo number_format(($ventas[0]['cft']/6500000*100) , 2, ',', ' '); ?>%) </p>
        <hr>
        <h3><b>Total de Ventas ptf: $<?php echo number_format($ventas[0]['cft'] , 0, ',','.'); ?></b></h3>
    </div>
    <div class="clearfix" ></div>
    <hr>
    <div class="text-right">
        <button class="btn btn-danger" type="submit"> Proceed to payment </button>
        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
    </div>
</div>