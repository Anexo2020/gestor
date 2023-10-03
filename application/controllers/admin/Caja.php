<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Caja extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
		$this->load->model('common_model');
        $this->load->model('cobranza_model');
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
    }

    // ..............
    public function index()
    {   
        if ($_POST) {

            $data = array(
                'descripcion' => $_POST['descripcion'],
                'rubro' => $_POST['rubro']
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate item
            $check = $this->common_model->check_exist_item($_POST['descripcion']);

            if (empty($check)) {
                $user_id = $this->common_model->insert($data, 'lista_gastos');

                $this->session->set_flashdata('msg', 'Item Creado Exitosamente');
               redirect(base_url() . "admin/dashboard/add_descripcion_gasto");
            } else {
                $this->session->set_flashdata('error_msg', 'este item ya existe');
                redirect(base_url('admin/dashboard/add_descripcion_gasto'));
            } 

        }
        $data = array();
        $data['sumft'] = $this->common_model->suma_caja_e_hoy();
        $data['resft'] = $this->common_model->resta_caja_e_hoy();
        $data['summp'] = $this->common_model->suma_caja_m_hoy();
        $data['resmp'] = $this->common_model->resta_caja_m_hoy();
        $data['rubro'] = $this->common_model->select_rubro('rubros_gastos');
        $data['caja'] = $this->common_model->select_caja('caja');
        $data['saldo'] = $this->common_model->ultimo_cierre();
        $data['apertura'] = $this->common_model->select_apertura('apertura_de_caja');
        $data['main_content'] = $this->load->view('admin/user/caja_diaria', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function subcategory()
    {
        if ($_POST) {

  
        $id = $_POST['id_category'];
        $data = array();
        $data['listado'] = $this->common_model->select_categoria($id,'lista_gastos');
        $this->load->view('admin/caja/subcategory', $data);
        }
    }

    public function prov()
    {
        $data = array();
        $this->load->view('admin/caja/fact', $data); 
        
    }

    public function provcarga()
    {   
        if ( $_POST['id_categorypro']){
            $id = $_POST['id_categorypro'];
        $data = array();
        $data['listado'] = $this->common_model->select_compras($id);    
        $this->load->view('admin/caja/selectcompras', $data); 
        }
        
        
    }

    public function apertura()
    {
        $socio = $this->session->userdata('socio');
        if ( $_POST['usuario']==$this->session->userdata('id'))
        { 
        $data = array(
                'usuario' => $this->session->userdata('id')
            );
        $this->common_model->update_var($data,$socio,'apertura_de_caja', 'socio');
        redirect(base_url() . "admin/caja");
        }
    }

    public function cierre()
    {   
        $socio = $this->session->userdata('socio');
        $item = 0;
        if ( $_POST['usuario']==$this->session->userdata('id'))
        {
            $datac = array(
                'fecha' => date('Y-m-d'),
                'hora' => time(),
                'usuario' => $this->session->userdata('id'),
                'efectivo_c' => $_POST['efectivoc'],
                'efectivo_real' => $_POST['efectivo_real'],
                'mercadopago' => $_POST['mercadopago'],
                'mil' => $_POST['mil'],
                'quinientos' => $_POST['quinientos'],
                'doscientos' => $_POST['doscientos'],
                'cien' => $_POST['cien'],
                'cincuenta' => $_POST['cincuenta'],
                'veinte' => $_POST['veinte'],
                'diez' => $_POST['diez'],
                'monedas' => $_POST['monedas'],
                'socio' => $this->session->userdata('socio')
                );
            $cierre = $this->common_model->insert($datac, 'cierres_de_caja');

            $data = array(
                'usuario' => 0
                );

            $item = $_POST['item'];
            if($item>0)
            {
                foreach( $item as $key => $valor )
                {              
                    $datae = array(
                            'cerrada' => $cierre
                            ); 
                $this->common_model->edit_option($datae,$valor,'caja');    
                }
            }


            $this->common_model->update_var($data,$socio,'apertura_de_caja', 'socio');
            redirect(base_url() . 'admin/caja/cierre_print/'.$cierre);
        }
    }

    //impresion recibo de cierre de caja
    public function cierre_print($id){

        $data['ultimo'] = $this->common_model->last_cierre($id);
        $data['main_content'] = $this->load->view('admin/caja/cierrecaja', $data, TRUE);
        $this->load->view('admin/index', $data);

    }

    public function editarmovimiento(){
        if($_POST['id']){
            $id = $_POST['id'];
            $movimiento = $_POST['movimiento'];
            $importe = $_POST['importe'];
        $data = array(
                            'movimiento' => $movimiento,
                            'importe' => $importe
                            );
        $data = $this->security->xss_clean($data);
        $this->common_model->edit_option($data,$id,'caja');

        //if($movimiento<>0){echo $movimiento = "ingreso";}else{echo $movimiento = "salida";}
        $datos = array(
        'importe' => $importe,
        'movimiento' => $movimiento
        );
        $this->output
        ->set_content_type('application/json') //set Json header
        ->set_output(json_encode($datos));// make output json encoded

    }
    }

    //listado de cierres de caja
    public function cierre_listado(){

        $data['lista'] = $this->common_model->select('cierres_de_caja');
        $data['main_content'] = $this->load->view('admin/caja/lista_cierres', $data, TRUE);
        $this->load->view('admin/index', $data);

    }

    public function filtrocaja()
    {

      
        $data = array();
        $data['rubro'] = $this->common_model->select('rubros_gastos');
        $data['main_content'] = $this->load->view('admin/caja/detalle', $data, TRUE);
        $this->load->view('admin/index', $data);

    }

    public function filtrocajas()
    {

        if ($_POST) {
            $IdAndDescripcion = explode("-", $_POST['descripcion']);

            $descripcion = $IdAndDescripcion[1];
            $id_desc = $IdAndDescripcion[0];

            $rubro = $_POST['rubro'];
            $fecha1 = $_POST['desde'];
            $lafecha1 = date("Y/m/d", strtotime($fecha1));
            $desde = str_replace("/", "-", $lafecha1);
            $fecha2 = $_POST['hasta'];
            $lafecha2 = date("Y/m/d", strtotime($fecha2));
            $hasta = str_replace("/", "-", $lafecha2);


        $data['caja'] = $this->common_model->filtro_caja($desde,$hasta,$descripcion,$rubro);
        $data['suma'] = $this->common_model->filtro_caja_suma($desde,$hasta,$descripcion,$rubro);
        $data['rubro'] = $this->common_model->select('rubros_gastos');
        $data['main_content'] = $this->load->view('admin/caja/detallefiltro', $data, TRUE);
        $this->load->view('admin/index', $data);
            

        }
    }

    public function salida()
    {
        if ($_POST) {

            $IdAndDescripcion = explode("-", $_POST['subcategory']);
            $descripcion = $IdAndDescripcion[1];
            $id_proveedor = $IdAndDescripcion[0];
        
            $token = $_POST['token'];
            $importe = $_POST['importe'];
            $rubro = $_POST['rubro'];
            $nota = $_POST['nota'];
            /////////////////////////////
            //-- check doble insersion
            $check = $this->common_model->check_reinsert_caja();
            foreach($check as $prueba){
                $resultado = $prueba['token']+2;
            }
            if($resultado < $token){
            /////////////////////////////
            if ($_POST['subcategorypro']) {

                $FcAndSaldo = explode("-", $_POST['subcategorypro']);
                $id = $FcAndSaldo[0];
                $fc = $FcAndSaldo[1];
                $saldo = $FcAndSaldo[2];
                $nuevosaldo = $saldo-$importe;
                
                 $datapagopro = array(
                'id_proveedor' => $id_proveedor,
                'fecha' => date('Y-m-d'),
                'fc' => $fc,
                'importe' => $importe
                );

                $datae = array(
                    'saldo' => $nuevosaldo,
                );
            }

             $data = array(
                'descripcion' => $descripcion,
                'segmento' => $rubro,
                'importe' => $importe,
                'nota' => $nota,
                'movimiento' => $_POST['movimiento'],
                'fecha' => date('Y-m-d'),
                'usuario' => $this->session->userdata('id'),
                'forma' => $_POST['forma'],
                'socio' => $this->session->userdata('socio')
            );

            $data = $this->security->xss_clean($data);
            $datapagopro = $this->security->xss_clean($datapagopro);
            
            if ($importe>1 && $rubro<>0 && $id_proveedor<>"") {
                $this->common_model->insert($data, 'caja');

                if($_POST['subcategorypro']){
                    $this->common_model->insert($datapagopro, 'pago_proveedores');
                    $this->common_model->update_var($datae,$id,'compras','id');
                }
                
                $this->session->set_flashdata('msg', 'Movimiento Creado Exitosamente');
                redirect(base_url() . "admin/caja");
            } else {
                $this->session->set_flashdata('error_msg', 'Debe completar todos los campos');
                redirect(base_url('admin/caja'));
            } 
          }
        }
    }
    ///////////////////////////////////////////////////////////////
    public function pruebatooltip(){
        $data = array();
        $data['listado'] = $this->common_model->select_option_var('87','creditos','vendedor');
        $this->load->view('admin/caja/tooltipajax', $data);
    }

    public function pruebatooltipax(){

        if ($_POST) {
            $table = 'cuotas';
            $id = $_POST['id'];
            $campo = 'idcredito';
            $data = array();

        $data['datos'] = $this->common_model->select_option_var($id,$table,$campo);
        $data['impaga'] = $this->common_model->contar_cuotas_impagas($id);
        $data['ultimo'] = $this->common_model->select_lastpago_tooltip($id);
        $this->load->view('admin/caja/tooltipajaxdos', $data);

    }}
    ////////////////////////////////////////////////////////////////

    //insertaremos el pago en caja
    public function cobranza(){
        if ($_POST) {
            $importe = $_POST['importe'];
            $modo = $_POST['forma'];
            $subcategory = $_POST['subcategory'];
            $cob = $_POST['cobrador'];
            $date = $_POST['cobrado'];
            foreach( $importe as $key => $valor ) {
                $forma = $modo[$key];
                $descripcion = $subcategory[$key];
                $cobrador = $cob[$key];
                $cobrado = $date[$key];
                $datae = array(
                        'descripcion' => $descripcion,
                        'segmento' => 15,
                        'importe' => $valor,
                        'movimiento' => 1,
                        'fecha' => date('Y-m-d'),
                        'usuario' => $this->session->userdata('id'),
                        'forma' => $forma,
                        'cobrador' => $cobrador,
                        'cobrado' => $cobrado
                        );
 
            $this->common_model->insert($datae, 'caja');
            
        }
        redirect(base_url('admin/caja'));
        }
    }



   
}