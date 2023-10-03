<?php
class Cliente_model extends CI_Model {



    public function mis_creditos(){
        $this->db->select();
        $this->db->from('creditos');
        $this->db->where('user_id',$this->session->userdata('id'));
        $this->db->where('estado','activo');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function mis_creditos_finalizados(){
        $this->db->select();
        $this->db->from('creditos');
        $this->db->where('user_id',$this->session->userdata('id'));
        $this->db->where('estado','finalizado');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- edit function
    function edit_option($action, $id){
        $this->db->where('id',$id);
        $this->db->update('articulos',$action);
        return;
    }

    public function selec_cuotas($id){
        $this->db->select();
        $this->db->from('cuotas');
        $this->db->where('idcredito',$id);
        $this->db->order_by('idcuota','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    public function selec_pagos($id){
        $this->db->select();
        $this->db->from('pagos');
        $this->db->where('idcredito',$id);
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     //-- buscador de clientes para nueva solicitud
    function buscar_clientePaSo($match){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role =','cliente');
        $this->db->like('last_name', $match);
        $this->db->or_like('dni', $match);
        //$this->db->or_like('direccion', $match);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- buscador de clientes para nueva solicitud
    function buscar_cliente($match){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role =','cliente');
        $this->db->like('last_name', $match);
        $this->db->or_like('dni', $match);
        //$this->db->or_like('direccion', $match);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
}