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


   function agregar($tabla, $data){
    $this->db->insert($tabla,$data);
    //Por si necesitas saber el id del que acabas de insertar.
    $last_id = $this->db->insert_id();
    //return $last_id;       
    }
   /*function modificar($tabla,$data, $Cuit){

      $this->db->where('Cuit',$Cuit);
      $sql= $this->db->update($tabla,$data);
      
    }
   
    public function eliminar($tabla,$Cuit){
       $this->db->where('Cuit',$Cuit);
      $sql= $this->db->delete($tabla);
      
    }*/
    function utimos_10_registro($tabla)
    {
        $query = $this->db->get($tabla, 10);
        return $query->result();
    }
    function buscar($tabla, $buscar){
      //$buscar = '%'.$buscar.'%';
      //$this->db->select('descripcion');
      $this->db->from($tabla);
      $this->db->like('descripcion',$buscar);
      
      $query = $this->db->get();
      return $query->result();
    }

} 
 ?>