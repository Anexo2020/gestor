<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vend extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('articulo_model');
       $this->load->model('login_model');
	   $this->load->helper(array('form', 'url'));
    }

    public function index(){
        $data['creditos'] = $this->common_model->get_all_vendedor_log();
        $data['user'] = $this->common_model->select('user');
        $data['main_content'] = $this->load->view('admin/user/missolicitudes', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //muestra comisiones x vendedor
    public function comxventaspagar(){
        $data['apertura'] = $this->common_model->select('apertura_de_caja');
        $data['comisiones'] = $this->common_model->comisiones_a_pagar_nue();
        $data['main_content'] = $this->load->view('admin/user/comapagar', $data, TRUE);
        $this->load->view('admin/index2', $data);
    }

    //insertaremos el pago en caja y actualizamos la tabla de comisiones
    public function pago_cometa(){
        if ($_POST) {
            $cometa = $_POST['cometa'];
            $credito = $_POST['credito'];
            $venta = $_POST['venta'];
            $fecha = date('Y-m-d');
            foreach( $cometa as $key => $valor ) {
                $id = $credito[$key];
                $idventa = $venta[$key];
                $pago = $valor+$id+$idventa;
                $datae = array(
                        'pagada' => 1,
                        'pago' => $pago,
                        'fecha' => $fecha
                        );
                if ($idventa == 0) {
                    $this->common_model->edit_comisiones($datae, $id);
                }elseif($id == 0){
                    $this->articulo_model->edit_comisionesV($datae, $idventa);
                }
               
            }
            $datac = array( 
                        'fecha' => $fecha,
                        'segmento' => 13,
                        'descripcion' => 'por ventas',
                        'usuario' => $this->session->userdata('id'),
                        'importe' => $_POST['caja'],
                        'forma' => $_POST['forma']
                        );
            $this->common_model->insert($datac, 'caja');
            redirect(base_url('admin/vend/comxventaspagar'));
        }
    }


}