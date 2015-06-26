<?php 
class Login_model extends CI_Model {

 function __construct()
    {

        parent::__construct();
    }
    function obtener_usuario($tabla,$dato)
      { 
        $this->db->where('user', $dato);
        $sql = $this->db->get($tabla);
        return $sql->result();
      }

  

} 
 ?>