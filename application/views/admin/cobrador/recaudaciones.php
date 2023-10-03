<?php  $subtotal1=($efectivo[0]['importe']*0.06); ?>
<?php  $subtotal2=($mp[0]['importe']*0.04); ?>
<?php  $subtotal3=($disape[0]['importe']*0.06); ?>
<?php  $subtotal4=($disapmp[0]['importe']*0.04); ?>
<div class="col-md-12">
 <div  class="table-responsive m-t-40" style="clear: both;">

    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center">descripcion</th>
                <th class="text-right">Subtotales</th>
                <th>comisiones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th class="text-center"><span style="font-size: 25px" ><b class="font-bold">TOTAL</b></span></th>
                <th class="text-right"><span style="font-size: 25px" ><b class="font-bold">$<?php echo ($efectivo[0]['importe']+$mp[0]['importe']+$disape[0]['importe']+$disapmp[0]['importe']); ?></b></span></th>
                <th><?php echo $subtotal1+$subtotal2+$subtotal3+$subtotal4; ?></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Cobranza efectivo</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo $efectivo[0]['importe']; ?></span></td>
                <td><?php echo $subtotal1; ?></td>
            </tr>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Cobranza mercadopago</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo $mp[0]['importe']; ?></span></td>
                <td><?php echo $subtotal2; ?></td>
            </tr>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Cobranza disap efectivo</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo $disape[0]['importe']; ?></span></td>
                <td><?php echo $subtotal3; ?></td>
            </tr>
            <tr>
                <td class="text-center"><span style="font-size: 20px" >Cobranza disap mercadopago</span></td>
                <td class="text-right"><span style="font-size: 20px" >$<?php echo $disapmp[0]['importe']; ?></span></td>
                <td><?php echo $subtotal4; ?></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<div class="col-md-12">
    <div class="pull-right m-t-30 text-right">

        <hr>
        <h3><b>Total de Ventas ptf: $</b></h3>
    </div>
    <div class="clearfix" ></div>
    <hr>
    <div class="text-right">
        <button class="btn btn-danger" type="submit"> Proceed to payment </button>
        <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
    </div>
</div>