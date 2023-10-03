<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cob extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
		$this->load->model('common_model');
        $this->load->model('cobranza_model');
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
    }

    // lista de cobranza total por y para cobrador
    public function index(){
        $data['chequeo'] = $this->cobranza_model->check_cob_rendida($this->session->userdata('id'));
        $data['articulos'] = $this->cobranza_model->traerArticulos();
        $data['creditos'] = $this->cobranza_model->get_all_cobrador();
        $data['pagos'] = $this->cobranza_model->get_pagosc();
        /*$data['main_content'] =*/ $this->load->view('admin/cobrador/total_cob', $data);
        //$this->load->view('admin/index', $data);
    }

    // lista de cobranza total por y para cobrador
    public function nuevoin(){
        $data['chequeo'] = $this->cobranza_model->check_cob_rendida($this->session->userdata('id'));
        $data['creditos'] = $this->cobranza_model->get_all_cobrador();
        /*$data['main_content'] =*/ $this->load->view('admin/cobrador/total_cob_a', $data);
        //$this->load->view('admin/index', $data);
    }

    // busqueda de creditos por cobrar
    public function buscCredxCob(){
        if ($_POST['busca']!=="") 
        {
            $match = $_POST['busca'];
        $data['chequeo'] = $this->cobranza_model->check_cob_rendida($this->session->userdata('id'));
        $data['articulos'] = $this->cobranza_model->traerArticulos();
        $data['creditos'] = $this->cobranza_model->buscarCredxCob($match);
        $data['pagos'] = $this->cobranza_model->get_pagosc();
        /*$data['main_content'] =*/ $this->load->view('admin/cobrador/total_cob', $data);
        //$this->load->view('admin/index', $data);
    }
    }

    // lista de cobranza total por y para cobrador para hoy
    public function cobrarhoy(){
        $data['chequeo'] = $this->cobranza_model->check_cob_rendida($this->session->userdata('id'));
        //$data['articulos'] = $this->cobranza_model->traerArticulos();
        $data['creditos'] = $this->cobranza_model->get_all_cobradorHoy();
        //$data['pagos'] = $this->cobranza_model->get_pagosc();
        /*$data['main_content'] =*/ $this->load->view('admin/cobrador/total_cob', $data);
        //$this->load->view('admin/index', $data);
    }

    public function datos(){
            $data = array();
            $data['main_content'] = $this->load->view('admin/cobrador/totales', $data, TRUE);
            $this->load->view('admin/index', $data);
        }

    public function DatoCred_Cob($id)
    {
        $data['datos'] = $this->common_model->get_single_credito($id);
        $data['cuotas'] = $this->common_model->get_all_cuotas($id);
        $data['pagos'] = $this->common_model->pagos_cred($id);
        $data['anticipo'] = $this->cobranza_model->check_anticipo($id);
        $data['main_content'] = $this->load->view('admin/cobrador/DatoCred', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function tabla_totales(){
        if($_POST['hasta']){
            $fecha1 = $_POST['desde'];
            $lafecha1 = date("Y/m/d", strtotime($fecha1));
            $desde = str_replace("/", "-", $lafecha1);
            $fecha2 = $_POST['hasta'];
            $lafecha2 = date("Y/m/d", strtotime($fecha2));
            $hasta = str_replace("/", "-", $lafecha2);

        
        $data = array();
        $data['disap'] = $this->cobranza_model->get_disap($desde,$hasta);
        $data['cobranza'] = $this->cobranza_model->get_pagos_entrefechas($desde,$hasta);
        $data['anticipo'] = $this->cobranza_model->get_anticipo_entrefechas($desde,$hasta);
        $data['ventas'] = $this->cobranza_model->get_ventas_entrefechas($desde,$hasta);
        $data['cantidad'] = $this->cobranza_model->contar_ventas_entrefechas($desde,$hasta);
        $data['rechazos'] = $this->cobranza_model->contar_rechazos_entrefechas($desde,$hasta);
        $data['cancelados'] = $this->cobranza_model->contar_cancelados_entrefechas($desde,$hasta);
        /*$data['main_content'] =*/ $this->load->view('admin/cobrador/datostotales', $data);
        //$this->load->view('admin/index', $data);
        }
    }

    public function recaudacion(){
            $data = array();
            $data['cobrador'] = $this->common_model->get_asig_cob();
            $data['main_content'] = $this->load->view('admin/cobrador/cobranza', $data, TRUE);
            $this->load->view('admin/index', $data);
        }

    public function recaudacionxfecha(){
        if($_POST['hasta']){
            $fecha1 = $_POST['desde'];
            $lafecha1 = date("Y/m/d", strtotime($fecha1));
            $desde = str_replace("/", "-", $lafecha1);
            $fecha2 = $_POST['hasta'];
            $lafecha2 = date("Y/m/d", strtotime($fecha2));
            $hasta = str_replace("/", "-", $lafecha2);
            $cobrador = $_POST['cobrador'];

        switch ($cobrador)
        {
        case 88:
            $zona = 'Zona Julio';
        break;
        case 89:
            $zona = 'Zona Braian';
        break;
        case 90:
            $zona = 'Zona Erick';
        break;
        case 1669:
            $zona = 'zona gaston';
        break;
        case 3255:
            $zona = 'zona jonathan';
        break;
        }

        
        $data = array();
        $data['efectivo'] = $this->cobranza_model->get_reca_efectivo($desde,$hasta,$cobrador);
        $data['mp'] = $this->cobranza_model->get_reca_mp($desde,$hasta,$cobrador);
        $data['disape'] = $this->cobranza_model->disap_efectivo_caja($desde,$hasta,$zona);
        $data['disapmp'] = $this->cobranza_model->disap_mp_caja($desde,$hasta,$zona);
        /*$data['main_content'] =*/ $this->load->view('admin/cobrador/recaudaciones', $data);
        //$this->load->view('admin/index', $data);
        }
    }


    ///////////////////////////////////////////////////////


    public function test(){
        
        if ( $_POST['nom']!=="")
        { 
        $fechaf = $_POST['fecha'];
        $lafecha = date("Y/m/d", strtotime($fechaf));
        $fecha = str_replace("/", "-", $lafecha);
        $data = array();
        $data['date'] = $fecha;
        $data['apertura'] = $this->common_model->select('apertura_de_caja');
        $data['cobrador'] = $this->common_model->select_option($_POST['nom'],'user');
        $data['chequeo'] = $this->cobranza_model->check_ing_caja($_POST['nom'],$fecha);
        $data['pagos'] = $this->cobranza_model->get_pagos_dia_cob($_POST['nom'],$fecha);
        $data['totalft'] = $this->cobranza_model->get_subtotales_ft($_POST['nom'],$fecha);
        $data['totalmp'] = $this->cobranza_model->get_subtotales_mp($_POST['nom'],$fecha);
        $this->load->view('admin/cobrador/testeo', $data); 
        }

    }


    public function cobrodia(){
            $data = array();
            $data['cobradores'] = $this->common_model->get_asig_cob();
            $data['main_content'] = $this->load->view('admin/cobrador/recdia', $data, TRUE);
            $this->load->view('admin/index', $data);
        }


    public function clientesxcob(){
            $data = array();
            $data['cobradores'] = $this->common_model->get_asig_cob();
            $data['main_content'] = $this->load->view('admin/cobrador/filtroxcob', $data, TRUE);
            $this->load->view('admin/index', $data);
        }

     public function contexcob(){
            $data = array();
            $data['cobradores'] = $this->common_model->get_asig_cob();
            $data['main_content'] = $this->load->view('admin/cobrador/Contexcob', $data, TRUE);
            $this->load->view('admin/index', $data);
        }


    public function filtroclixcob(){
        
        if ( $_POST['nom']!=="")
        { 
        $cobrador = $_POST['nom'];
        $data['creditos'] = $this->cobranza_model->clientesporcobrador($cobrador);
        $data['pagos'] = $this->cobranza_model->get_pagos();
        $this->load->view('admin/cobrador/resclixcob', $data);
        }

    }

    public function Contenciosoxcob(){
        
        if ( $_POST['nom']!=="")
        { 
        $cobrador = $_POST['nom'];
        $data['creditos'] = $this->cobranza_model->contenciososporcobrador($cobrador);
        $data['pagos'] = $this->cobranza_model->get_pagos();
        $this->load->view('admin/cobrador/incobrable', $data);
        }

    }

    public function cuotasAtrasadas()
    {
        $data['cuotasA'] = $this->common_model->cuotas_atrasadas();
        $data['main_content'] = $this->load->view('admin/cobrador/cuotasAtraso', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

        

    public function mirecaudacion(){

        if ( $this->session->userdata('role')=="cobrador")
        { 
        $cobrador = $this->session->userdata('id');
        $fecha = date("Y-m-d");
        $data = array();
        $data['pagos'] = $this->cobranza_model->get_pagos_dia_cob($cobrador,$fecha);
        $data['totalft'] = $this->cobranza_model->get_subtotales_ft($cobrador,$fecha);
        $data['totalmp'] = $this->cobranza_model->get_subtotales_mp($cobrador,$fecha);
        $this->load->view('admin/cobrador/mireca', $data); 
        }

    }


    public function reprogamarcobro(){
        $rep = $_POST['rep'];
        $id = $_POST['idcredito'];
        $newrep = date('Y/m/d',strtotime($rep));
           if($newrep >= date('Y/m/d') ){
            $data = array(
                'rep' => $newrep
            );

        $this->common_model->edit_option($data, $id, 'creditos');
        echo "reprogramada para: ".date('d/m/Y',strtotime($rep));
           }
            
    }

    public function recalificarCred(){
        $observacion = $_POST['obse'];
        $id = $_POST['id'];
        $user_id = $_POST['user_id'];
        $estado = $_POST['recalificar'];
        $fecha = date('Y-m-d');

           if(!empty($id)){
            $data = array(
                'observaciones' => $observacion,
                'estado' => $estado,
                'recalificadoel' => $fecha
            );
            $datau = array(
                'calificacion' => 'inhabilitado'
            );

        $this->common_model->edit_option($data, $id, 'creditos');
        $this->common_model->edit_option($datau, $user_id, 'user');

           }
            
    }


    public function ActZona(){
        $id = $_POST['id'];
        $zona = $_POST['zona'];

           if(!empty($id)){
            $data = array(
                'zona' => $zona,
            );

        $this->common_model->edit_option($data, $id, 'creditos');
        echo $zona;
           }
            
    }



    public function insert_anticipo(){

        if ($_POST['importe']>0) {

            $id = $_POST['idcredito'];
            $token = $_POST['token'];
            $importeP = $_POST['importe'];
            $chat_id = $_POST['chat_id'];
            $data = array(
                'fecha' => $_POST['fecha'],
                'importe' => $_POST['importe'],
                'idcredito' => $_POST['idcredito'],
                'cobrador' => $_POST['cobrador'],
                'user_id' => $_POST['user_id'],
                'modo' => $_POST['modo'],
                'anticipo' => $_POST['anticipo'],
                'token' => $_POST['token']
                );
            $datos = array(
                'fecha' => $_POST['fecha'],
                'segmento' => 14,
                'descripcion' => $_POST['idcredito'],
                'usuario' => $_POST['cobrador'],
                'importe' => $_POST['importe'],
                'movimiento' => 1,
                'forma' => $_POST['modo']
                );

            $data = $this->security->xss_clean($data);
            $datos = $this->security->xss_clean($datos);
            /*
            $insertok = $this->common_model->insert($data, 'pagos');
            $this->common_model->insert($datos, 'caja');

            redirect(base_url('admin/user/recibo_gen_b/'.$insertok));
            */
            
              //-- check doble insersion
            $check = $this->common_model->check_reinsert_pago($id);
            if(!empty($check)){
            foreach($check as $prueba){
                $resultado = $prueba['token']+300;
            }
            if($resultado < $token){

            $insertok = $this->common_model->insert($data, 'pagos');
            $this->common_model->insert($datos, 'caja');

            //redirect(base_url('admin/user/recibo_gen_b/'.$insertok));
            redirect('https://anexo.com.ar/anexobot.php?chat='.$chat_id.'&importe='.$importeP.'&credito='.$id.'&role='.$role.'&insertok='.$insertok);
            }
            else{ redirect(base_url('admin/user/recibo_gen_c/1'));
            }
         }else{
            $insertok = $this->common_model->insert($data, 'pagos');
            $this->common_model->insert($datos, 'caja');

            //redirect(base_url('admin/user/recibo_gen_b/'.$insertok));
            redirect('https://anexo.com.ar/anexobot.php?chat='.$chat_id.'&importe='.$importeP.'&credito='.$id.'&role='.$role.'&insertok='.$insertok);
            } 
        }
    
    }


    
}