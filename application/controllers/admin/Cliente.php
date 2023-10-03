<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('verificacion_model');
       $this->load->model('cliente_model');
       $this->load->model('login_model');
	   $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $data = array();
        $data['creditos'] = $this->cliente_model->mis_creditos();
        $data['finalizados'] = $this->cliente_model->mis_creditos_finalizados();
        $data['main_content'] = $this->load->view('admin/cliente/homecliente', $data, TRUE);
        $this->load->view('admin/indexcliente', $data);
    }

     public function verdetalle($id)
    {
        $data = array();
        $data['cuotas'] = $this->cliente_model->selec_cuotas($id);
        $data['pagos'] = $this->cliente_model->selec_pagos($id);
        $data['main_content'] = $this->load->view('admin/cliente/detalle', $data, TRUE);
        $this->load->view('admin/indexcliente', $data);
    }

    public function verdetalledes($id)
    {
        $data = array();
        $data['cuotas'] = $this->cliente_model->selec_cuotas($id);
        $data['pagos'] = $this->cliente_model->selec_pagos($id);
        $data['main_content'] = $this->load->view('admin/cliente/detalledes', $data, TRUE);
        $this->load->view('admin/indexcliente', $data);
    }

    public function buscar_cliente()
    {   
        if ($_POST['busqueda']!=="") 
        {
            $datas = $_POST['busqueda'];
            $datas = $this->security->xss_clean($datas);
            $lista = array();
            $lista = $this->cliente_model->buscar_cliente($datas);
            $this->output
            ->set_content_type('application/json') //set Json header
            ->set_output(json_encode($lista));// make output json encoded
        }
    }
	
    public function verificar_1(){
        if ($_POST) {
            $direccionr = $_POST['direccion'];
            $id_user = $_POST['id_user'];
            $telefono = $_POST['telefono'];
            $data['creditos'] = $this->verificacion_model->select_option_var($id_user, 'creditos', 'user_id');
            $data['telefonos'] = $this->verificacion_model->buscar_telefono($telefono);
            $data['prueba'] = $this->verificacion_model->busquedaVeriUno($direccionr);
            $data['solicitudes'] = $this->verificacion_model->solicitudes($id_user);
            $data['main_content'] = $this->load->view('admin/pages/verificado', $data, TRUE);
        $this->load->view('admin/index', $data);
        }
    }


///////fin del Controlador///////////////

}