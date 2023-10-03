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
        $this->db->update($table,$action);
        return;
    } 
	
	//-- edit cuota pagada
    function edit_cuota_p($action, $id, $table){
        $this->db->where('idcuota',$id);
       $this->db->update($table,$action);
        return;
    } 
	
	//-- edit cuotas
    function edit_cuotas($action, $id,  $i, $table){
        $this->db->where('idcredito',$id);
		$this->db->where('cuotanumero',$i);
        $this->db->update($table,$action);
        return;
    } 

    //-- update function
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    //-- delete function
    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
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

    //-- select by id
    function select_option($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
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
	
	//-- select cobrador action
    function select_cobrador_rol($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('action', $id);
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
            return $query->result();
        }else{
            return false;
        }
    }

    public function check_exist_power($id){
        $this->db->select('*');
        $this->db->from('user_power');
        $this->db->where('power_id', $id); 
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
	
	//-- get cobrador recibo
    function get_cobrador_recibo($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as cobro_name, c.last_name as cobro_apellido');
        $this->db->from('pagos u');
        $this->db->join('user c','c.id = u.cobrador','LEFT');
        $this->db->where('u.idpago', $id);
        $this->db->order_by('u.id','DESC');
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
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get single credito info
    function get_single_credito_info($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.dni as dni');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->where('u.id',$id);
        $query = $this->db->get();
        $query = $query->row();  
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
        $this->db->select();
        $this->db->from('user');
		$this->db->where('cobrador',1);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- get all users with type 2
    function get_all_user(){
        $this->db->select('u.*');
        $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('user u');
		$this->db->join('country c','c.id = u.country','LEFT');
        $this->db->order_by('u.id', 'DESC');
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
	
	
	 //-- get all creditos
    function get_all_creditos(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular');
		$this->db->select('v.first_name as userv_name, v.last_name as userv_apellido, v.id as userv_id');
		$this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->from('creditos u');
		$this->db->join('user c','c.id = u.user_id','LEFT');
		$this->db->join('user v','v.id = u.vendedor','LEFT');
		$this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
	
	//-- get single credito
    function get_single_credito($id){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.mobile as celular');
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
		$this->db->select_sum('importe');
		$query = $this->db->get('pagos');
		return $query->result();

		//$total = $resultado[0]->total;
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