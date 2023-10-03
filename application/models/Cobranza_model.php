<?php
class Cobranza_model extends CI_Model {



    //-- get all creditos por cobrador
    function get_all_cobrador(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.direccion as direccion, c.entre_calles as entrecalles, c.mobile as celular, c.chat_id as chat_id, c.country as ulocalidad');
        $this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('country loc','loc.id = c.country','LEFT');
        $this->db->where('u.cobrador',$this->session->userdata('id'));
        $this->db->where('u.estado','activo');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all creditos por cobrador para hoy
    function get_all_cobradorHoy(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.direccion as direccion, c.entre_calles as entrecalles, c.mobile as celular, c.chat_id as chat_id, c.country as ulocalidad');
        $this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('country loc','loc.id = c.country','LEFT');
        $this->db->where('u.cobrador',$this->session->userdata('id'));
        $this->db->where('u.estado','activo');
        $this->db->where('u.rep','CURDATE()', false);
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- buscar creditos por cobrador
    function buscarCredxCob($match){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.direccion as direccion, c.entre_calles as entrecalles, c.mobile as celular, c.chat_id as chat_id, c.country as ulocalidad');
        $this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('country loc','loc.id = c.country','LEFT');
        $this->db->where('u.cobrador',$this->session->userdata('id'));
        $this->db->where('u.estado','activo');
        $this->db->where("(c.last_name LIKE '%".$match."%' OR c.direccion LIKE '%".$match."%')", NULL, FALSE);
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- get all creditos por cobrador
    function clientesporcobrador($cobrador){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.direccion as direccion, c.entre_calles as entrecalles, c.mobile as celular, c.chat_id as chat_id, c.country as ulocalidad');
        $this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('country loc','loc.id = c.country','LEFT');
        $this->db->where('u.cobrador',$cobrador);
        $this->db->where('u.estado','activo');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all contenciosos por cobrador
    function contenciososporcobrador($cobrador){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id, c.direccion as direccion, c.entre_calles as entrecalles, c.mobile as celular, c.chat_id as chat_id, c.country as ulocalidad');
        $this->db->select('loc.name as localidad');
        $this->db->from('creditos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('country loc','loc.id = c.country','LEFT');
        $this->db->where('u.cobrador',$cobrador);
        $this->db->where('u.estado','contencioso');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get all pagos de cuotas
    function get_pagos(){
        $this->db->select();
        $this->db->from('pagos');
        $this->db->where('anticipo',0);
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener pagos x cobrador
    function get_pagosc(){
        $this->db->select();
        $this->db->from('pagos');
        $this->db->where('anticipo',0);
        $this->db->where('cobrador',$this->session->userdata('id'));
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener pagos entrefechas
    function get_pagos_entrefechas($desde,$hasta){
        $this->db->from('pagos');
        $this->db->where('anticipo',0);
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->where('socio', $this->session->userdata('socio'));
        $this->db->select_sum('importe');
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener pagos entrefechas
    function get_disap($desde,$hasta){
        $this->db->from('caja');
        $this->db->where('segmento',12);
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->select_sum('importe');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener pagos entrefechas
    function get_anticipo_entrefechas($desde,$hasta){
        $this->db->from('pagos');
        $this->db->where('anticipo',1);
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->select_sum('importe');
        $this->db->where('socio', $this->session->userdata('socio'));
        $this->db->order_by('idpago','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener pagos entrefechas
    function get_ventas_entrefechas($desde,$hasta){
        $this->db->from('creditos');
        $this->db->where('entregado <>','0000-00-00');
        $this->db->where('entregado >=', $desde);
        $this->db->where('entregado <=', $hasta);
        $this->db->where('socio', $this->session->userdata('socio'));
        $this->db->select_sum('cft');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener reca x cobrador
    function get_reca_efectivo($desde,$hasta,$cobrador){
        $this->db->from('pagos');
        if($cobrador==0){
            $this->db->where('cobrador >=',88);
        }else{
            $this->db->where('cobrador',$cobrador);
        }
        $this->db->where('modo','efectivo');
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->where('socio', $this->session->userdata('socio'));
        $this->db->select_sum('importe');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener reca x cobrador
    function get_reca_mp($desde,$hasta,$cobrador){
        $this->db->from('pagos');
        $this->db->where('modo','mercadopago');
        if($cobrador==0){
            $this->db->where('cobrador >=',88);
        }else{
            $this->db->where('cobrador',$cobrador);
        }
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->select_sum('importe');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- obtener reca x cobrador
    function disap_efectivo_caja($desde,$hasta,$cobrador){
        $this->db->from('caja');
        $this->db->where('descripcion',$cobrador);
        $this->db->where('forma','efectivo');
        $this->db->where('segmento',12);
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->select_sum('importe');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- obtener reca x cobrador
    function disap_mp_caja($desde,$hasta,$cobrador){
        $this->db->from('caja');
        $this->db->where('descripcion',$cobrador);
        $this->db->where('forma','mercadopago');
        $this->db->where('segmento',12);
        $this->db->where('fecha >=', $desde);
        $this->db->where('fecha <=', $hasta);
        $this->db->select_sum('importe');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     //-- obtener pagos entrefechas
    function contar_ventas_entrefechas($desde,$hasta){
        $this->db->select('*');
        $this->db->from('creditos');
        $this->db->where('entregado <>','0000-00-00');
        $this->db->where('entregado >=', $desde);
        $this->db->where('entregado <=', $hasta);     
        $query = $this->db->count_all_results(); 
        return $query;
    }

    //-- obtener pagos entrefechas
    function contar_rechazos_entrefechas($desde,$hasta){
        $this->db->select('*');
        $this->db->from('creditos');
        $this->db->where('entregado','0000-00-00');
        $this->db->where('creado >=', $desde);
        $this->db->where('creado <=', $hasta); 
        $this->db->where('verificado', 'rechazado');    
        $query = $this->db->count_all_results();
        return $query;
    }

    //-- obtener pagos entrefechas
    function contar_cancelados_entrefechas($desde,$hasta){
        $this->db->select('*');
        $this->db->from('creditos');
        $this->db->where('entregado','0000-00-00');
        $this->db->where('creado >=', $desde);
        $this->db->where('creado <=', $hasta); 
        $this->db->where('verificado', 'cancelado');    
        $query = $this->db->count_all_results();
        return $query;
    }

    //-- get cuotas a pagar
    function get_cuotas_a_pagar(){
        $this->db->select();
        $this->db->from('cuotas');
        $this->db->where('pagada','no');
        $this->db->order_by('idcuota','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get cuotas a pagar
    function traerArticulos(){
        $this->db->select();
        $this->db->from('stock');
        $this->db->where('id_credito <>', 0);
        $this->db->where('fecha <>',0000-00-00);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- racaudacion x dia x cobrador
    function get_pagos_dia_cob($cob,$fecha){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id');
        $this->db->select('z.first_name as userz_name, z.last_name as userz_apellido, z.id as userz_id');
        $this->db->from('pagos u');
        $this->db->join('user c','c.id = u.user_id','LEFT');
        $this->db->join('user z','z.id = u.cobrador','LEFT');
        $this->db->where('u.cobrador',$cob);
        $this->db->where('u.fecha',$fecha);
        $this->db->where('u.anticipo',0);
        $this->db->order_by('u.idpago', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

     //-- sumar pagos en efectivo
    function get_subtotales_ft($cob,$fecha){
        $this->db->where('cobrador',$cob);
        $this->db->where('fecha',$fecha);
        $this->db->where('modo','efectivo');
        $this->db->where('anticipo','0');
        $this->db->select_sum('importe');
        $query = $this->db->get('pagos');
        return $query->result();

        
    }

    //-- sumar pagos en mercadopago
    function get_subtotales_mp($cob,$fecha){
        $this->db->where('cobrador',$cob);
        $this->db->where('fecha',$fecha);
        $this->db->where('modo','mercadopago');
        $this->db->where('anticipo','0');
        $this->db->select_sum('importe');
        $query = $this->db->get('pagos');
        return $query->result();

    }


    public function check_anticipo($id){
        //$this->db->select('*');
        //$this->db->from('pagos');
        $this->db->where('idcredito', $id);
        $this->db->where('anticipo', 1); 
        $this->db->select_sum('importe');
        $query = $this->db->get('pagos');
        return $query->result();
        /*
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result_array();
        }else{
            return false;
        }*/
    }

    public function check_ing_caja($cob,$fecha){
        $this->db->select('*');
        $this->db->from('caja');
        $this->db->where('cobrador', $cob); 
        $this->db->where('cobrado', $fecha);
        $query = $this->db->get();
        if($query->num_rows() == 2) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    public function check_cob_rendida($cob){
        $this->db->select('*');
        $this->db->from('caja');
        $this->db->where('cobrador', $cob); 
        $this->db->where('cobrado', 'CURDATE()', false);
        $query = $this->db->get();
        if($query->num_rows() == 2) {                 
            return $query->result_array();
        }else{
            return false;
        }
    }

    //-- comisiones a pagar
    function get_comisiones_a_pagar(){
        $this->db->select('u.*');
        $this->db->select('c.first_name as user_name, c.last_name as user_apellido, c.id as user_id');
        $this->db->select('b.articulo as articulo, b.cft as cft');
        $this->db->from('comisionesxventa u');
        $this->db->join('user c','c.iduser = u.user_id','LEFT');
        $this->db->join('creditos b','');
        $this->db->where('u.cobrador',$cob);
        $this->db->where('u.fecha',$fecha);
        $this->db->order_by('u.idpago', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    
}