<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
       $this->load->helper(array('form', 'url'));
    }

    public function index(){
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function solicitud($id)
    {

        $data['articulos'] = $this->common_model->select_art_soli($id);
        $data['localidad'] = $this->common_model->select('country');
        $data['referencia'] = $this->common_model->get_referencia($id);
        $data['dato'] = $this->common_model->get_single_credito_row($id); 
        $data['main_content'] = $this->load->view('admin/pages/solicitud', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function solicitudcel($id)
    {
        $data['articulos'] = $this->common_model->select_art_soli($id);
        $data['localidad'] = $this->common_model->select('country');
        $data['referencia'] = $this->common_model->get_referencia($id);
        $data['dato'] = $this->common_model->get_single_credito_row($id); 
        $data['main_content'] = $this->load->view('admin/pages/solicitudcel', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function profilec($id)
    {        
        $data['page_title'] = 'Pages';
        $data['documentos'] = $this->common_model->select_documento($id);
        $data['referencias'] = $this->common_model->get_referencia_cliente($id);
        $data['datos'] = $this->common_model->get_user_info_cliente($id); 
        $data['main_content'] = $this->load->view('admin/pages/profilec', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function profile(){
        $data = array();
        $data['page_title'] = 'Pages';
        $data['main_content'] = $this->load->view('admin/pages/profile', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function blank(){
        $data = array();
        $data['page_title'] = 'Pages';
        $data['main_content'] = $this->load->view('admin/pages/blank', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function invoice(){
        $data = array();
        $data['page_title'] = 'Pages';
        $data['main_content'] = $this->load->view('admin/pages/invoice', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function login(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/login', $data);
    }

    public function register(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/register', $data);
    }

    public function recover(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/recover', $data);
    }

    public function lockscreen(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/lockscreen', $data);
    }

    public function error(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/error', $data);
    }

    


}