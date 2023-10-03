<?php
class Articulo_model extends CI_Model {


    //-- insert function
    public function insert($data){
        $this->db->insert('articulos',$data);        
        return $this->db->insert_id();
    }

    //-- insert function
    public function insertdt($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    //-- select by id
    function select_option($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('venta', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function select_lider($vend){
        $this->db->select();
        $this->db->from('lider');
        $this->db->where('vendedor', $vend);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }  

    function edit_comisionesV($action, $idventa){
        $this->db->where('idventa', $idventa);
        $this->db->update('comisionesxventa',$action);
        return;
    }

    public function all_list_art(){
        $this->db->select('a.*');
        $this->db->select('m.marca as marca');
        $this->db->select('c.categoria as categoria');
        $this->db->select('s.subcategoria as subcategoria');
        $this->db->select('u.unidad as unidad');
        $this->db->select('t.tipo as tipo');
        $this->db->select('k.caracteristica as caracteristica');
        $this->db->select('p.precio_id as precio_id, p.socio as socio, p.costo as costo, p.markup_pvm as marckupm, p.markup_pvp as marckup, p.pvm as pvm, p.pvp as pvp, p.stock as stock, p.estado as estado, p.online as online');
        $this->db->select('i.id_articulo as id_articulo, i.name as name, i.thumb_name as thumb_name, i.portada as portada');
        $this->db->select('k.caracteristica as caracteristica');
        $this->db->from('articulos a');
        $this->db->join('marcas m','m.id = a.marca','LEFT');
        $this->db->join('categorias c','c.id = a.categoria','LEFT');
        $this->db->join('subcategoria s','s.id = a.subcategoria','LEFT');
        $this->db->join('unidades u','u.id = a.um','LEFT');
        $this->db->join('tipo t','t.id = a.tipo','LEFT');
        $this->db->join('caracteristica k','k.id = a.caracteristica','LEFT');
        $this->db->join('imagen_articulos i','i.id_articulo = a.id','LEFT');
        $this->db->join('precio_producto p','p.articulo_id = a.id','LEFT');
        $this->db->where('p.estado',1);
        $this->db->where('p.socio',$this->session->userdata('socio'));
        $this->db->order_by('a.descripcion','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }



    function get_art_imagen(){
        $this->db->select('*');
        $this->db->from('imagen_articulos');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //lista para vendedores
    public function listavend(){
        $this->db->select('a.*');
        $this->db->select('m.marca as marca');
        $this->db->select('c.categoria as categoria');
        $this->db->select('s.subcategoria as subcategoria');
        $this->db->select('u.unidad as unidad');
        $this->db->select('t.tipo as tipo');
        $this->db->select('k.caracteristica as caracteristica');
        $this->db->select('p.precio_id as precio_id, p.socio as socio, p.costo as costo, p.markup_pvm as marckupm, p.markup_pvp as marckup, p.pvm as pvm, p.pvp as pvp, p.stock as stock, p.estado as estado, p.online as online');
        $this->db->from('articulos a');
        $this->db->join('marcas m','m.id = a.marca','LEFT');
        $this->db->join('categorias c','c.id = a.categoria','LEFT');
        $this->db->join('subcategoria s','s.id = a.subcategoria','LEFT');
        $this->db->join('unidades u','u.id = a.um','LEFT');
        $this->db->join('tipo t','t.id = a.tipo','LEFT');
        $this->db->join('caracteristica k','k.id = a.caracteristica','LEFT');
        $this->db->join('precio_producto p','p.articulo_id = a.id','LEFT');
        $this->db->where('p.estado',1);
        $this->db->where('p.socio', $this->session->userdata('socio'));
        $this->db->order_by('a.descripcion','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //lista ventas no entregadas aun
    public function listaVentas($id){
        $this->db->select('v.*');
        $this->db->select('u.first_name as nombre_vendedor, u.last_name as apellido_vendedor');
        $this->db->select('c.first_name as nombre_cliente, c.last_name as apellido_cliente');
        $this->db->from('ventas v');
        $this->db->join('user u','u.id = v.vendedor','LEFT');
        $this->db->join('user c','c.id = v.user','LEFT');
        $this->db->where('v.situacion', $id);
        $this->db->where('v.socio', $this->session->userdata('socio'));
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

    //-- select MARCA
    function select_marca($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('marca','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select proveedor
    function select_proveedor(){
        $this->db->select();
        $this->db->from('lista_gastos');
        $this->db->where('rubro', 11);
        $this->db->where('ur.user_id', $this->session->userdata('id'));
        $this->db->order_by('descripcion','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 

    /*public function selec_art($id){
        $this->db->select();
        $this->db->from('articulos');
        $this->db->where('id',$id);
        $this->db->order_by('descripcion','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }*/

    public function selec_art($id){
        $this->db->select('a.*');
        $this->db->select('m.marca as marca');
        $this->db->select('c.categoria as categoria');
        $this->db->select('s.subcategoria as subcategoria');
        $this->db->select('u.unidad as unidad');
        $this->db->select('t.tipo as tipo');
        $this->db->select('k.caracteristica as caracteristica');
        $this->db->from('articulos a');
        $this->db->join('marcas m','m.id = a.marca','LEFT');
        $this->db->join('categorias c','c.id = a.categoria','LEFT');
        $this->db->join('subcategoria s','s.id = a.subcategoria','LEFT');
        $this->db->join('unidades u','u.id = a.um','LEFT');
        $this->db->join('tipo t','t.id = a.tipo','LEFT');
        $this->db->join('caracteristica k','k.id = a.caracteristica','LEFT');
        $this->db->where('a.id',$id);
        $this->db->order_by('a.descripcion','ASC');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }
}