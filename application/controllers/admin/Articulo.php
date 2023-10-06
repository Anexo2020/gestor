<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articulo extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
		$this->load->model('articulo_model');
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        //if($_POST){
        $data = array();
        $data['categorias'] = $this->common_model->select('categorias');
        $data['marcas'] = $this->articulo_model->select_marca('marcas');
        $data['unidades'] = $this->common_model->select('unidades');
        $data['tipos'] = $this->common_model->select('tipo');
        $data['caracteristicas'] = $this->common_model->select('caracteristica');
            $this->load->view('admin/articulos/add_articulo', $data);    
        //}
    }

    public function subcategoria()
    {
        if ($_POST) {

        $id = $_POST['id_categoria'];
        $data = array();
        $data['listado'] = $this->common_model->select_subcategoria($id,'subcategoria');
        $this->load->view('admin/articulos/subcategoria', $data);
        }
    }

    public function venta($id){
        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['lider'] = $this->articulo_model->select_lider($this->session->userdata('id'));
        $data['articulos'] = $this->articulo_model->listavend();
        $data['main_content'] = $this->load->view('admin/articulos/ventaform', $data, TRUE);    
        $this->load->view('admin/index2',$data);
    }

    public function compra(){
        $data['proveedores'] = $this->articulo_model->select_proveedor();
        $data['articulos'] = $this->articulo_model->all_list_art();
        $data['main_content'] = $this->load->view('admin/articulos/comprasform', $data, TRUE);    
        $this->load->view('admin/index2',$data);
    }

    public function comprado(){
        if ($_POST) {
            $proveedor = $_POST['proveedor'];
            $total = $_POST['total'];
            $fecha = $_POST['fecha'];
            $lafecha = date("Y-m-d", strtotime($fecha));
            $fc = $_POST['fc'];
            $descripcion = $_POST['descripcion'];
            $costo = $_POST['costo'];
            $cantidad = $_POST['cantidad'];
            $stock = $_POST['stock'];
            $id_articulo = $_POST['idart'];
            $modificar = $_POST['modifica'];
            $socio = $this->session->userdata('id');
            $data1 = array(
                'proveedor' => $proveedor,
                'total' => $total,
                'saldo' => $total,
                'fecha' => $lafecha,
                'fc' => $fc,
                'socio' => $socio
            );
            $data1 = $this->security->xss_clean($data1);
            $this->common_model->insert($data1,'compras');

            foreach( $costo as $key => $valor ) {
                $id = $id_articulo[$key];
                $desc= $descripcion[$key];
                $precio = $valor;
                $cant = $cantidad[$key];
                $modif = $modificar[$key];
                $stocka = $stock[$key];
                $nuevostock = $stocka+$cant;
                if($modif == 1){
                $data2 = array(
                        'costo' => $precio,
                        'stock' => $nuevostock
                        );
                }else{
                $data2 = array(
                        'stock' => $nuevostock
                        );
                }
                $data3 = array(
                        'fc' => $fc,
                        'precio_id' => $id,
                        'cantidad' => $cant,
                        'movimiento' => 1,
                        'fecha' => $lafecha,
                        'descripcion' => $desc,
                        'costo' => $precio*$cant
                        );
                $this->common_model->edit_option($data2, $id, 'precio_producto');
                $this->common_model->insert($data3,'stock');
            }
            redirect(base_url('admin/articulo/compra'));

        }
    }

    public function mostrar_articulos(){
        $data['imagenes'] = $this->articulo_model->get_art_imagen();
        $data['articulos'] = $this->articulo_model->all_list_art();
        $this->load->view('admin/articulos/lista_art', $data);
    }

    public function listaArticulosInd(){
            $data['articulos'] = $this->articulo_model->all_list_art();
            $data['main_content'] = $this->load->view('admin/articulos/lista_art',$data, TRUE);
            $this->load->view('admin/index',$data);    
    }

    public function listaAllProduct(){
            $data['articulos'] = $this->articulo_model->all_product();
            $data['main_content'] = $this->load->view('admin/articulos/lista_product',$data, TRUE);
            $this->load->view('admin/index',$data);    
    }

    public function listavendedores(){
        $data['imagenes'] = $this->articulo_model->get_art_imagen();
        $data['articulos'] = $this->articulo_model->listavend();
        $data['main_content'] = $this->load->view('admin/articulos/lista_artpv', $data, TRUE);
        $this->load->view('admin/index', $data);
   }

   public function listaVentasPendientes(){
            $data['ventas'] = $this->articulo_model->listaVentas(0);
            $data['main_content'] = $this->load->view('admin/articulos/listaventasp',$data, TRUE);
            $this->load->view('admin/index',$data);    
    }

    public function listaVentasEntregadas(){
            $data['ventas'] = $this->articulo_model->listaVentas(1);
            $data['main_content'] = $this->load->view('admin/articulos/listaventase',$data, TRUE);
            $this->load->view('admin/index',$data);    
    }

    public function listaVentasCanceladas(){
            $data['ventas'] = $this->articulo_model->listaVentas(3);
            $data['main_content'] = $this->load->view('admin/articulos/listaventase',$data, TRUE);
            $this->load->view('admin/index',$data);    
    }

    public function formImagArt($id)
    {
            $id = $this->security->xss_clean($id);
            $data['id_articulo'] = $id;
            $data['main_content'] =$this->load->view('admin/articulos/subir_imagen', $data, TRUE);
            $this->load->view('admin/index', $data);
    }

    public function modificar($id){
        
        $data['categorias'] = $this->common_model->select('categorias');
        $data['sucat'] = $this->common_model->select('subcategoria');
        $data['marcas'] = $this->articulo_model->select_marca('marcas');
        $data['unidades'] = $this->common_model->select('unidades');
        $data['tipos'] = $this->common_model->select('tipo');
        $data['caracteristicas'] = $this->common_model->select('caracteristica');
        $data['articulos'] = $this->articulo_model->selec_art($id);
        $data['main_content'] = $this->load->view('admin/articulos/edit_descnuevo', $data, TRUE);
        $this->load->view('admin/index',$data);
    }

    public function modificarDesc($id){
        
        $data['articulos'] = $this->articulo_model->selec_art($id);
        $data['main_content'] = $this->load->view('admin/articulos/edit_desc', $data, TRUE);
        $this->load->view('admin/index',$data);
    }

    public function anularventa(){
        if($_POST){
            $id = $_POST['idventa'];

            $data = array(
            'situacion' => 3
            );

            $this->common_model->edit_option($data, $id, 'ventas');
        }
    
    }

    public function modificara(){
        if($_POST)
        {
            $id = $_POST['id'];
             $data = array(
                'categoria' => $_POST['categoria'],
                'subcategoria' => $_POST['subcategoria'],
                'marca' => $_POST['marca'],
                'um' => $_POST['um'],
                'capacidad' => $_POST['capacidad'],
                'modelo' => $_POST['modelo'],
                'tipo' => $_POST['tipo'],
                'caracteristica' => $_POST['caracteristica'],
                'detalle' => strtoupper($_POST['detalle']),
                'accionamiento' => $_POST['accionamiento'],
                'ancho' => $_POST['ancho'],
                'largo' => $_POST['largo'],
                'alto' => $_POST['alto'],
                'descripcion' => strtoupper($_POST['descripcion']),
            );
            $data = $this->security->xss_clean($data);

        $this->articulo_model->edit_option($data,$id);
        
        $data['articulos'] = $this->articulo_model->all_product();
        $this->load->view('admin/articulos/lista_product', $data);
        }

    }

    public function modificarPp(){
        if($_POST)
        {
            $id = $_POST['id'];
             $data = array(
                'costo' => $_POST['costo'],
                'iva' => $_POST['iva'],
                'markm' => $_POST['markm'],
                'pvm' => $_POST['pvm'],
                'markup' => $_POST['markup'],
                'pvp' => $_POST['pvp'],
                'estado' => $_POST['estado']
            );
            $data = $this->security->xss_clean($data);

        $this->articulo_model->edit_option($data,$id);
        $data['imagenes'] = $this->articulo_model->get_art_imagen();
        $data['articulos'] = $this->articulo_model->all_list_art();
        $this->load->view('admin/articulos/lista_art', $data);
        }

    }


    public function getarticulos()
    {   
        $data = array();
        $data['articulos'] = $this->articulo_model->listavend();
        $this->load->view('admin/user/mi_selector_art', $data, );
    }


    public function insertararticulos(){

        if ($_POST) {

            $data = array(
                'categoria' => $_POST['categoria'],
                'subcategoria' => $_POST['subcategoria'],
                'marca' => $_POST['marca'],
                'um' => $_POST['um'],
                'capacidad' => $_POST['capacidad'],
                'modelo' => $_POST['modelo'],
                'tipo' => $_POST['tipo'],
                'caracteristica' => $_POST['caracteristica'],
                'detalle' => strtoupper($_POST['detalle']),
                'accionamiento' => $_POST['accionamiento'],
                'ancho' => $_POST['ancho'],
                'largo' => $_POST['largo'],
                'alto' => $_POST['alto'],
                'descripcion' => strtoupper($_POST['descripcion']),
                'costo' => $_POST['costo'],
                'iva' => $_POST['iva'],
                'markm' => $_POST['markm'],
                'pvm' => $_POST['pvm'],
                'markup' => $_POST['markup'],
                'pvp' => $_POST['pvp'],
                'estado' => $_POST['estado']
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insert($data);
            $data['articulos'] = $this->articulo_model->all_product();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }


   public function insertarCategoria(){

        if ($_POST) {
            $table = 'categorias';
            $data = array(
                'categoria' => $_POST['categoria']      
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insertdt($data, $table);
            $data['imagenes'] = $this->articulo_model->get_art_imagen();
            $data['articulos'] = $this->articulo_model->all_list_art();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }


   public function insertarSubcategoria(){

        if ($_POST) {
            $table = 'subcategoria';
            $data = array(
                'cat' => $_POST['categoria'],
                'subcategoria' => $_POST['subcategoria']        
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insertdt($data, $table);
            $data['imagenes'] = $this->articulo_model->get_art_imagen();
            $data['articulos'] = $this->articulo_model->all_list_art();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }

   public function insertarMarca(){

        if ($_POST) {
            $table = 'marcas';
            $data = array(
                'marca' => $_POST['marca']      
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insertdt($data, $table);
            $data['imagenes'] = $this->articulo_model->get_art_imagen();
            $data['articulos'] = $this->articulo_model->all_list_art();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }

   public function insertarUnidad(){

        if ($_POST) {
            $table = 'unidades';
            $data = array(
                'unidad' => $_POST['unidad']      
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insertdt($data, $table);
            $data['imagenes'] = $this->articulo_model->get_art_imagen();
            $data['articulos'] = $this->articulo_model->all_list_art();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }

   public function insertarTipo(){

        if ($_POST) {
            $table = 'tipo';
            $data = array(
                'tipo' => $_POST['tipo']      
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insertdt($data, $table);
            $data['imagenes'] = $this->articulo_model->get_art_imagen();
            $data['articulos'] = $this->articulo_model->all_list_art();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }

   public function insertarCaracteristica(){

        if ($_POST) {
            $table = 'caracteristica';
            $data = array(
                'caracteristica' => $_POST['caracteristica']      
            );
            $data = $this->security->xss_clean($data);
            $this->articulo_model->insertdt($data, $table);
            $data['imagenes'] = $this->articulo_model->get_art_imagen();
            $data['articulos'] = $this->articulo_model->all_list_art();
            $this->load->view('admin/articulos/lista_art', $data);

        }
    
   }


  ////////////////////////////////////////////
 ///cargar credito o venta nueva opcion /////
 ////////////////////////////////////////////
public function cargar_creditoVersion3()
    {

        if ($_POST) {    
            $idarticulo = $_POST['idart'];//viene en forma de array
            $articulos = $_POST['articulo'];//viene en forma de array
            $cantidades = $_POST['cantidad'];//viene en forma de array
            $costos = $_POST['costo'];//viene en forma de array
            $precio = $_POST['pvp'];//viene en forma de array
            $comision = $_POST['comision'];
            $socio = $this->session->userdata('socio');
            if(empty($articulos)){$condicionuno = 0;}else{$condicionuno = 1;}
            if(empty($cantidades)){$condiciondos = 0;}else{$condiciondos = 1;}
            if($condicionuno = 1 && $condiciondos = 1){
             
            if($_POST['cuotas']>100 && $_POST['credocont'] == 'credito'){

            $data = array(
                'user_id' => $_POST['user_id'],
                'anticipo' => $_POST['anticipo'],
                'plazo' => $_POST['plazo'],
                'cuota' => $_POST['cuotas'],
                'modo' => $_POST['condicion'],
                'creado' => current_datetime(),
                'cft' => $_POST['plazo']*$_POST['cuotas'],
                'vendedor' => $_POST['vendedor'],
                'verificado' => 'pendiente',
                'observaciones' => $_POST['observaciones'],
                'token' => $_POST['token'],
                'comision' => $_POST['comision'],
                'lider' => $_POST['lider'],
                'comlider' => $_POST['comilider'],
                'socio' => $socio
                                
            );
            $data = $this->security->xss_clean($data);

            //-- check doble insersion
            $check = $this->common_model->check_reinsert($_POST['user_id'],$_POST['token']);

            if ( empty($check)) {

            $credito_id = $this->common_model->insert($data, 'creditos');
            foreach( $articulos as $key => $articulo ) {

                $articulodesc = $articulo;
                $id_articulo = $idarticulo[$key];
                $costo = $costos[$key];
                $cantidad = $cantidades[$key];
                $costototal = $costo*$cantidad;

                $datast = array(
                        'id_articulo' => $id_articulo,
                        'cantidad' => $cantidad,
                        'movimiento' => 0,
                        'id_credito' => $credito_id,
                        'descripcion' => $articulodesc,
                        'costo' => $costototal
                        );
 
            $this->common_model->insert($datast, 'stock');
            
            }

        $data['articulos'] = $this->common_model->select_art_soli($credito_id);
        $data['localidad'] = $this->common_model->select('country');
        $data['referencia'] = $this->common_model->get_referencia($credito_id);
        $data['dato'] = $this->common_model->get_single_credito_row($credito_id); 
        $this->load->view('admin/pages/solicitudcel', $data);

        }}elseif(!isset($_POST['credocont']) && $_POST['plazo'] == 0){


            $utilidadbruta = $_POST['precioc']-$_POST['costototal']-$_POST['comision'];

            $data = array(
                'user' => $_POST['user_id'],
                'total' => $_POST['precioc'],
                'costo' => $_POST['costototal'],
                'pvts' => $_POST['pvts'],
                'fecha' => current_datetime(),
                'vendedor' => $_POST['vendedor'],
                'observacion' => $_POST['observaciones'],
                'token' => $_POST['token'],
                'comision' => $_POST['comision'],
                'utilidadbruta' => $utilidadbruta,
                'lider' => $_POST['lider'],
                'comlider' => $_POST['comilider'],
                'socio' => $socio
                                
            );
            $data = $this->security->xss_clean($data);

            //-- check doble insersion
            $check = $this->common_model->check_reinsert_venta($_POST['user_id'],$_POST['token']);

            if ( empty($check)) {

            $venta = $this->common_model->insert($data, 'ventas');
            foreach( $articulos as $key => $articulo ) {

                $articulodesc = $articulo;
                $id_articulo = $idarticulo[$key];
                $costo = $costos[$key];
                $cantidad = $cantidades[$key];
                $pvp = $precio[$key];
                $costototal = $costo*$cantidad;

                $datast = array(
                        'id_articulo' => $id_articulo,
                        'cantidad' => $cantidad,
                        'movimiento' => 0,
                        'venta' => $venta,
                        'descripcion' => $articulodesc,
                        'costo' => $costototal,
                        'pvp' => $pvp
                        );
 
            $this->common_model->insert($datast, 'stock');
            
            }
            $data['apertura'] = $this->common_model->select('apertura_de_caja');
            $data['venta'] = $this->common_model->get_venta_info($venta);
            $data['productos'] = $this->articulo_model->select_option($venta, 'stock');
            $this->load->view('admin/articulos/comprobante', $data);

        }}
        }
    }

        
    }
    /////////////////////////////////////
    public function VerComprobante($id){
        $data['apertura'] = $this->common_model->select('apertura_de_caja');
        $data['venta'] = $this->common_model->get_venta_info($id);
        $data['productos'] = $this->articulo_model->select_option($id, 'stock');
        $this->load->view('admin/articulos/comprobante', $data);
    }
    /////////////////////////////////////

    ////////////////////////////////////
    ///insertar pago de venta contado///
    ////////////////////////////////////
    public function insertar_pago_contado()
    {
        $resultado = 0;
        if (isset($_POST)) {

            $id = $_POST['idventa'];
            $user = $_POST['iduser'];
            $cobrador = $_POST['cobrador'];
            $vendedor = $_POST['vendedor'];
            $comision = $_POST['comision'];
            $lider = $_POST['lider'];
            $comlider = $_POST['comlider'];
            $importe = $_POST['importe'];
            $entregado = current_datetime();
            $modo = $_POST['modo'];
            $token = $_POST['token'];
            $articulos_id = $_POST['id_articulo'];
            $cantidades = $_POST['cantidad'];

            $data = array(
                'fecha' => $entregado,
                'importe' => $importe,
                'idventa' => $id,
                'cobrador' => $cobrador,
                'user_id' => $user,
                'modo' => $modo,
                'token' => $token                  
            );
            $datacom = array(
                'idventa' => $id,
                'iduser' => $vendedor,
                'comision' => $comision
            );
            $datacomlider = array(
                'idventa' => $id,
                'iduser' => $lider,
                'comision' => $comlider
            );
            /*
            $dataCaja = array(
                'descripcion' => 'venta contado',
                'segmento' => 15,    
                'segmento' => 15,
                'usuario' => $cobrador,
                'fecha' => $entregado,
                'importe' => $importe,
                'movimiento' => 1,
                'forma' => $modo,
                'cobrador' => $cobrador,
                'cobrado' => $entregado,

            );*/

            $data = $this->security->xss_clean($data);
            //-- check doble insersion
            $check = $this->common_model->check_reinsert_cobro($id);
            foreach($check as $prueba){
                $resultado = $prueba['token']+300;
            }
            if($resultado < $token){

            $insertok = $this->common_model->insert($data, 'pagos');

            $dataVta = array(
                'entregado' => $entregado,
                'situacion' => 1,                
            );
            $datastock = array(
                'fecha' => $entregado,
                );

            foreach($articulos_id as $key => $id_articulo){
                $cantidad = $cantidades[$key];

                $articulosmod = array();
                $articulosmod = $this->common_model->select_option2($id_articulo, 'articulos');
                $stocka = $articulosmod->stock;
                $nuevostock = $stocka-$cantidad;

                 $data2 = array(
                'stock' => $nuevostock,
                );
                 
                $this->common_model->edit_option($data2, $id_articulo, 'articulos');
                
            }
            $this->common_model->actualizarFechStockCdo($datastock, $id);
            $this->common_model->edit_option($dataVta, $id, 'ventas');
            //$this->common_model->insert($dataCaja,'caja');
            $this->common_model->insert($datacom,'comisionesxventa');
            if($lider<>0){
                $this->common_model->insert($datacomlider,'comisionesxventa');
            }
            
        }
        $data['cobro'] = $this->common_model->get_cobrador_recibo_b($insertok);
        $data['pagos'] = $this->common_model->select_pago($insertok); 
        $this->load->view('admin/user/recibo', $data);
        }
        

    }

    /////////////////////////////////////////
    ///fin insertar pago de venta contado////
    /////////////////////////////////////////

   //-- subir y redimensionar imagen
     public function nuevaimagen()
    {   
                $id = $_POST['id'];
                    
                $config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5000;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                 $this->load->library('upload', $config);
                 
                 $files = $_FILES;
                 $cpt = count($_FILES['files']['name']);
                 for($i=0; $i<$cpt; $i++)
                 {           
                    $_FILES['files']['name']= $files['files']['name'][$i];
                    $_FILES['files']['type']= $files['files']['type'][$i];
                    $_FILES['files']['tmp_name']= $files['files']['tmp_name'][$i];
                    $_FILES['files']['error']= $files['files']['error'][$i];
                    $_FILES['files']['size']= $files['files']['size'][$i];    

                if ( ! $this->upload->do_upload('files'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/form/form_upfile', $error);
                }
                else
                {       //$data = array('upload_data' => $this->upload->data());
                        $data = $this->upload->data();
                        
                //-- set upload path
                $source             = "./assets/images/".$data['file_name'] ;
                $destination_thumb  = "./assets/images/thumb_articulos/" ;
                $destination_medium = "./assets/images/articulos/" ;
                $main_img = $data['file_name'];
                // Permission Configuration
                chmod($source, 0777) ;

                /* Resizing Processing */
                // Configuration Of Image Manipulation :: Static
                $this->load->library('image_lib') ;
                $img['image_library'] = 'GD2';
                $img['create_thumb']  = TRUE;
                $img['maintain_ratio']= TRUE;

                /// Limit Width Resize
                $max_size = 2000;
                $limit_medium   = $max_size ;
                $limit_thumb    = 200 ;

                // Size Image Limit was using (LIMIT TOP)
                $limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;

                // Percentase Resize
                if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
                    $percent_medium = $limit_medium/$limit_use ;
                    $percent_thumb  = $limit_thumb/$limit_use ;
                }

                //// Making THUMBNAIL ///////
                $img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
                $img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_thumb-' ;
                $img['quality']      = ' 100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_thumb ;

                $thumb_nail = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                ////// Making MEDIUM /////////////
                $img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
                $img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;

                // Configuration Of Image Manipulation :: Dynamic
                $img['thumb_marker'] = '_medium-' ;
                $img['quality']      = '100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_medium ;

                $mid = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                //-- set upload path
                $images = 'assets/images/thumb_articulos/'.$mid;
                $thumb  = 'assets/images/articulos/'.$thumb_nail;
                unlink($source) ;

                        $data = array(
                            'id_articulo' => $id, 
                            'name' => $mid,
                            'thumb_name' => $thumb_nail
                            );
                        $this->common_model->insert($data, 'imagen_articulos');
                        
                }
            }
            redirect(base_url() . "admin/articulo/listaArticulosInd");
    }


////////////////////////////////////////////////////////////////////////

}