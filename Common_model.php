<?php
class Common_model extends CI_Model {

    //-- insert function
	public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    //-- edit function
    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->update($table,$action);
        return;
    } 

    //-- edit function
    function edit_referencias($action, $id, $table){
        $this->db->where('id_referencia',$id);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->update($table,$action);
        return;
    } 
	
	//-- edit cuota pagada
    function edit_cuota_p($action, $id, $table){
        $this->db->where('idcuota',$id);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
       $this->db->update($table,$action);
        return;
    } 
	
	//-- edit cuotas
    function edit_cuotas($action, $id,  $i, $table){
        $this->db->where('idcredito',$id);
		$this->db->where('cuotanumero',$i);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->update($table,$action);
        return;
    } 

    //-- edit comisiones
    function edit_comisiones($action, $id){
        $this->db->where('idcredito',$id);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->update('comisionesxventa',$action);
        return;
    }

 

    //-- update function
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->update($table,$action);
        return;
    } 

    //-- update function
    function update_var($action, $id, $table, $campo){
        $this->db->where($campo,$id);
        $this->db->update($table,$action);
        return;
    }

    //-- update function
    function actualizarFechStock($action, $id, $id_articulo, $table, $campo){
        $this->db->where($campo,$id_articulo);
        $this->db->where('id_credito',$id);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->update($table,$action);
        return;
    } 
    //-- update function
    function actualizarFechStockCdo($action, $id){
        $this->db->where('venta',$id);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->update('stock',$action);
        return;
    }

    //-- delete function
    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return;
    }

    //-- delete pago
    function delete_pago($id){
        $this->db->delete('pagos', array('idpago' => $id));
        return;
    }

    //-- delete cuotas
    function delete_cuotas($id){
        $this->db->delete('cuotas', array('idcredito' => $id));
        return;
    }

    //-- user role delete function
    function delete_user_role($id,$table){
        $this->db->delete($table, array('user_id' => $id));
        return;
    }


    //-- select function
    function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     //-- select function
    function select_rubro($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- select function
    function select_apertura($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select function
    function select_art($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('estado', 'disponible');
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->order_by('descripcion','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select function
    function select_art_soli($id){
        $this->db->select('*');
        $this->db->from('stock');
        $this->db->where('id_credito', $id);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- select by id
    function select_option($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

     function select_option2($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    } 


     //-- select by id
    function select_option_var($id,$table,$campo){
        $this->db->select();
        $this->db->from($table);
        $this->db->where($campo, $id);
        $this->db->where('saldo', 0);
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->limit(1);
        $this->db->order_by("idcuota","DESC");
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    //-- select by rubro
    function select_categoria($id,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('rubro', $id);
        $this->db->where('socio',$this->session->userdata('socio'));
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    //-- select by rubro
    function select_subcategoria($id,$table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('cat', $id);
        $this->db->order_by("subcategoria","ASC");
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 


    function select_compras($id){
        $this->db->select('*');
        $this->db->from('compras');
        $this->db->where('proveedor', $id);
        $this->db->where('saldo !=', 0);
        $this->db->where('socio',$this->session->userdata('socio'));
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    //-- select verificado by id
    function select_verificado($id){
        $this->db->select('verificado');
        $this->db->from('creditos');
        $this->db->where('id', $id);
        $this->db->where('socio',$this->session->userdata('socio'));
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    function select_documento($id){
        $this->db->select();
        $this->db->from('documentos');
        $this->db->where('id_user', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 
	
	function select_lastpago($id)
	{
		$this->db->where('idcredito',$id);
		$this->db->from('pagos');
		$this->db->order_by("idcredito","DESC");
		$this->db->limit(1);
		$query = $this->db->get();
	return $query->result_array();
	}

    function select_lastpago_tooltip($id)
    {
        $this->db->where('id',$id);
        $this->db->from('creditos');
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
    return $query->result_array();
    }
	
	function select_pago($id)
	{
		$this->db->where('idpago',$id);
		$this->db->from('pagos');
		$this->db->order_by("idcredito","DESC");
		$query = $this->db->get();
	return $query->result_array();
	}

	//-- select cobrador action
    function select_cobrador_rol($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('action', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    //-- obtener pagos entrefechas
    function contar_cuotas_impagas($id){
        $this->db->select('*');
        $this->db->from('cuotas');
        $this->db->where('idcredito',$id);
        $this->db->where('pagada','no');
        $this->db->where('vence <','CURDATE()',FALSE);     
        $query = $this->db->count_all_results(); 
        return $query;
    }

    //-- obtener cuotas atrasadas
    function cuotas_atrasadas(){
        $this->db->select('*');
        $this->db->from('cuotas');
        $this->db->where('pagada','no');
        $this->db->where('socio',$this->session->userdata('dni_socio'));
        $this->db->where('vence <','CURDATE()',FALSE);     
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- check user role power
    function check_power($type){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id', $this->session->userdata('id'));
        $this->db->where('ur.action', $type);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function check_dni($dni){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('dni', $dni); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function check_recarga($id){
        $this->db->select('*');
        $this->db->from('comisionesxventa');
        $this->db->where('idcredito', $id); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function check_ref($id_user){
        $this->db->select('*');
        $this->db->from('referencias');
        $this->db->where('id_user', $id_user); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    

    public function check_reinsert($user, $token){
        $this->db->select('*');
        $this->db->from('creditos');
        $this->db->where('user_id', $user); 
        $this->db->where('token', $token);
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function check_reinsert_caja(){
        $this->db->select('*');
        $this->db->from('caja');
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function check_reinsert_venta($user, $token){
        $this->db->select('*');
        $this->db->from('ventas');
        $this->db->where('user', $user);  
        $this->db->where('token', $token);
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function check_reinsert_pago($id){
        $this->db->select('*');
        $this->db->from('pagos');
        $this->db->where('idcredito', $id); 
        $this->db->order_by("idpago","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     public function check_reinsert_cobro($id){
        $this->db->select('*');
        $this->db->from('pagos');
        $this->db->where('idventa', $id); 
        $this->db->order_by("idpago","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function check_exist_item($descripcion){
        $this->db->select('*');
        $this->db->from('lista_gastos');
        $this->db->where('descripcion', $descripcion); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }


    //-- get all power
    function get_all_power($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('power_id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener ultimo cierre de caja
    public function ultimo_cierre(){
        $this->db->select('efectivo_real');
        $this->db->from('cierres_de_caja');
        $this->db->order_by("id","DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get all cuotas
    function get_all_cuotas($id){
        $this->db->select();
        $this->db->from('cuotas');
		 $this->db->where('idcredito',$id);
        $this->db->order_by('idcuota','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get all cuotas
    function get_all_pagos($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as cobro_name');
        $this->db->from('pagos u');
        $this->db->join('user c','c.id = u.cobrador','LEFT');
		$this->db->where('idcredito',$id);
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function pagos_cred($id){
        $this->db->select('*');
        $this->db->from('pagos');
        $this->db->where('idcredito',$id);
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get logged user info
    function get_user_info(){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get info del clliente
    function get_user_info_cliente($id){
        $this->db->select('u.*');
        $this->db->select('c.name as localidad');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id', $id);
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select caja hoy
    function select_caja(){
        $this->db->select('u.*');
        $this->db->select('c.rubro as categoria');
        $this->db->from('caja u');
        $this->db->join('rubros_gastos c','c.id = u.segmento','LEFT');
        $this->db->where('cerrada',0);
        $this->db->where('u.socio',$this->session->userdata('socio'));
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select caja hoy
    function filtro_caja($desde,$hasta,$descripcion,$rubro){
        $this->db->select('u.*');
        $this->db->select('c.rubro as categoria');
        $this->db->from('caja u');
        $this->db->join('rubros_gastos c','c.id = u.segmento','LEFT');
        $this->db->where('u.descripcion',$descripcion);
        $this->db->where('u.segmento',$rubro);
        $this->db->where('u.fecha >=',$desde);
        $this->db->where('u.fecha <=',$hasta);
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select caja hoy
    function filtro_caja_suma($desde,$hasta,$descripcion,$rubro){
        $this->db->where('descripcion',$descripcion);
        $this->db->where('segmento',$rubro);
        $this->db->where('fecha >=',$desde);
        $this->db->where('fecha <=',$hasta);
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->select_sum('importe');
        $query = $this->db->get('caja');
        return $query->result(); 

    }
	
	//-- get cobrador recibo
    function get_cobrador_recibo($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as cobro_name, c.last_name as cobro_apellido');
        $this->db->select('v.first_name as cliente_name, v.last_name as cliente_apellido');
        $this->db->from('pagos u');
        $this->db->join('user c','c.id = u.cobrador','LEFT');
        $this->db->join('user v','v.id = u.user_id','LEFT');
        $this->db->where('u.idcredito', $id);
		$this->db->limit(1);
        $this->db->order_by('c.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get cobrador recibo b
    function get_cobrador_recibo_b($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as cobro_name, c.last_name as cobro_apellido');
		$this->db->select('v.first_name as cliente_name, v.last_name as cliente_apellido');
        $this->db->from('pagos u');
        $this->db->join('user c','c.id = u.cobrador','LEFT');
		$this->db->join('user v','v.id = u.user_id','LEFT');
        $this->db->where('u.idpago', $id);
        $this->db->order_by('c.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	
	//-- get single user info
    function get_single_user_info($id){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$id);
        $this->db->where('u.socio',$this->session->userdata('socio'));
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get single credito info
    function get_single_credito_info($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.dni as dni, c.direccion as direccion, c.mobile as celular, c.chat_id as chat_id,  c.entre_calles as entre');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->where('u.id',$id);
        $this->db->where('u.socio',$this->session->userdata('dni_socio'));
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get single credito info
    function get_venta_info($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.dni as dni, c.direccion as direccion, c.mobile as celular, c.chat_id as chat_id,  c.entre_calles as entre,  c.country as barrio');
        $this->db->select('k.name as localidad');
        $this->db->from('ventas u');
        $this->db->join('user c','c.id = u.user','LEFT');
        $this->db->join('country k','k.id = c.country','LEFT');
        $this->db->where('u.id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function dato_tabla_campo($id,$table,$campo){
        $this->db->select();
        $this->db->from($table);
        $this->db->where($campo, $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

	
    //get comisiones a pagar
    function get_comisiones_a_pagar(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido');
        $this->db->select('a.user_id as cliente, a.articulo as articulo, a.cft as cft, a.id as creditonum, a.estado as estado');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.dni as vdni, v.mobile as vcelular');
        $this->db->from('comisionesxventa u');
        $this->db->join('user c','c.id = u.iduser','LEFT');
        $this->db->join('creditos a','a.id = u.idcredito','LEFT');
        $this->db->join('user v','v.id = a.user_id','LEFT');
        $this->db->where('u.pagada',0);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //get comisiones a pagar
    function comisiones_a_pagar_nue(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido');
        $this->db->from('comisionesxventa u');
        $this->db->join('user c','c.id = u.iduser','LEFT');
        $this->db->where('u.pagada',0);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //select cierre de caja y caja
    function last_cierre($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as nombre_oper, c.last_name as apellido_oper');
        $this->db->select('a.id as id_caja, a.fecha as fechar, a.descripcion as descripcion, a.importe as importe, a.movimiento as movimiento, a.forma as forma, a.segmento as categoria');
        $this->db->select('r.rubro as category');
        $this->db->from('cierres_de_caja u');
        $this->db->join('user c','c.id = u.usuario','LEFT');
        $this->db->join('caja a','a.cerrada = u.id','LEFT');
        $this->db->join('rubros_gastos r','r.id = a.segmento','LEFT');
        $this->db->where('u.id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
    //-- get single user info
    function get_user_role($id){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	
	//-- get asi cob
    function get_asig_cob(){
        $this->db->select('c.*');
        $this->db->select('r.dni_autorizado as dni_autorizado');
        $this->db->from('user c');
        $this->db->join('socio r','r.dni_autorizado = c.dni','LEFT');
		$this->db->where('c.cobrador',1);
        $this->db->where('r.dni_socio',$this->session->userdata('socio'));
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- get all users with type 2
    function get_all_user(){
        $this->db->select('u.*');
        $this->db->select('r.dni_autorizado as dni_autorizado, r.dni_socio as dni_socio');
        $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('user u');
        $this->db->join('socio r','r.dni_autorizado = u.dni','LEFT');
		$this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.cliente !=','si');
        $this->db->where('r.dni_socio',$this->session->userdata('socio'));
        $this->db->order_by('u.first_name', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
    //-- get all users with type 2
    function traer_cuotas($id){
        $this->db->select('*');
        $this->db->from('cuotas');
        $this->db->where('idcredito',$id);
        $this->db->where('saldo',0);
        $this->db->limit(1);
        $this->db->order_by('idcuota', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get all clientes
    function get_all_clientes(){
        $this->db->select('u.*');
        $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('user u');
		$this->db->where('u.cliente','si');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get habilitados clientes
    function get_clientes_habilitados(){
        $this->db->select('u.*');
        $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('user u');
        $this->db->where('u.cliente','si');
        $this->db->where('u.calificacion=""');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    function proveedores(){
        $this->db->select();
        $this->db->from('lista_gastos');
        $this->db->where('rubro',11);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- compras y pagos
    function cuentaproveedor($id){
        $this->db->select('u.*');
        $this->db->select('c.id_proveedor as id_proveedorP, c.fecha as fecha_pago, c.fc as fcp, c.importe as pago');
        $this->db->select('p.id, p.descripcion as proveedorName');
        $this->db->from('compras u');
        $this->db->join('pago_proveedores c','c.fc = u.fc','LEFT');
        $this->db->join('lista_gastos p','p.id = u.proveedor','LEFT');
        $this->db->where('u.proveedor', $id);
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.fecha', 'ASC','p.fecha', 'ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	
	 //-- get all creditos
    function get_all_creditos(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
		$this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
		$this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
		$this->db->join('user c','c.id = u.user_id','LEFT');
		$this->db->join('user v','v.id = u.vendedor','LEFT');
		$this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all creditos activos
    function get_creditos_activos(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.estado', 'activo');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- buscador de creditos
    function buscar_creditos($match){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.direccion as direccion, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->like('c.last_name', $match);
        $this->db->or_like('c.first_name', $match);
        $this->db->or_like('c.direccion', $match);
        $this->db->or_like('u.id', $match);
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('c.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- credito unico con contador de cuotas experimental para ver cuotas pagas
    function buscar_creditos12($match){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.direccion as direccion, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->select('(SELECT count(b.idcredito)
                            FROM cuotas 
                            WHERE (b.idcredito = u.id)
                            )
                            AS pagadas',TRUE);
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->join('cuotas b','b.idcredito = u.id','LEFT');
        $this->db->like('c.last_name', $match);
        $this->db->or_like('c.first_name', $match);
        $this->db->or_like('c.direccion', $match);
        $this->db->or_like('u.id', $match);
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('c.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }





    //-- get all creditos finalizados
    function get_creditos_finalizados(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.estado', 'finalizado');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all creditos rechazados
    function get_creditos_rechazados(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.verificado', 'rechazado');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all creditos cancelados
    function get_creditos_cancelados(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.verificado', 'cancelado');
        $this->db->order_by('u.id', 'DESC');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all creditos cancelados
    function creditos_sin_cobrador(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.cobrador', 0);
        $this->db->where('u.verificado', 'aprobado');
        $this->db->where('u.entregado !=', '0000-00-00', FALSE);
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all creditos activos
    function creditos_para_entregar(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.chat_id as chat_id');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->where('u.verificado', 'aprobado');
        $this->db->where('u.entregado', '0000-00-00');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get creditos pendiente
    function get_creditos_pendiente(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.dni as dni, c.country as ulocalidad');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        //$this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        //$this->db->join('country loc','loc.id = ulocalidad','LEFT');
        $this->db->where('u.verificado', 'pendiente');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     //-- get creditos pendiente para verificadores
    function get_creditos_pendiente_verificadores(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.direccion as direccion, c.entre_calles as entrecalles, c.mobile as celular, c.dni as dni, c.country as ulocalidad');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->select('s.first_name as users_name, s.last_name as users_apellido, s.id as users_id');
        $this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->join('user s','s.id = u.verifico','LEFT');
        $this->db->join('country loc','loc.id = c.country','LEFT');
        $this->db->where('u.verificado', 'pendiente');
        $this->db->where('u.socio', $this->session->userdata('socio'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	

    //-- get all creditos por vendedor
    function get_all_vendedor_log(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->where('u.vendedor',$this->session->userdata('id'));
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get single credito
    function get_single_credito($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.direccion as direccion, c.dni as dni, c.mobile as celular, c.entre_calles as entre, c.country as local, c.chat_id as chat_id');
		$this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
		$this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->from('creditos u');
		$this->db->where('u.id',$id);
		$this->db->join('user c','c.id = u.user_id','LEFT');
		$this->db->join('user v','v.id = u.vendedor','LEFT');
		$this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get single credito
    function get_single_credito_row($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular, c.direccion as direccion, c.dni as dni, c.mobile as celular, c.entre_calles as entre, c.country as local, c.chat_id as chat');
        $this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->from('creditos u');
        $this->db->where('u.id',$id);
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get referencia sobre credito
    function get_referencia($id){
        $this->db->select('u.*');
        $this->db->select('c.nombre_r1 as name1, c.telefono_r1 as tel1, c.relacion_r1 as rel1, c.nombre_r2 as name2, c.telefono_r2 as tel2, c.relacion_r2 as rel2, c.nombre_r3 as name3, c.telefono_r3 as tel3, c.relacion_r3 as rel3,c.casa_propia as propia, c.comercio as comer, c.direccion_c as direccion, c.entrecalles_c as entrecalles, c.localidad as localidad, c.antiguedad as antiguedad, c.observaciones as observacion, c.credixsa as credixsa, c.interna as interna');
        $this->db->from('creditos u');
        $this->db->where('u.id',$id);
        $this->db->join('referencias c','c.id_user = u.user_id','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get referencia sobre cliente
    function get_referencia_cliente($id){
        $this->db->select('*');
        $this->db->from('referencias');
        $this->db->where('id_user',$id);
        $this->db->order_by('id_referencia', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

	
	//-- get creditos para vendedores
    function get_creditos_vendedor(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id');
		$this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
        $this->db->from('creditos u');
		$this->db->where('u.vendedor',$this->session->userdata('id'));
		$this->db->join('user c','c.id = u.user_id','LEFT');
		$this->db->join('user v','v.id = u.vendedor','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get creditos para cobradores
    function get_creditos_cobrador(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id');
		$this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->from('creditos u');
		$this->db->where('u.cobrador',$this->session->userdata('id'));
		$this->db->join('user c','c.id = u.user_id','LEFT');
		$this->db->join('user z','z.id = z.cobrador','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	
    //-- contar usuarios activo, inactivo y total
    function get_user_total(){
        $this->db->select('*');
        $this->db->select('count(*) as total');
        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.status = 1)
                            )
                            AS active_user',TRUE);

        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.status = 0)
                            )
                            AS inactive_user',TRUE);

        $this->db->select('(SELECT count(user.id)
                            FROM user 
                            WHERE (user.role = "admin")
                            )
                            AS admin',TRUE);

        $this->db->from('user');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
	
	
	 //-- sumar pagos
    function get_total_pagos($id){
		$this->db->where('idcredito',$id);
        $this->db->where('anticipo',0);
		$this->db->select_sum('importe');
		$query = $this->db->get('pagos');
		return $query->result();

		//$total = $resultado[0]->total;
    }

    //-- sumar total del credito a pagar
    function get_total_a_pagar($id){
        $this->db->where('idcredito',$id);
        $this->db->select_sum('valorcuota');
        $query = $this->db->get('cuotas');
        return $query->result();

        //$total = $resultado[0]->total;
    }

    //-- get asi cob
    function get_idcred_from_pagos($idpago){
        $this->db->select('idcredito');
        $this->db->from('pagos');
        $this->db->where('idpago',$idpago);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- sumar pagos en efectivo
    function suma_caja_e_hoy(){
        $this->db->where('movimiento',1);
        $this->db->where('forma','efectivo');
        $this->db->where('cerrada',0);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->select_sum('importe');
        $query = $this->db->get('caja');
        return $query->result();
    }

    //-- resta salida de efectivo
    function resta_caja_e_hoy(){
        $this->db->where('movimiento',0);
        $this->db->where('forma','efectivo');
        $this->db->where('cerrada',0);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->select_sum('importe');
        $query = $this->db->get('caja');
        return $query->result();
    }

    //-- sumar pagos en mercadopago
    function suma_caja_m_hoy(){
        $this->db->where('movimiento',1);
        $this->db->where('forma','mercadopago');
        $this->db->where('cerrada',0);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->select_sum('importe');
        $query = $this->db->get('caja');
        return $query->result();
    }

    //-- resta salida de mercadopago
    function resta_caja_m_hoy(){
        $this->db->where('movimiento',0);
        $this->db->where('forma','mercadopago');
        $this->db->where('cerrada',0);
        $this->db->where('socio',$this->session->userdata('socio'));
        $this->db->select_sum('importe');
        $query = $this->db->get('caja');
        return $query->result();
    }


    //-- image upload function with resize option
    function upload_image($max_size){
            
            //-- set upload path
            $config['upload_path']  = "./assets/images/";
            $config['allowed_types']= 'gif|jpg|png|jpeg';
            $config['max_size']     = '92000';
            $config['max_width']    = '92000';
            $config['max_height']   = '92000';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload("photo")) {

                
                $data = $this->upload->data();

                //-- set upload path
                $source             = "./assets/images/".$data['file_name'] ;
                $destination_thumb  = "./assets/images/thumbnail/" ;
                $destination_medium = "./assets/images/medium/" ;
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
                $img['thumb_marker'] = '_thumb-'.floor($img['width']).'x'.floor($img['height']) ;
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
                $img['thumb_marker'] = '_medium-'.floor($img['width']).'x'.floor($img['height']) ;
                $img['quality']      = '100%' ;
                $img['source_image'] = $source ;
                $img['new_image']    = $destination_medium ;

                $mid = $data['raw_name']. $img['thumb_marker'].$data['file_ext'];
                // Do Resizing
                $this->image_lib->initialize($img);
                $this->image_lib->resize();
                $this->image_lib->clear() ;

                //-- set upload path
                $images = 'assets/images/medium/'.$mid;
                $thumb  = 'assets/images/thumbnail/'.$thumb_nail;
                unlink($source) ;

                return array(
                    'images' => $images,
                    'thumb' => $thumb
                );
            }
            else {
                echo "Failed! to upload image" ;
            }
            
    }

}