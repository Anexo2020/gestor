<?php
class Login_model extends CI_Model {

    public function edit_option_md5($action, $id, $table){
        $this->db->where('md5(id)',$id);
        $this->db->update($table,$action);
        return;
    }

    //-- check post email
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


    // check valid user by id
    public function validate_id($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('md5(id)', $id); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query -> num_rows() == 1){                 
            return $query->result();
        }
        else{
            return false;
        }
    }



    //-- check valid user
    function validate_user(){            
        
        $this->db->select('a.*');
        $this->db->select('s.dni_socio as dni_socio, s.dni_autorizado as dni_autorizado, s.usuario as socio_name');
        $this->db->from('user a');
        $this->db->join('socio s','s.dni_autorizado = a.dni','LEFT');
        $this->db->where('a.dni', $this->input->post('user_name')); 
        $this->db->where('s.dni_autorizado', $this->input->post('user_name'));
        $this->db->where('a.status', 0);
        $this->db->where('a.password', md5($this->input->post('password')));
        $this->db->limit(1);
        $query = $this->db->get();   
        
        if($query->num_rows() == 1){                 
           return $query->result();
        }
        else{
            return false;
        }
    }



}