<div class="table-responsive m-t-40 {-sm}">
    <div class="p-b-20">
        <div class="row ">
            <div class="col-lg-5">
        <?php  echo "total efectivo: $".$totalft[0]->importe; ?>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
        <?php  echo "total mercadopago:   $".$totalmp[0]->importe;  ?> 
            </div>
        </div>
        <div class="row">
        <div class="col-lg-5">
           <?php $total = $totalft[0]->importe+$totalmp[0]->importe; echo "total: $".$total;
            ?> 
        </div>
        
        <div class="col-lg-7 text-center">
        <form method="post" action="<?php echo base_url('admin/caja/cobranza') ?>" class="form-horizontal" novalidate>
            <input type="hidden" name="subcategory[]" value="<?php echo $cobrador[0]['first_name']; ?>">
            <input type="hidden" name="importe[]" value="<?php echo $totalft[0]->importe; ?>">

            <input type="hidden" name="forma[]" value="efectivo">

            <input type="hidden" name="cobrador[]" value="<?php echo $cobrador[0]['id']; ?>">

            <input type="hidden" name="cobrado[]" value="<?php echo $date; ?>">

            <input type="hidden" name="subcategory[]" value="<?php echo $cobrador[0]['first_name']; ?>">
            <input type="hidden" name="importe[]" value="<?php echo $totalmp[0]->importe; ?>">

            <input type="hidden" name="forma[]" value="mercadopago">

            <input type="hidden" name="cobrador[]" value="<?php echo $cobrador[0]['id']; ?>">

            <input type="hidden" name="cobrado[]" value="<?php echo $date; ?>">
            <!-- CSRF token -->
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            <?php if(empty($chequeo)&&$apertura[0]['usuario']==$this->session->userdata('id')): ?>

            <button type="submit" class="btn btn-success">Ingresar a caja</button>
            <?php endif ?>
        </form>
        </div>
        </div>
        
    </div>
    
   
                        <table id="example23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                 <tr>
                                    <th>N°</th>
                                    <th>importe</th>
                                    <th>vence</th>
                                    <th>paga</th>
                                    <th>recibo</th>
                                    <th>modo</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr><?php $totalefectivo = 0; $totalmercadopago=0; ?>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php  foreach ($pagos as $pago): ?>
                                
                                <tr>
                                    <td><?php echo $pago['idcredito']; ?></td>
                                    <td><?php echo "$".$pago['importe']; ?></td>
                                    <td><?php $newDate = date("d/m/Y", strtotime($pago['fecha']));
                                        echo $newDate; ?></td>
                                    <td><?php echo $pago['user_apellido']." ".$pago['user_name']; ?>
                                    </td>
                                    <td><?php echo $pago['idpago']; ?></td>
                                    <td><?php echo $pago['modo']; ?></td>
                                </tr>
                            <?php  endforeach  ?>
                            </tbody>

                                 
                        </table>
                        <div class="align-items-start p-l-50"></div>
                    </div>