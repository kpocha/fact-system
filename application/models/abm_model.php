<?php 
class Abm_model extends CI_Model {

function __construct()
    {
        parent::__construct();
    }
    function listar($tabla)
    { 
       $sql = $this->db->get($tabla);
        return $sql->result();
    }
    function listar_personas($tipo, $tabla)
    {
      $this->db->where('tipo_persona',$tipo);
      $sql = $this->db->get($tabla);
      return $sql->result();
    }
   function agregar($tabla, $data){
    $this->db->insert($tabla,$data);
       
    }
   function modificar($id,$campoid,$tabla,$data){
      $this->db->where($campoid,$id);
      $sql= $this->db->update($tabla,$data);
      
    }
    function eliminar($id,$campoid,$tabla){
       $this->db->where($campoid,$id);
      $sql= $this->db->delete($tabla);
      
    }
    function utimos_10_registro($tabla)
    {
        $query = $this->db->get($tabla, 10);
        return $query->result();
    }
    function registro_especifico($id,$campoid,$tabla)
    {
      $this->db->where($campoid,$id);
      $registro = $this->db->get($tabla);
      $resultado = $registro -> result();
      return $resultado;
    }
    function buscarpersona($tabla,$palabra,$tipo_persona){
      $this->db->where('tipo_persona',$tipo_persona);
      $this->db->like('razon_social',$palabra);
      $sql = $this->db->get('personas');
      return $sql -> result();
    }
    
    function buscar($tabla, $buscar, $colum){
      //$buscar = '%'.$buscar.'%';
      //$this->db->select('descripcion');
      $this->db->from($tabla);
      $this->db->like($colum,$buscar);
      
      $query = $this->db->get();
      if ($query->result() == NULL) return false;
      else return $query->result();
      
      
    }

} 
 ?>