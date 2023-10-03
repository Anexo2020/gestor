<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
    }

    
    public function index(){
        if ($this->session->userdata('role') == 'cliente'){
            redirect(base_url('admin/cliente'));      
        }else{

        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index', $data);
        }
    }

    public function index_original(){
        if ($this->session->userdata('role') == 'cliente'){
            redirect(base_url('admin/cliente'));      
        }else{

        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index_original', $data);
        }
    }

    public function backup($fileName='db_backup.zip'){
        $this->load->dbutil();
        $backup =& $this->dbutil->backup();
        $this->load->helper('file');
        write_file(FCPATH.'/downloads/'.$fileName, $backup);
        $this->load->helper('download');
        force_download($fileName, $backup);
    }

    //-- add new vendedor
    public function add_descripcion_gasto()
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
        $data['rubro'] = $this->common_model->select_rubro('rubros_gastos');
        $data['listado'] = $this->common_model->select_rubro('lista_gastos');
        $data['main_content'] = $this->load->view('admin/user/add_lista_gasto', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

}