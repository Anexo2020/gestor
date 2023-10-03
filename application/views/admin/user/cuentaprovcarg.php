
<div class="table-responsive m-t-10">
	<table  class="display nowrap table-zero  table-striped table-bordered " cellspacing="0" width="100%"> 
        <thead>
            <tr>
                <th>Proveedor</th>
                <th>Fecha</th>
                <th>Comprobante</th>
                <th>Compra</th>
                <th>FechaP</th>
                <th>Pago</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
        	<?php $pagoacumulado = 0; ?>
        	<?php $saldoacumulado = 0; $depur = array(); ?>
        	<?php  foreach($CompyPagos as $otro): ?>
        	<?php  $depur[] = $otro['fc'];?>
        	<?php  endforeach ?>
        	<?php  $unicos = array_unique($depur); ?>
        	<?php foreach($CompyPagos as $key => $pagosyc): ?>
        	<?php if($pagosyc['id_proveedorP'] == $pagosyc['proveedor']){$ipago = $pagosyc['pago']; }else{$ipago = 0;}?>
        	<?php $pagoacumulado += $ipago; ?>
        	<?php if(!empty($unicos[$key])){$saldoacumulado += $pagosyc['total']; $total='$'.$pagosyc['total'];}else{$total='';} ?>
        	
        	<tr>
        		<td><?php echo $pagosyc['proveedorName']; ?></td>
        		<td><?php echo $pagosyc['fecha']; ?></td>
        		<td><?php echo $pagosyc['fc']; ?></td>
        		<td><?php echo $total; ?></td>
        		<td><?php echo $pagosyc['fecha_pago']; ?></td>
        		<td><?php echo $ipago; ?></td>
        		<td>$<?php echo $saldoacumulado-$pagoacumulado; ?></td>
        	</tr>

        	<?php endforeach ?>
        </tbody>
</div>