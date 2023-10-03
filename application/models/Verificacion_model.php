<?php
class Verificacion_model extends CI_Model {


function busquedaVeriUno($search){
$this->db->select('c.dni, c.first_name, c.last_name, c.direccion, c.country, c.calificacion, MATCH (direccion) AGAINST ("'.$search.'") AS relevance', FALSE);
$this->db->select('l.id, l.name as localidad, MATCH (direccion) AGAINST ("'.$search.'") AS relevance', FALSE);
$this->db->join('country l', 'c.country = l.id');
$this->db->where('MATCH (direccion) AGAINST ("'.$search.'" IN BOOLEAN MODE)', NULL, false);
$this->db->from("user c");
$this->db->limit(10);
$query = $this->db->get();
$query = $query->result_array();  
return $query;
}

function select_option_var($id,$table,$campo){
        $this->db->select('a.*');
        $this->db->select('c.idcuota as idcuota, c.cuotanumero as cuotanumero, c.idcredito as idcredito, c.vence as vence, c.pagada as paga, c.saldo as saldo');
        $this->db->from($table.' a');
        $this->db->join('cuotas c','c.idcredito = a.id','LEFT');
        $this->db->where($campo, $id);
        $this->db->where('c.pagada', 'no');
        $this->db->order_by("id","DESC");
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

//-- select by id
    function solicitudes($id){
        $this->db->select('id, estado, saldo, ultimopago');
        $this->db->from('creditos');
        $this->db->where('user_id', $id);
        $this->db->order_by("id","ASC");
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function buscar_telefono($telefono){
        $this->db->select();
        $this->db->from('referencias');
        $this->db->like('telefono_r1', $telefono);
        $this->db->or_like('telefono_r2', $telefono);
        $this->db->or_like('telefono_r3', $telefono);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

///////////////////////////////////////////////////////////fin class////////////////
}