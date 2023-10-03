<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('articulo_model');
       $this->load->model('cobranza_model');
       $this->load->model('login_model');
	   $this->load->helper(array('form', 'url'));
    }



    public function index()
    {
        $data = array();
        $data['page_title'] = 'User';
        $data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/user/add', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function nuevocliente()
    {
        $data = array();
        $data['country'] = $this->common_model->select('country');
        //$data['power'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/add_cliente', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function nuevocliente_cob()
    {
        $data = array();
        $data['page_title'] = 'User';
        $data['country'] = $this->common_model->select('country');
        $this->load->view('admin/user/add_cliente', $data);
    }
	
	public function nuevocobrador()
    {
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/add_cobrador', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add new user by admin
    public function add()
    {   
        if ($_POST) {

            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'dni' => $_POST['dni'],
				'direccion' => $_POST['direccion'],
                'password' => md5($_POST['password']),
                'entre_calles' => $_POST['entre_calles'],
				'mobile' => $_POST['mobile'],
                'country' => $_POST['country'],
                'status' => $_POST['status'],
                'role' => $_POST['role'],
				'cliente' => $_POST['cliente'],
				'created_at' => current_datetime()				
            );
            $datasocio = array(
                'dni_socio' => $this->session->userdata('socio'),
                'dni_autorizado' => $_POST['dni'],
                'creado' => current_datetime(),
                'usuario' => $this->session->userdata('socio_name')
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate dni
            $dni = $this->common_model->check_dni($_POST['dni']);


            if ( empty($dni)) {
                $user_id = $this->common_model->insert($data, 'user');
                $this->common_model->insert($datasocio, 'socio');
            
                if ($this->input->post('role') == "user") {
                    $actions = $this->input->post('role_action');
                    foreach ($actions as $value) {
                        $role_data = array(
                            'user_id' => $user_id,
                            'action' => $value
                        ); 
                       $role_data = $this->security->xss_clean($role_data);
                       $this->common_model->insert($role_data, 'user_role');
                    }
                }
                $this->session->set_flashdata('msg', 'Usuario Creado Exitosamente');
                redirect(base_url('admin/user/all_user_list'));
            } else {
                $this->session->set_flashdata('error_msg', 'este DNI ya existe');
                redirect(base_url('admin/user'));
            }  

        }
    }
	

	//-- add new vendedor
    public function add_vendedor()
    {   
        if ($_POST) {

            $data = array(
                'first_name' => strtoupper($_POST['first_name']),
                'last_name' => strtoupper($_POST['last_name']),
                'dni' => $_POST['dni'],
				'direccion' => $_POST['direccion'],
                'password' => md5($_POST['password']),
                'entre_calles' => $_POST['entre_calles'],
				'mobile' => $_POST['mobile'],
                'country' => $_POST['country'],
                'status' => $_POST['status'],
                'role' => $_POST['role'],
				'cliente' => $_POST['cliente'],
                'created_at' => current_datetime(),
				'cobrador' => $_POST['cobrador']
            );
            $datasocio = array(
                'dni_socio' => $this->session->userdata('socio'),
                'dni_autorizado' => $_POST['dni'],
                'creado' => current_datetime(),
                'usuario' => $this->session->userdata('socio_name')
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate dni
            $dni = $this->common_model->check_dni($_POST['dni']);
			$dnp = $_POST['dni'];

            if (empty($dni)) {
                $user_id = $this->common_model->insert($data, 'user');
                $this->common_model->insert($datasocio, 'socio');

                $this->session->set_flashdata('msg', 'Vendedor Cargado Exitosamente');
               redirect(base_url() . "admin/user/add_vendedor");
            } else {
                $this->session->set_flashdata('error_msg', 'este dni ya existe');
                redirect(base_url('admin/user/nuevocliente'));
            } 

        }
        $data = array();
        $data['page_title'] = 'Vendedor';
        $data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/user/add_vendedor', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	
	//-- ultimo registro con pas apellido 2887 ALEJANDRA SARA CADICAMO

    public function add_cliente()
    {   
        if ($_POST) {

            $data = array(
                'first_name' => strtoupper($_POST['first_name']),
                'last_name' => strtoupper($_POST['last_name']),
                'dni' => $_POST['dni'],
				'direccion' => $_POST['direccion'],
                'password' => md5(12345),
                'entre_calles' => $_POST['entre_calles'],
				'mobile' => $_POST['mobile'],
                'country' => $_POST['country'],
                'status' => $_POST['status'],
                'role' => 'cliente',
				'cliente' => 'si',
                'created_at' => current_datetime(),
				'cobrador' => $_POST['cobrador']
            );
            $datasocio = array(
                'dni_socio' => $this->session->userdata('socio'),
                'dni_autorizado' => $_POST['dni'],
                'creado' => current_datetime(),
                'usuario' => $this->session->userdata('socio_name')
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate dni
            $dni = $this->common_model->check_dni($_POST['dni']);
			$dnp = $_POST['dni'];

            if (empty($dni) && $_POST['dni']!=="") {
                $user_id = $this->common_model->insert($data, 'user');
                $this->common_model->insert($datasocio, 'socio');

               redirect(base_url() . "admin/user/formup/" . $dnp);
            } else {
                $this->session->set_flashdata('error_msg', 'este dni ya existe');
                redirect(base_url('admin/user/nuevocliente'));
            } 

        }
    }
	

    public function all_user_list()
    {
        $data['users'] = $this->common_model->get_all_user();
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/users', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	

    public function all_cliente_list()
    {
        $data['users'] = $this->common_model->get_all_clientes();
        //$data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/clientes', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function clientes_habilitados()
    {
        $data['users'] = $this->common_model->get_clientes_habilitados();
        $data['main_content'] = $this->load->view('admin/user/clien_to_wa', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	 public function all_creditos_list()
    {
        $data['creditos'] = $this->common_model->get_all_creditos();
        $data['user'] = $this->common_model->select('user');
        //$data['count'] = $this->common_model->get_user_total();
        /*$data['main_content'] = */$this->load->view('admin/user/creditos', $data);
        //$this->load->view('admin/index', $data);
    }

    public function buscar_credito()
    {   
        if ($_POST) {
            $datas = $_POST['busqueda'];

            $datas = $this->security->xss_clean($datas);

        $data['creditos'] = $this->common_model->buscar_creditos($datas);
        /*$data['main_content'] = */$this->load->view('admin/user/creditos', $data);
        //$this->load->view('admin/index', $data);
    }
    }

    public function nueva_solicitud()
    {
        $data['titulo'] = 'titulo';
        $data['main_content'] = $this->load->view('admin/cliente/buscar_cliente', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function proveedores()
    {
        $data['proveedores'] = $this->common_model->proveedores();
        $data['main_content'] = $this->load->view('admin/user/cuentaprov', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function proveedoresprint()
    {
        if($_POST){
            $id = $_POST['proveedor'];
        $data['CompyPagos'] = $this->common_model->cuentaproveedor($id);
        $this->load->view('admin/user/cuentaprovcarg', $data);
        }
        
    }

    public function buscar_cuotas()
    {   
        $id = $_POST['id'];

        $data['cuotas'] = $this->common_model->traer_cuotas($id);
        /*$data['main_content'] = */$this->load->view('admin/user/cuota', $data);
        //$this->load->view('admin/index', $data);
    }

    public function creditos_activos()
    {
        $data['creditos'] = $this->common_model->get_creditos_activos();
        $data['main_content'] = $this->load->view('admin/user/creditos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function creditos_finalizados()
    {
        $data['creditos'] = $this->common_model->get_creditos_finalizados();
        $data['main_content'] = $this->load->view('admin/user/creditos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function creditos_rechazados()
    {
        $data['creditos'] = $this->common_model->get_creditos_rechazados();
        $data['main_content'] = $this->load->view('admin/user/creditos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function creditos_cancelados()
    {
        $data['creditos'] = $this->common_model->get_creditos_cancelados();
        $data['main_content'] = $this->load->view('admin/user/creditos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function cred_pendientes_entrega()
    {
        $data['creditos'] = $this->common_model->creditos_para_entregar();
        $data['main_content'] = $this->load->view('admin/user/creditos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function cred_sin_cobrador()
    {
        $data['creditos'] = $this->common_model->creditos_sin_cobrador();
        $data['main_content'] = $this->load->view('admin/user/creditos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function all_creditos_pendiente()
    {
        $data['creditos'] = $this->common_model->get_creditos_pendiente();
        $data['user'] = $this->common_model->select('user');
        $data['main_content'] = $this->load->view('admin/user/creditosp', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function all_creditos_pendiente_verificar()
    {
        $data['creditos'] = $this->common_model->get_creditos_pendiente_verificadores();
        $this->load->view('admin/user/creditospendxv', $data);
        //$this->load->view('admin/index', $data);
    }
	
	 public function all_creditos_vendedor()
    {
        $data['creditos'] = $this->common_model->get_creditos_vendedor();
        $data['user'] = $this->common_model->select('user');
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/creditosxv', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function all_cuotas($id)
    {
        $data['datos'] = $this->common_model->get_single_credito($id);
		$data['cuotas'] = $this->common_model->get_all_cuotas($id);
        $data['pagos'] = $this->common_model->get_all_pagos($id);
        $data['cliente'] = $this->common_model->get_single_credito_info($id);
        $data['anticipo'] = $this->cobranza_model->check_anticipo($id);
        $data['apertura'] = $this->common_model->select('apertura_de_caja');
        $data['main_content'] = $this->load->view('admin/user/plan_cuotas', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function all_pagos($id)
    {
        $data['pagos'] = $this->common_model->get_all_pagos($id);
        $data['cliente'] = $this->common_model->get_single_credito_info($id);
        $data['main_content'] = $this->load->view('admin/user/pagos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function all_pagos_c($id)
    {
        $data['datos'] = $this->common_model->get_single_credito($id);
        $data['cuotas'] = $this->common_model->get_all_cuotas($id);
        $data['pagos'] = $this->common_model->get_all_pagos($id);
        $data['cliente'] = $this->common_model->get_single_credito_info($id);
        $data['anticipo'] = $this->cobranza_model->check_anticipo($id);
        $data['apertura'] = $this->common_model->select('apertura_de_caja');
        $data['main_content'] = $this->load->view('admin/user/plan_cuotas_y_pagos', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
	
	public function recibo_gen_c($id)
    {
        $data['cobro'] = $this->common_model->get_cobrador_recibo_b($id);
        $data['pagos'] = $this->common_model->select_pago($id);	
        /*$data['main_content'] = */$this->load->view('admin/user/recibo', $data);
        //$this->load->view('admin/index', $data);
    }
	
	public function recibo_gen_b($id)
    {
        $data['cobro'] = $this->common_model->get_cobrador_recibo_b($id);
		$data['pagos'] = $this->common_model->select_pago($id);	
        $data['main_content'] = $this->load->view('admin/user/recibo_b', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function recibo_gen_cliente($id)
    {
        $data['cobro'] = $this->common_model->get_cobrador_recibo_b($id);
        $data['pagos'] = $this->common_model->select_pago($id); 
        $data['main_content'] = $this->load->view('admin/user/recibo_b', $data, TRUE);
        $this->load->view('admin/indexcliente', $data);
    }

    //-- update users info
    public function update($id)
    {
        if ($_POST) {

            $data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'mobile' => $_POST['mobile'],
                'direccion' => $_POST['direccion'],
                'entre_calles' => $_POST['entre_calles'],
                'dni' => $_POST['dni'],
                'country' => $_POST['country'],
                'role' => $_POST['role']
            );
            $data = $this->security->xss_clean($data);

            

            $this->common_model->edit_option($data, $id, 'user');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/all_user_list'));

        }

        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/user/edit_user', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

///////////////////////////////////////////
    //-- editar credito sin entregar
    public function update_credito($id)
    {
        if ($_POST) {

            $articulos = $_POST['articulo'];//viene en forma de array
            $cantidades = $_POST['cantidad'];//viene en forma de array
 
            $cft = $_POST['cuota']*$_POST['plazo'];

            $data = array(
                'anticipo' => $_POST['anticipo'],
                'modo' => $_POST['modo'],
                'plazo' => $_POST['plazo'],
                'cuota' => $_POST['cuota'],
                'cft' => $cft,
                'modifico' => $_POST['modifico'],
            );
            $data = $this->security->xss_clean($data);

            foreach( $articulos as $key => $articulo ) {

                $artIdAndName = explode("-", $articulo);
                $articulodesc = $artIdAndName[1];
                $id_articulo = $artIdAndName[0];
                $costo = $artIdAndName[2];
                $idc = $artIdAndName[3];
                $cantidad = $cantidades[$key];

                $datast = array(
                        'id_articulo' => $id_articulo,
                        'cantidad' => $cantidad,
                        'descripcion' => $articulodesc,
                        'costo' => $costo
                        );
            $datast = $this->security->xss_clean($datast);
            $this->common_model->edit_option($datast, $idc, 'stock');
            
            }

            $data = $this->security->xss_clean($data);
            $this->common_model->edit_option($data, $id, 'creditos');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/all_creditos_pendiente'));

        }

        $data['ArtCargados'] = $this->common_model->dato_tabla_campo($id, 'stock', 'id_credito');
        $data['articulos'] = $this->articulo_model->listavend();
        $data['credito'] = $this->common_model->get_single_credito_info($id);
        $data['main_content'] = $this->load->view('admin/user/edit_solicitud', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }
	

    ///////////////////////////////////////////
    //-- update referencia
    public function update_referencia()
    {
        $idu=$_POST['id_user'];
        $id = $_POST['idreferencia'];
        if ($_POST) {
            
            $data = array(
                'id_user' => $_POST['id_user'],
                'nombre_r1' => $_POST['nombre_r1'],
                'telefono_r1' => $_POST['telefono_r1'],
                'relacion_r1' => $_POST['relacion_r1'],
                'nombre_r2' => $_POST['nombre_r2'],
                'telefono_r2' => $_POST['telefono_r2'],
                'relacion_r2' => $_POST['relacion_r2'],
                'nombre_r3' => $_POST['nombre_r3'],
                'telefono_r3' => $_POST['telefono_r3'],
                'relacion_r3' => $_POST['relacion_r3'],
                'casa_propia' => $_POST['casa_propia'],
                'comercio' => $_POST['comercio'],
                'rubro' => $_POST['rubro'],
                'direccion_c' => $_POST['direccion_c'],
                'entrecalles_c' => $_POST['entrecalles_c'],
                'localidad' => $_POST['localidad'],
                'antiguedad' => $_POST['antiguedad'],
                'observaciones' => $_POST['observaciones']
            );

            $data = $this->security->xss_clean($data);

            if($id==""){$this->common_model->insert($data, 'referencias');
            redirect(base_url() . "admin/pages/profilec/".$idu);
        }else{
                $this->common_model->edit_referencias($data,$id,'referencias');
            redirect(base_url() . "admin/pages/profilec/".$idu);
            }
              
            
        }    

        
    }

    //-- update referencia_verificada
    public function update_verifiacion_sol()
    {
        $table='referencias';
        $id = $_POST['user'];
        $campo = 'id_user';
        $idu = $_POST['idu'];

        if ($_POST) {
            
            $data = array(
                'credixsa' => $_POST['credixsa'],
                'interna' => $_POST['interna']
            );

            $action = $this->security->xss_clean($data);

                $this->common_model->update_var($action, $id, $table, $campo);
            redirect(base_url() . "admin/pages/solicitud/".$idu);                 
        }            
    }

    //-- update referencia_verificada
    public function update_data_sol()
    {
        $table='creditos';
        $id = $_POST['idu'];

        if ($_POST) {
            
            $data = array(
                'credixsa' => $_POST['credixsa'],
                'interna' => $_POST['interna']
            );

            $action = $this->security->xss_clean($data);

                $this->common_model->update($action, $id, $table);
            redirect(base_url() . "admin/pages/solicitud/".$id);                 
        }            
    }



    public function update_motivo(){
        if($_POST){
            $id = $_POST['id'];
            $data = array(
             'motivo' => $_POST['motivo']
            );
        $this->common_model->edit_option($data, $id, 'creditos');
        echo "Motivo";
        }
        
    }
	
	//-- asignar cobrador
    public function asignar_cobrador($id)
    {
        if ($_POST) {

            $data = array(
                'cobrador' => $_POST['cobrador']
            );
            $data = $this->security->xss_clean($data);

            $this->common_model->edit_option($data, $id, 'creditos');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/dashboard'));

        }

        $data['credito'] = $this->common_model->get_single_credito_info($id);
        $data['cobrador'] = $this->common_model->get_asig_cob();
        //$data['user'] = $this->common_model->select('user');
        $data['main_content'] = $this->load->view('admin/user/asig_cobrador', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }
	/////////////////////////////////////////////////////////////////
    ///editar credito cargado////////////////////////////////////////
    public function edit_entregado($id)
    {
        if ($_POST) {
            
            $cobrador = $_POST['cobrador'];
            $anticipo = $_POST['anticipo'];
            $cuota = $_POST['cuota'];
            $fecha = $_POST['entregado'];
            $plazo = $_POST['plazo'];
            $modo = $_POST['modo'];
            $cft = $_POST['cuota']*$_POST['plazo'];
            $newfecha;
            $lafecha = date("Y/m/d", strtotime($fecha));
            $fecha_esp = str_replace("/", "-", $lafecha);
            $fechav = strtotime($fecha_esp);
            $i=1;
                
        if(isset($_POST['entregado'])){
            $this->common_model->delete_cuotas($id);
        switch ($_POST['modo'])
        {
        case 'contado':
        
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-1 week",$fechav));
        }
        $firstven = date("Y/m/d",strtotime("+1 week",$fechav));

                            
                        $datac = array( 
                        'vence' => date("Y/m/d",strtotime("+$i week",$fechav)),
                        'idcredito' => $id,
                        'valorcuota' => $_POST['cuota'],
                        'cuotanumero' => $i
                        );
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven
                        );
                
                    $datac = $this->security->xss_clean($datac);
                    $this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
                   
         break;
        case 'semanal':
        $firstven = date("Y/m/d",strtotime("+1 week",$fechav));
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-1 week",$fechav));
        }
        
        for($i=1; $i<= $_POST['plazo']; $i++){
                            
                        $datac = array( 
                        'vence' => date("Y/m/d",strtotime("+$i week",$fechav)),
                        'idcredito' => $id,
                        'valorcuota' => $_POST['cuota'],
                        'cuotanumero' => $i
                        );
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven,
                        'modo' => $modo,
                        'cft' => $cft
                        );
                
                    $datac = $this->security->xss_clean($datac);
                    $this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
                    }
         break;
        case 'quincenal':
        $firstven = date("Y/m/d",strtotime("+2 week",$fechav));
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-2 week",$fechav));
        }
        
        for($i=1; $i<= $_POST['plazo']; $i++){
                        $a = 2*$i;  
                        $datac = array( 
                        'vence' => date("Y/m/d",strtotime("+$a week",$fechav)),
                        'idcredito' => $id,
                        'valorcuota' => $_POST['cuota'],
                        'cuotanumero' => $i
                        );
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven,
                        'modo' => $modo,
                        'cft' => $cft
                        );
                
                    $datac = $this->security->xss_clean($datac);
                    $this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
                    }
        break;
        case 'mensual':
        $firstven = date("Y/m/d",strtotime("+1 month",$fechav));
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-1 month",$fechav));
        }
        
        for($i=1; $i<= $_POST['plazo']; $i++){
                        $vence = date("Y/m/d",strtotime("+$i month",$fechav));
                        $datac = array( 
                        'vence' => $vence,
                        'idcredito' => $id,
                        'valorcuota' => $_POST['cuota'],
                        'cuotanumero' => $i
                        );
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven,
                        'modo' => $modo,
                        'cft' => $cft
                        );
                
                    $datac = $this->security->xss_clean($datac);
                    $this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
                    }
        break;
        case 'diario':

        $diadepago = array();
    
        for($i=1; $i<= $plazo; $i++){
                        $datac = array( 
                        'idcredito' => $id,
                        'valorcuota' => $_POST['cuota'],
                        'cuotanumero' => $i
                        );
                        $datae = array(
                        'estado' => 'activo',
                        'modo' => $modo,
                        'cft' => $cft
                        );
                    $datac = $this->security->xss_clean($datac);
                    $this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
                    }
            //creo un array con las fechas sumando cada domingo como un dia mas de plazo//      
            for($i=1; $i<= $plazo; $i++){
                $vence = date("Y/m/d",strtotime("+$i day",$fechav));
                    if(date('l', strtotime($vence)) == 'Sunday'){
                    $plazo++;
                    }
                $diadepago[$i] = $vence;
            } 
        
            //recorro el array y si es un domingo lo elimino del array//
            for($i=1; $i<= $plazo; $i++){
                $diadepago[$i];
                if(date('l', strtotime($diadepago[$i])) == 'Sunday'){
                    unset($diadepago[$i]);
                }
            }
            
            $newfecha = array_values( $diadepago );
                
            for($i=1; $i<= $plazo; $i++){
                $u=$i-1;
                $datav = array(
                    'vence' => $newfecha[$u],
                );
                $datav = $this->security->xss_clean($datav);
                $this->common_model->edit_cuotas($datav, $id, $i, 'cuotas');
            }
                    
                    
        break;
        }
                    
                }
                  $data = array(
                'entregado' => $lafecha,
                'anticipo' => $anticipo,
                'plazo' => $plazo,
                'cuota' => $cuota,

            );
            $data = $this->security->xss_clean($data);
            $this->common_model->edit_option($data, $id, 'creditos');
            $this->session->set_flashdata('msg', 'Se Cargo Exitosamente');
            redirect(base_url('admin/user/cred_sin_cobrador'));

        }

        $data['credito'] = $this->common_model->get_single_credito_info($id);
        $data['main_content'] = $this->load->view('admin/user/edit_entregado', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }
    ///fin editar credito cargado////////////////////////////////////
    /////////////////////////////////////////////////////////////////
	
	
	//-- agregar fecha de entrega e insertar las cuotas y vencimiento de cada una
    public function fecha_entrega($id)
    {
        
        if ($_POST) 
        {   
            //chequeo que no se vuelva a cargar cuotas y comisiones
            $cred = $this->common_model->check_recarga($id);
        if (empty($cred)){
            
			$cobrador = $_POST['cobrador'];
            $zona = $_POST['zona'];
			$fecha = $_POST['entregado'];
			$plazo = $_POST['plazo'];
            $cometa = $_POST['comision'];
            $vendedor = $_POST['vendedor'];
            $articulos_id = $_POST['id_articulo'];
            $cantidades = $_POST['cantidad'];
            $saldo = $_POST['plazo']*$_POST['cuota'];
			$newfecha;
			$lafecha = date("Y/m/d", strtotime($fecha));
			$fecha_esp = str_replace("/", "-", $lafecha);
			$fechav = strtotime($fecha_esp);
 			$i=1;


            $datacom = array(
                'idcredito' => $id,
                'iduser' => $vendedor,
                'comision' => $cometa
            );
		
		if(isset($_POST['entregado'])){

		switch ($_POST['modo'])
		{
        case 'contado':
        
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-1 week",$fechav));
        }
        $firstven = date("Y/m/d",strtotime("+1 week",$fechav));

                            
                        $datac = array( 
                        'vence' => date("Y/m/d",strtotime("+$i week",$fechav)),
                        'idcredito' => $id,
                        'valorcuota' => $_POST['cuota'],
                        'cuotanumero' => $i,
                        'pagada' => 'no'
                        );
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven
                        );
                
                    $datac = $this->security->xss_clean($datac);
                    $this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
                   
         break;
		case 'semanal':
        
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-1 week",$fechav));
        }
        $firstven = date("Y/m/d",strtotime("+1 week",$fechav));
		
		for($i=1; $i<= $_POST['plazo']; $i++){
							
						$datac = array(	
						'vence' => date("Y/m/d",strtotime("+$i week",$fechav)),
						'idcredito' => $id,
						'valorcuota' => $_POST['cuota'],
						'cuotanumero' => $i,
                        'pagada' => 'no'
						);
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven
                        );
				
					$datac = $this->security->xss_clean($datac);
		    		$this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
					}
		 break;
		case 'quincenal':
        
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-2 week",$fechav));
        }
        $firstven = date("Y/m/d",strtotime("+2 week",$fechav));
		
		for($i=1; $i<= $_POST['plazo']; $i++){
						$a = 2*$i;	
						$datac = array(	
						'vence' => date("Y/m/d",strtotime("+$a week",$fechav)),
						'idcredito' => $id,
						'valorcuota' => $_POST['cuota'],
						'cuotanumero' => $i,
                        'pagada' => 'no'
						);
						$datae = array(
						'estado' => 'activo',
                        'vence' => $firstven
						);
				
					$datac = $this->security->xss_clean($datac);
		    		$this->common_model->insert($datac, 'cuotas');
					$this->common_model->edit_option($datae, $id, 'creditos');
					}
		break;
		case 'mensual':
        
        if($_POST['pago']=='adelantada'){
            $fechav = date(strtotime("-1 month",$fechav));
        }
        $firstven = date("Y/m/d",strtotime("+1 month",$fechav));
		
		for($i=1; $i<= $_POST['plazo']; $i++){
						$vence = date("Y/m/d",strtotime("+$i month",$fechav));
						$datac = array(	
						'vence' => $vence,
						'idcredito' => $id,
						'valorcuota' => $_POST['cuota'],
						'cuotanumero' => $i,
                        'pagada' => 'no'
						);
                        $datae = array(
                        'estado' => 'activo',
                        'vence' => $firstven
                        );
				
					$datac = $this->security->xss_clean($datac);
		    		$this->common_model->insert($datac, 'cuotas');
                    $this->common_model->edit_option($datae, $id, 'creditos');
					}
		break;
		case 'diario':

		$diadepago = array();
	
		for($i=1; $i<= $plazo; $i++){
						$datac = array(	
						'idcredito' => $id,
						'valorcuota' => $_POST['cuota'],
						'cuotanumero' => $i,
                        'pagada' => 'no'
						);
						$datae = array(
						'estado' => 'activo'
						);
					$datac = $this->security->xss_clean($datac);
		    		$this->common_model->insert($datac, 'cuotas');
					$this->common_model->edit_option($datae, $id, 'creditos');
					}
			//creo un array con las fechas sumando cada domingo como un dia mas de plazo//		
			for($i=1; $i<= $plazo; $i++){
				$vence = date("Y/m/d",strtotime("+$i day",$fechav));
					if(date('l', strtotime($vence)) == 'Sunday'){
					$plazo++;
					}
				$diadepago[$i] = $vence;
			} 
		
			//recorro el array y si es un domingo lo elimino del array//
			for($i=1; $i<= $plazo; $i++){
				$diadepago[$i];
				if(date('l', strtotime($diadepago[$i])) == 'Sunday'){
					unset($diadepago[$i]);
				}
			}
			
			$newfecha = array_values( $diadepago );
				
			for($i=1; $i<= $plazo; $i++){
				$u=$i-1;
				$datav = array(
					'vence' => $newfecha[$u],
				);
				$datav = $this->security->xss_clean($datav);
            	$this->common_model->edit_cuotas($datav, $id, $i, 'cuotas');
			}
		
		break;
		}
					
				}
				  $data = array(
                'entregado' => $lafecha,
                'saldo' => $saldo,
                'zona' => $zona,
                'cobrador' => $cobrador
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

                 $datastock = array(
                'fecha' => $lafecha,
                );
                 
                $datastock = $this->security->xss_clean($datastock);
                $this->common_model->edit_option($data2, $id_articulo, 'articulos');
                $this->common_model->actualizarFechStock($datastock, $id, $id_articulo, 'stock', 'id_articulo');
            }

			$data = $this->security->xss_clean($data);
            
            $this->common_model->edit_option($data, $id, 'creditos');
            $this->common_model->insert($datacom,'comisionesxventa');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/dashboard'));

        }
    }
        $data['credito'] = $this->common_model->get_single_credito_info($id);
        $data['cobrador'] = $this->common_model->get_asig_cob();
        $data['articulos'] = $this->common_model->dato_tabla_campo($id, 'stock', 'id_credito');
        $data['main_content'] = $this->load->view('admin/user/fecha_entregado', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

 ///////////////////////
 ///cargar credito /////
 /////////////////////// 
public function cargar_credito2($id)
    {
        if ($_POST) {
            $articulos = $_POST['articulo'];//viene en forma de array
            $cantidades = $_POST['cantidad'];//viene en forma de array
            if(empty($articulos)){$condicionuno = 0;}else{$condicionuno = 1;}
            if(empty($cantidades)){$condiciondos = 0;}else{$condiciondos = 1;}
            if($condicionuno = 1 && $condiciondos = 1){
            if($_POST['condicion'] == 'contado'){$veriplazo=0;}else{$veriplazo=1;}
             
            if($_POST['cuota']>100 && $_POST['plazo']>$veriplazo){
            $data = array(
                'user_id' => $_POST['user_id'],
                'anticipo' => $_POST['anticipo'],
                'plazo' => $_POST['plazo'],
                'cuota' => $_POST['cuota'],
                'modo' => $_POST['condicion'],
                'creado' => current_datetime(),
                'cft' => $_POST['plazo']*$_POST['cuota'],
                'vendedor' => $_POST['vendedor'],
                'verificado' => 'pendiente',
                'observaciones' => $_POST['observaciones'],
                'token' => $_POST['token']
                                
            );
            $data = $this->security->xss_clean($data);

            //-- check doble insersion
            $check = $this->common_model->check_reinsert($_POST['user_id'],$_POST['token']);

            if ( empty($check)) {

            $credito_id = $this->common_model->insert($data, 'creditos');
            foreach( $articulos as $key => $articulo ) {

                $artIdAndName = explode("-", $articulo);
                $articulodesc = $artIdAndName[1];
                $id_articulo = $artIdAndName[0];
                $costo = $artIdAndName[2];
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

            $this->session->set_flashdata('msg', 'Credito Cargado Exitosamente');
            redirect(base_url('admin/user/all_creditos_vendedor/'));

        }}}}
        $this->session->set_flashdata('error_msg', 'NO SE CARGO!!!!');
        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['country'] = $this->articulo_model->listavend();
        $data['main_content'] = $this->load->view('admin/user/credito_form2', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

 public function cargar_credito($id)
    {
        if ($_POST) {
            if($_POST['cuota']>100 && $_POST['plazo']>1 && $_POST['articulo'] !== '0'){
            $data = array(
                'user_id' => $_POST['user_id'],
                'articulo' => $_POST['articulo'],///////////
                'anticipo' => $_POST['anticipo'],
                'plazo' => $_POST['plazo'],
				'cuota' => $_POST['cuota'],
				'modo' => $_POST['modo'],
				'creado' => current_datetime(),
				'cft' => $_POST['plazo']*$_POST['cuota'],
				'vendedor' => $_POST['vendedor'],
				'verificado' => 'pendiente',
                'observaciones' => $_POST['observaciones'],
                'token' => $_POST['token']
								
            );
            $data = $this->security->xss_clean($data);

            //-- check doble insersion
            $check = $this->common_model->check_reinsert($_POST['user_id'],$_POST['token']);

            if ( empty($check)) {

            $user_id = $this->common_model->insert($data, 'creditos');

			$this->session->set_flashdata('msg', 'Credito Cargado Exitosamente');
            redirect(base_url('admin/user/all_creditos_vendedor/'));

        }}}
        $this->session->set_flashdata('error_msg', 'NO SE CARGO!!!!');
        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['country'] = $this->common_model->select_art('articulos');
        $data['main_content'] = $this->load->view('admin/user/credito_form2', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

    public function cred_form($id)
    {

        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['country'] = $this->common_model->select_art('articulos');
        $data['main_content'] = $this->load->view('admin/user/credito_form', $data, TRUE);
        $this->load->view('admin/index', $data);

    }

    public function cred_form2($id)
    {

        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['country'] = $this->articulo_model->listavend();
        $data['main_content'] = $this->load->view('admin/user/credito_form2', $data, TRUE);
        $this->load->view('admin/index', $data);

    }
 ///////////////////////////
 ///fin cargar credito /////
 ///////////////////////////

    ///////////////////////
 ///cargar credito /////
 /////////////////////// 
public function cargar_venta($id)
    {
        if ($_POST) {
            $articulos = $_POST['articulo'];//viene en forma de array
            $cantidades = $_POST['cantidad'];//viene en forma de array
            if(empty($articulos)){$condicionuno = 0;}else{$condicionuno = 1;}
            if(empty($cantidades)){$condiciondos = 0;}else{$condiciondos = 1;}
            if($condicionuno = 1 && $condiciondos = 1){
             
            if($_POST){
            $data = array(
                'nombre' => $_POST['nombre'],
                'dni' => $_POST['dni'],
                'total' => $_POST['total'],
                'fecha' => current_datetime(),
                'vendedor' => $_POST['vendedor'],
                'observaciones' => $_POST['observaciones'],
                'token' => $_POST['token']
                                
            );
            $data = $this->security->xss_clean($data);

            //-- check doble insersion
            $check = $this->common_model->check_reventa($_POST['dni'],$_POST['token']);

            if ( empty($check)) {

            $venta_id = $this->common_model->insert($data, 'ventas');
            foreach( $articulos as $key => $articulo ) {

                $artIdAndName = explode("-", $articulo);
                $articulodesc = $artIdAndName[1];
                $id_articulo = $artIdAndName[0];
                $costo = $artIdAndName[2];
                $cantidad = $cantidades[$key];
                $costototal = $costo*$cantidad;

                $datast = array(
                        'id_articulo' => $id_articulo,
                        'cantidad' => $cantidad,
                        'movimiento' => 0,
                        'id_credito' => $venta_id,
                        'descripcion' => $articulodesc,
                        'costo' => $costototal
                        );
 
            $this->common_model->insert($datast, 'stock');
            
            }

            $this->session->set_flashdata('msg', 'Credito Cargado Exitosamente');
            redirect(base_url('admin/user/all_creditos_vendedor/'));

        }}}}
        $this->session->set_flashdata('error_msg', 'NO SE CARGO!!!!');
        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['country'] = $this->common_model->select_art('articulos');
        $data['main_content'] = $this->load->view('admin/user/credito_form2', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }

    ///////////////////////////////
    ///////fin venta///////////////
    ///////////////////////////////
   
   public function insertar_pago()
    {
		$id = $_POST['idcredito'];
        $id_credito_bot = $_POST['idcredito'];
        $chat_id = $_POST['chat_id'];
        $token = $_POST['token'];
        $resultado = 0;
        $role = $_POST['role'];
        $ultimopago = $_POST['fecha'];
        $forma = $_POST['forma'];
        $lafecha = date("Y/m/d", strtotime($ultimopago));
        $fechamod = str_replace("/", "-", $lafecha);
        $fechar = strtotime($fechamod);
        $importeP = $_POST['importe'];
       

        if ($importeP>0) {

            $data = array(
                'fecha' => $_POST['fecha'],
                'importe' => $_POST['importe'],
                'idcredito' => $_POST['idcredito'],
                'cobrador' => $_POST['cobrador'],
				'user_id' => $_POST['user_id'],
                'modo' => $_POST['modo'],
                'token' => $_POST['token']					
            );
           $data = $this->security->xss_clean($data);
            //-- check doble insersion
           $check = $this->common_model->check_reinsert_pago($id);
            foreach($check as $prueba){
                $resultado = $prueba['token']+300;
            }
            if($resultado < $token){

            $insertok = $this->common_model->insert($data, 'pagos');
     switch ($forma) {

                    case 'semanal':
                       
                        $dataupago = array(
                        'ultimopago' => $ultimopago,
                        'rep' => date("Y/m/d",strtotime("+1 week",$fechar))
                        );
                        $this->common_model->edit_option($dataupago, $id, 'creditos');
                       break;
                    case 'quincenal':
                       
                       $dataupago = array(
                        'ultimopago' => $ultimopago,
                        'rep' => date("Y/m/d",strtotime("+2 week",$fechar))
                        );
                       $this->common_model->edit_option($dataupago, $id, 'creditos');
                       break;
                    case 'mensual':
                        $rep = date("Y/m/d",strtotime("+1 month",$fechar));
                        $dataupago = array(
                        'ultimopago' => $ultimopago,
                        'rep' => $rep
                        );
                        $this->common_model->edit_option($dataupago, $id, 'creditos');
                        break;
                    case 'diario':
                        if(date('l', strtotime("+1 day",$fechar)) == 'Sunday'){
                            $reprog = date("Y/m/d",strtotime("+2 day",$fechar));
                        }else{
                            $reprog = date("Y/m/d",strtotime("+1 day",$fechar));
                        }
                        $rep = $reprog;
                        $dataupago = array(
                        'ultimopago' => $ultimopago,
                        'rep' => $rep
                        );
                        $this->common_model->edit_option($dataupago, $id, 'creditos');
                        break;

                }
           

			$id = $this->security->xss_clean($id);
			$pagado = $this->common_model->get_total_pagos($id);
            $deudas = $this->common_model->get_total_a_pagar($id);
			$cuotas = $this->common_model->get_all_cuotas($id);

            foreach($deudas as $deuda){
            $debe = $deuda->valorcuota;
            } 
			
			foreach($pagado as $pago){
			$cuenta = $pago->importe;
			}

            $saldototal = $debe - $cuenta;
            if($saldototal <= 0){
                    $dataestado = array(
                        'estado' => 'finalizado',
                        'saldo' => $saldototal
                    );
                    $this->common_model->edit_option($dataestado, $id, 'creditos');
                    }else{
                        $dataestado = array(
                        'saldo' => $saldototal
                    );
                    $this->common_model->edit_option($dataestado, $id, 'creditos');
                    }
			
			foreach ($cuotas as $cuota){
                $fechap = date("Y-m-d");
                $fetestigo = '0000-00-00';
				if(($cuota['cuotanumero']*$cuota['valorcuota'])<=$cuenta )
					{
						$id = $cuota['idcuota'];
						$saldo = ($cuota['cuotanumero']*$cuota['valorcuota'])-$cuenta;
						if($saldo<0){$saldo = 0;}
                        if($cuota['fechap'] == $fetestigo){
						$data = array(
						 'saldo' => $saldo,
           			     'pagada' => 'si',
                         'fechap' => $fechap
						);
                        }else{
                        $data = array(
                         'saldo' => $saldo,
                         'pagada' => 'si'
                         );
                        }
                   
                        $datav = array(
                         'vence' => $cuota['vence']
                        );
					
					$this->common_model->edit_cuota_p($data, $id, 'cuotas');
                    $this->common_model->edit_option($datav, $cuota['idcredito'], 'creditos');
					}else{
						$id = $cuota['idcuota'];
						$saldo = ($cuota['cuotanumero']*$cuota['valorcuota'])-$cuenta;
						$data = array(
           			     'saldo' => $saldo,
						 'pagada' => 'no'
						);
						$this->common_model->edit_cuota_p($data, $id, 'cuotas');
						}	
				}

			     if($role == 'cobrador'){
                //redirect(base_url('admin/user/recibo_gen_c/'.$insertok));
                redirect('https://anexo.com.ar/anexobot.php?chat='.$chat_id.'&importe='.$importeP.'&credito='.$id_credito_bot.'&role='.$role.'&insertok='.$insertok);
                 }else{
                //redirect(base_url('admin/user/recibo_gen_b/'.$insertok)); 
                redirect('https://anexo.com.ar/anexobot.php?chat='.$chat_id.'&importe='.$importeP.'&credito='.$id_credito_bot);
                }
            }else{ redirect(base_url('admin/user/recibo_gen_c/1'));}
            
        }
    
    }

    //borrar pago
    public function delete_pago($id)
    {
        if($id>0){
            $fetestigo = '0000-00-00';
            $id = $this->security->xss_clean($id);
            $credito = $this->common_model->get_idcred_from_pagos($id);
            $idc = 0;
                foreach($credito as $idcred){
                $idc = $idcred['idcredito'];
            }
            
            $this->common_model->delete_pago($id); 

            $pagado = $this->common_model->get_total_pagos($idc);
            $deudas = $this->common_model->get_total_a_pagar($idc);
            $cuotas = $this->common_model->get_all_cuotas($idc);
            
            foreach($deudas as $deuda){
            $debe = $deuda->valorcuota;
            }

            foreach($pagado as $pago){
            $cuenta = $pago->importe;
            }

            $saldototal = $debe - $cuenta;
            if($saldototal <= 0){
                    $dataestado = array(
                        'estado' => 'finalizado',
                        'saldo' => $saldototal
                    );
                    $this->common_model->edit_option($dataestado, $idc, 'creditos');
                    }else{
                        $dataestado = array(
                        'estado' => 'activo',
                        'saldo' => $saldototal
                    );
                    $this->common_model->edit_option($dataestado, $idc, 'creditos');
                    }
            
            foreach ($cuotas as $cuota){
                if(($cuota['cuotanumero']*$cuota['valorcuota'])<=$cuenta)
                    {
                        $id = $cuota['idcuota'];
                        $saldo = ($cuota['cuotanumero']*$cuota['valorcuota'])-$cuenta;
                        if($saldo<0){$saldo = 0;}
                        $data = array(
                         'saldo' => $saldo,
                         'pagada' => 'si'
                        );
                        $datav = array(
                         'vence' => $cuota['vence']
                        );
                    
                    $this->common_model->edit_cuota_p($data, $id, 'cuotas');
                    $this->common_model->edit_option($datav, $cuota['idcredito'], 'creditos');
                    }else{
                        $id = $cuota['idcuota'];
                        $saldo = ($cuota['cuotanumero']*$cuota['valorcuota'])-$cuenta;
                        $data = array(
                         'saldo' => $saldo,
                         'pagada' => 'no',
                         'fechap' => $fetestigo
                        );
                        $this->common_model->edit_cuota_p($data, $id, 'cuotas');
                        }   
                }

        redirect(base_url('admin/user/all_pagos/'.$idc));
    }
}
	
	
    //-- active user
    public function active($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User active Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

    //-- deactive user
    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        $this->session->set_flashdata('msg', 'User deactive Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

    //-- contactado por whatsapp
    public function contactado() 
    {
        $id = $_POST['idcliente'];
        $contactado = $_POST['contactado'];
        $data = array(
            'contactado' => $contactado
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'user');
        if ($contactado == 0){
            echo  '<a href="#" data-toggle="modal" data-target="#contactado"
             data-idcliente="'.$id.'"  data-idcontactado="1">
             <i class="fa fa-close text-danger m-r-10"></i></a>';
            }else{
            echo '<a href="#" data-toggle="modal" data-target="#contactado" data-idcliente="'.$id.'"
                data-idcontactado="0"> <i class="fa fa-check text-info m-r-10"></i> </a>';
            }
                                           
                                       

    }


    //-- active veri
    public function veri($id) 
    {
        $data = array(
            'veri' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'creditos');
        $this->session->set_flashdata('msg', 'User active Successfully');
        redirect(base_url('admin/user/all_creditos_pendiente'));
    }

    //-- deactive veri
    public function noveri($id) 
    {
        $data = array(
            'veri' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->common_model->update($data, $id,'creditos');
        $this->session->set_flashdata('msg', 'User deactive Successfully');
        redirect(base_url('admin/user/all_creditos_pendiente'));
    }

    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete($id,'user'); 
        $this->session->set_flashdata('msg', 'User deleted Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

	/////--actualizar verificado//////
    public function actualizar_verificado()
    {   
        if (isset($_POST)) {
            $var1 = $_POST['verificado'];
            $var2 = $_POST['verifico'];
            $var3 = $_POST['user_id'];
            $var4 = $_POST['id'];
            $var5 = $_POST['motivo'];
           
            $data = array(
                'verificado' => $_POST['verificado'],
                'verifico' => $_POST['verifico'],
                'motivo' => $_POST['motivo'],
                'verificadoel' => $_POST['el']
            );
            if($_POST['verificado'] == 'rechazado'){
                $datac = array(
                    'calificacion' => 'inhabilitado'
                );
                $this->common_model->edit_option($datac, $_POST['user_id'], 'user');
            } elseif ($_POST['verificado'] == 'cancelado') {
                $datac = array(
                    'anulacion' => 1,
                    'calificacion' => ''
                );
                $this->common_model->edit_option($datac, $_POST['user_id'], 'user');
            }

            $data = $this->security->xss_clean($data);
            
            //$this->session->set_flashdata('msg', 'Actualizacion Exitosa');
            $verificado = $this->common_model->edit_option($data, $_POST['id'], 'creditos');
            //redirect(base_url('admin/user/all_creditos_pendiente')); 
            echo $var1;
        }
        
    }
	

    public function power()
    {   
        $data['powers'] = $this->common_model->get_all_power('user_power');
        $data['main_content'] = $this->load->view('admin/user/user_power', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add user power
    public function add_power()
    {   
        if (isset($_POST)) {
            $data = array(
                'name' => $_POST['name'],
                'power_id' => $_POST['power_id']
            );
            $data = $this->security->xss_clean($data);
            
            //-- check duplicate power id
            $power = $this->common_model->check_exist_power($_POST['power_id']);
            if (empty($power)) {
                $user_id = $this->common_model->insert($data, 'user_power');
                $this->session->set_flashdata('msg', 'Power added Successfully');
            } else {
                $this->session->set_flashdata('error_msg', 'Power id already exist, try another one');
            }
            redirect(base_url('admin/user/power'));
        }
        
    }
	
	public function formup($dnp)
	{
		$dni = $dnp;
		$data = array();
			$data['user'] = $this->common_model->check_dni($dni);
			$data['main_content'] =$this->load->view('admin/form/add_cliente2', $data, TRUE);
			$this->load->view('admin/index', $data);
	}

	public function formadinfo($id)
	{
			$data = array();
			$data['user'] = $this->common_model->select_option($id, 'user');
			$data['main_content'] =$this->load->view('admin/form/add_cliente3', $data, TRUE);
			$this->load->view('admin/index', $data);
	}

	public function add_info()
	{
		$id=$_POST['id_user'];
		if ($_POST) {

            $data = array(
                'id_user' => $_POST['id_user'],
				'nombre_r1' => $_POST['nombre_r1'],
                'telefono_r1' => $_POST['telefono_r1'],
                'relacion_r1' => $_POST['relacion_r1'],
				'nombre_r2' => $_POST['nombre_r2'],
                'telefono_r2' => $_POST['telefono_r2'],
                'relacion_r2' => $_POST['relacion_r2'],
                'nombre_r3' => $_POST['nombre_r3'],
                'telefono_r3' => $_POST['telefono_r3'],
                'relacion_r3' => $_POST['relacion_r3'],
                'casa_propia' => $_POST['casa_propia'],
                'comercio' => $_POST['comercio'],
                'rubro' => $_POST['rubro'],
                'direccion_c' => $_POST['direccion_c'],
                'entrecalles_c' => $_POST['entrecalles_c'],
                'localidad' => $_POST['localidad'],
                'antiguedad' => $_POST['antiguedad'],
                'observaciones' => $_POST['observaciones']
            );

            $data = $this->security->xss_clean($data);

            //-- check duplicate dni
            $id_user = $this->common_model->check_ref($_POST['id_user']);

            if ( empty($id_user)) {
                     
            $user_id = $this->common_model->insert($data, 'referencias');
            $this->session->set_flashdata('msg', 'Credito Cargado Exitosamente');
            redirect(base_url() . "admin/user/singlecliente/" . $id);
            }   
        }    
	}

	public function singlecliente($id)
	{
		$data['users'] = $this->common_model->select_option($id, 'user');
        $data['country'] = $this->common_model->select('country');
        $data['main_content'] = $this->load->view('admin/user/clientes', $data, TRUE);
        $this->load->view('admin/index', $data);
	}

	
	//-- subir y redimensionar imagen
     public function nuevaimagen()
    {   
				$id = $_POST['userid'];
					
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
                $destination_thumb  = "./assets/images/thumbnail/" ;
				$destination_medium = "./assets/images/docu/" ;
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
                $images = 'assets/images/docu/'.$mid;
                $thumb  = 'assets/images/thumbnail/'.$thumb_nail;
                unlink($source) ;

						$data = array( 
							'name' => $mid,
							'id_user' => $id
							);
						$this->common_model->insert($data, 'documentos');
                        
                }
			}
			redirect(base_url() . "admin/user/formadinfo/" . $id);

    }

    public function delete_power($id)
    {
        $this->common_model->delete($id,'user_power'); 
        $this->session->set_flashdata('msg', 'Power deleted Successfully');
        redirect(base_url('admin/user/power'));
    }


}