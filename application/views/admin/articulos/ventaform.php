

<div class="container-fluid" style="padding-top: 1px;">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row" style="margin-top: 10px;">
        <div class="col-12" style="padding-right: 5px; padding-left: 5px">
            <div class="card">
                <div class="card-body" style="padding: 0.25rem" >

                    <div class="table-responsive m-t-40" style="margin-top: -21px;">
                        <table id="forv" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>descripcion</th>
                                    <th>PVP</th>
                                    <th style="visibility: hidden; width: 4px; font-size: 0px;">costo</th>
                                    <th>stock</th> 
                                    <th style="visibility: hidden; hidden; width: 4px; font-size: 0px;">pvm</th>                      
                                </tr>
                            </thead>
                            <tbody>
                            <?php $c = 0;  foreach ($articulos as $articulo): ?>
                                <tr>
                                    <td><?php echo $articulo['id']; ?></td>
                                    <td><?php echo $articulo['descripcion'].' '.$articulo['marca'].' '.$articulo['modelo'].' '.(int)$articulo['capacidad']." ".$articulo['unidad']; ?></td>
                                    <td><?php echo $articulo['pvp']; ?></td>
                                    <td style="visibility: hidden; width: 4px; font-size: 0px;" ><?php echo $articulo['costo'];  ?></td>
                                    <td><?php echo $articulo['stock']; ?></td>
                                    <td style="visibility: hidden; width: 4px; font-size: 0px;"><?php echo $articulo['pvm']; ?></td>
                                </tr>
                            <?php  endforeach  ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> NUEVA VENTA
                </div>
                <div class="card-body" style="padding: 0.25rem">
                     
                    <div class="row" style="height: 60px;">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Cliente: </label>
                                        <div class="col-md-9 controls">
                                           <div class="form-group">
                                               <span><?php echo $user->last_name.' '.$user->first_name; ?></span> </div>
                                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user->id; ?>">
                                    <input type="hidden" name="vendedor" id="vendedor" value="<?php echo $this->session->userdata('id'); ?>">
                                    <input type="hidden" name="token" id="token" value="<?php $r = time(); 
                                            $rest = substr($r,-5);
                                            $tok = substr($r, 0, -3);
                                            if($rest>99699){
                                                $token_s=$tok+1;
                                            }else{
                                                $token_s=$tok;
                                            }
                                            echo $token_s; ?>">
                                        </div>
                            
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
 
                        
                        <div class="col-md-12 " id="titulos"  style="
                            margin-bottom: 0em;
                            padding-bottom: 0em;
                            padding-left: 0em;
                            background-color: #f6f6f6;
                            border: 1px solid #999;
                            border-radius: 0px;
                            height: 27px;
                            text-align: center;
                            ">
                            <div class="row">
                            <div class="col-md-12" >
                                <span style="float: left; width: 55%">PRODUCTO</span>
                                <span style="float: left; width: 15%">CAN</span>
                                <span style="float: left; width: 30%">SUBTOTAL</span>
                            </div>
                            </div>   
                            </div>
                        
                        <div id="eventos"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 0em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;
                            height: 270px;">
                             
                        </div>

                        
                        <div class="col-md-12 " id="opcioncontent"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="checkbox checkbox-success">
                                        <input id="creditoc" name="creditoc"  type="checkbox" value="credito" onclick="CalcularComision()" onchange="javascript:showCredForm()">
                                        <label for="creditoc"> Credito </label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        </div>
                        <div class="col-md-12 " id="contadocontent"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Total:</label>
                                        <input type="number" name="preciof" id="preciof" value="0"  disabled onchange="CalcularComision()">
                                        <input type="hidden" name="preciofpvm" id="preciofpvm" value="">
                                        <input type="hidden" name="pvts" id="pvts" value="">
                                        <input type="hidden" name="Costoacumulado" id="Costoacumulado" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-success fa fa-check" onclick="document.getElementById('preciof').disabled = false"> Modificar</button>
                                    </div>
                                </div>
                                
                                <!--/span-->
                                </div>
                        </div>
                        <div class="col-md-12 " id="credcontent"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;
                            display: none;">
                            <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="condicion" type="radio" value="mensual" class="custom-control-input" onclick="VerAnticipo()" checked >
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Mensual</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="condicion" type="radio" value="quincenal" class="custom-control-input" onclick="VerAnticipo()" >
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Quincenal</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio3" name="condicion" type="radio" value="semanal" class="custom-control-input">
                                                <span class="custom-control-indicator" onclick="VerAnticipo()" ></span>
                                                <span class="custom-control-description">Semanal</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio4" name="condicion" type="radio" value="diario" class="custom-control-input">
                                                <span class="custom-control-indicator" onclick="VerAnticipo()" ></span>
                                                <span class="custom-control-description">Diario</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                                     <div class="col-md-12" id="showanticipo" style="display: none;" >
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">anticipo</label>
                                            <div class="col-md-9 controls">
                                                <input type="number" name="anticipo" id="anticipo" value="0" style="width: 100%" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">cuotas </label>
                                            <div class="col-md-9 controls">
                                                <input type="number" name="cuotas" id="cuotas" value="" style="width: 100%" oninput="CalcularPlan()" >
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                            

                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">de</label>
                                        <div class="col-md-9 controls">
                                        <input type="text" name="importecuota" id="importecuota" value="0" style="width: 100%"  disabled>
                                        </div>
                                    </div>
                                </div>
                                 
                                <!--/span-->
                                </div>
                        </div>
                        <!--/span-->
                        <div id="showobservacion" class="col-md-12" style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;
                            display: none;" >
                           <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group row">
                                <label class="control-label text-right col-md-3">Observacion </label>
                                <div class="col-md-9 controls">
                                    <input type="textarea" name="bservacion" id="observacion" value="" style="width: 100%" >
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-12 " id="eventosa"  style="
                            margin-bottom: 0em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-radius: 0px;
                            height: 65px;">

                            <?php if(isset($lider->vendedor)){$leader=$lider->lider;}else{$leader=0;} ?>
                            <input type="hidden" name="comision" id="comision" value="">
                            <input type="hidden" name="lider" id="lider" value="<?php echo $leader; ?>" >
                            <input type="hidden" name="comlider" id="comlider" value="">
                            <p class="float-left" style="font-size: 75%;">Comision:  <span id="comapag">0</span></p>     
                            <p class="float-right" style="padding-right: 2em; font-size: 150%;">TOTAL:  <span id="total">0</span></p>

                        </div>
                        <div class="col-md-12 " id="eventosb"  style="
                            margin-bottom: 1em;
                            padding-top: 0em;
                            padding-left: 1em;
                            background-color: #f6f6f6;
                            border-left: 1px solid #999;
                            border-right: 1px solid #999;
                            border-bottom: 1px solid #999;
                            border-radius: 0px;
                            height: 60px;">
                                <button onclick="MostrarObse()" id="btnsob" class="float-left btn btn-success ">Observacion</button>
                                <button onclick="OcultarObse()" id="btnoob" class="float-left btn btn-success " style="display: none;" >Ocultar Obser</button>
                                
                                <button onclick="NuevaVentaC()" class="float-right btn btn-success ">Cargar</button>
                                </div>
                    


                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>
