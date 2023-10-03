

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Articulos</h3>
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

        

            <div class="card">

                <div class="card-body">

                           

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table  table-striped table-bordered " cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Categoria</th>
                                    <th>Marca</th>
                                    <th>Descripcion</th>
                                    <th>Acciona</th>
                                    <th>Modelo</th>
                                    <th>Precio</th>

                                    
                                </tr>
                            </thead>
                            
                            
                            <tbody>
                            <?php foreach ($articulos as $articulo): ?>
                            <?php $pvp = $articulo['pvp']; ?>    
                                <tr>
                                    <td><?php
                                        $imgpr = "";
                                        $imagmodal = "";
                                        foreach($imagenes as $key => $imagen){

                                            if($imagen['id_articulo'] == $articulo['id']){
                                                $thum = $imagen['thumb_name'];
                                                $image = $imagen['name'];
                                                $imgpr = "<img class='thumb-art-md' src='https://anexo.com.ar/app/assets/images/thumb_articulos/".$thum."' alt='Card image cap'>";
                                                $imagmodal = "<img src='https://anexo.com.ar/app/assets/images/articulos/".$image."' alt='default' width='120px'>";
                                            }/*else{
                                                $imgpr[$key] = $imagen['id_articulo'];
                                            }*/
                                        }
                                        ?>
                                        <?php echo $imgpr; ?>
                                    </td>
                                    <td><?php echo $articulo['categoria']; ?></td>
                                    <td><?php echo $articulo['marca']; ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#ArtModal" data-titulo="<?php echo $articulo['descripcion']; ?>" data-imagen="<?php echo $imagmodal;  ?>" data-anti="0"  data-pvp="<?php echo $pvp; ?>"><?php echo $articulo['descripcion']; ?></a>&nbsp<?php echo (int)$articulo['capacidad']." ".$articulo['unidad']; ?>
                                    </td>
                                    <td><?php echo $articulo['accionamiento']; ?></td>
                                    <td><?php echo $articulo['modelo']; ?></td>
                                    <td>$<?php echo number_format($articulo['pvp'] , 0, ',','.'); ?></td>

                                    

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
    <!-- sample modal content -------------------------------------------------->
                    <div id="ArtModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ArtModal" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="ArtModalLabel">Ttitulo: </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <h4>Caracteristicas del Articulo</h4>
                                    <p>En breve en estas lineas estaran las caracteristicas del articulo seleccionado, gracias!!!!</p>
                                    <p>Aqui puedes calcular el plan segun tu necesidad</p><form >
                                    <div class="row">
                                    <div id="imagen" class="col-6">
                                    </div>
                                    <div class="col-6" >
                                        <label>Anticipo</label>
                                        <input type="number" class="form-control" name="anticipo" id="anticipo" value="">
                                        <select class="form-control custom-select"  name="condicion" id="condicion">
                                            <option value="semanal">semanal</option>
                                            <option value="quincenal">quincenal</option>
                                            <option value="mensual">mensual</option>
                                        </select>
                                       <br/> <input type="number" name="cuotas" id="cuotas" class="form-control" min="1" max="40" placeholder="0 cuotas">
   
                                        <hr>
                                        <span id="Anticipode"></span>
                                        </br><span id="plazo"></span><span id="total"class="font-bold"></span>
                                    </div>
                                    </div></form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info waves-effect" id="calcular">Calcular</button>
                                </div>
                            </div>
                            <!-- /.modal-content ----------------------------------------------->

                        </div>

                    </div>
<script>
$('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

</script>

