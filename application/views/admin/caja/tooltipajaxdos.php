<?php



  $output = '

  <p><label>Tiene '.$datos[0]['cuotanumero'].' cuotas paga</label></p>
  <p><label>ultimo pago echo: '.date("d/m/Y", strtotime($ultimo[0]['ultimopago'])).'</label></p>
  <p><label>Impagas '.$impaga.' ya vencidas!!!</label></p>

  ';

 echo $output;
?>