<script type="text/javascript">
    
    function CalcularComision(){
    var coefdecomven;
    var coefdecomlid;
    var checkBox = document.getElementById("creditoc");
    var lider = document.getElementById("lider");
    var comlider;

    if ( checkBox.checked == true ) { 

        var p2 = $('#Costoacumulado').val();
        var Plid = $('#lider').val();
           if (Plid == 0) {
                coefdecomven = 1;
                coefdecomlid = 0;
            }else{
                coefdecomven = 0.9;
                coefdecomlid = 0.1;
            }
        var comcre = p2*0.0525*coefdecomven;
        comlider = p2*0.0525**coefdecomlid;

        const valo = comcre

            const pesos = currencyFormatter({
              currency: "USD",
              valo
            })

        document.getElementById('comision').value = comcre;
        document.getElementById('comlider').value = comlider;
        $("#comapag").text(pesos);

        }else{
           var p1 = $('#preciof').val();
           var p2 = $('#Costoacumulado').val();
           var Plid = $('#lider').val();
           if (Plid == 0) {
                coefdecomven = 0.15;
                coefdecomlid = 0;
            }else{
                coefdecomven = 0.135;
                coefdecomlid = 0.015;
            }
           var util = (p1-p2)*coefdecomven;
           comlider = (p1-p2)*coefdecomlid;
           
           const valo = util

            const pesos = currencyFormatter({
              currency: "USD",
              valo
            })

           document.getElementById('comision').value = util;
           document.getElementById('comlider').value = comlider;
           $("#comapag").text(pesos);

           console.log(pesos);

           const input = document.getElementById('preciof');
           var pl1 = $('#preciofpvm').val();
           const check = () => {
           if (!input.validity.valid) input.value = pl1;
           if (+input.value < pl1) input.value = pl1;
        };

        input.addEventListener('input', check);
        }
    }

////////////////////////////////////////////////////////////////
    
    function VerAnticipo() {

        element = document.getElementById("showanticipo");
        check = document.getElementById("radio1");
        if (check.checked) {
            element.style.display='none';
            document.getElementById("anticipo").value = 0;
        }
        else {
            element.style.display='block';

        }
    }
////////////////////////////////////////////////////////////////
    function CalcularPlan(){ 

        var cuotas;
        var Pl = $("#cuotas").val();
        var anti = $("#anticipo").val();
        var pvp = $('#preciof').val();
        var condicion =  $('input[name="condicion"]:checked').val();
            console.log(condicion);
        var tasa
        var condi;
        var error;
        

        if(condicion == 'semanal' && Pl < 17){cuotas = $("#cuotas").val(); tasa = 3; condi = 'semanas'}else if(condicion == 'quincenal' && Pl < 9){cuotas = $("#cuotas").val(); tasa = 6; condi = 'quincenas'}else if(condicion == 'mensual' && Pl < 4){cuotas = $("#cuotas").val(); tasa = 8; anti = 0; $("#anticipo").val(0); condi = 'meses'}else if(condicion == 'diario' && Pl < 97){cuotas = $("#cuotas").val(); tasa = 0.5; anti = 0; $("#anticipo").val(0); condi = 'dias'}else{cuotas = 987;}

       var m1 = cuotas;
       var m2 = pvp-anti;
       var rpp = m2 * ((((m1*tasa)/100)+1)/m1);
       var entero = rpp.toFixed();

       var alerta2;

       if(anti < entero*2 && anti != 0){ 

        alerta2 = '¡POCO ANTICIPO! debe ser 0 ó mayor';
        mialerta(alerta2); 
        document.getElementById('importecuota').value = 0;
    }else{

       if(cuotas != 987 ){
    document.getElementById('importecuota').value = entero;

    }else{
        alerta2 = '¡DEMASIADAS CUOTAS!';
        mialerta(alerta2); 
        document.getElementById('importecuota').value = 0;
        
       }
   }
};
   function mialerta(alerta2){  
            alert(alerta2);
        } 

</script>
