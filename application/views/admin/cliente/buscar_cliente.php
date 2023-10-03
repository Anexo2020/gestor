
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

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Nueva Solicitud paso 1</h3>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">

                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">
            
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white"> Buscar Cliente</h4><span ><input type="text" id="buscarcli" name="buscarcli" class="form-control" placeholder="dni o apellido"></span> 

                </div>
                <div class="card-body">
                  <div  class="table-responsive m-t-10">
                        <table  class="display nowrap table-zero  table-striped table-bordered " cellspacing="0" width="100%" >
                            <thead>
                                <tr>
                                    <th>DNI</th>
                                    <th>APELLIDO Y NOMBRE</th>
                                    <th>DIRECCION</th>
                                    <th>SOLICITUD</th>
                                </tr>
                            </thead>
                            <tbody id="datos_cliente">

                            </tbody>  
                        </table>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>