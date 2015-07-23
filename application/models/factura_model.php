<?php 
class Factura_model extends CI_Model {

 function __construct()
    {

        parent::__construct();
    }

    function listar()
    { 
        //Esto equivale a un SELECT * FROM FACTA
      $this->db->select('*');
      $this->db->from('fact_cabecera');
      $this->db->join('personas','fact_cabecera.id_persona = personas.personas_id');
       $sql = $this->db->get();

       //$this->db->where('Cuit',$Cuit);
       
        return $sql->result();
    }

   function agregar($tabla, $data){
    //no se como, pero hace el insert asi
    $this->db->insert($tabla,$data);
    //$this->db->query('INSERT INTO  `sistema_clientes`.`facta` (`Razon Social` , `Domicilio` , `Cuit` , `Telefono` , `Tipo_cbte` ) VALUES ("'.$RazonSocial.'",  "'.$Domicilio.'",  "'.$Cuit.'",  "'.$Telefono.'", "");'
    // );
       
    }
   function modificar($tabla,$data, $Cuit){
      $this->db->where('Cuit',$Cuit);
      $sql= $this->db->update($tabla,$data);
      
    }
    public function factura_especifica($Cuit){
      //Hace la consulta a la base de datos
      $this->db->where('Cuit',$Cuit);
      $estafactura = $this->db->get('facta');

      $resultado = $estafactura -> result();
      return $resultado;
    }
    public function buscar($tabla,$palabra){
      $this->db->like('RazonSocial',$palabra);
      $sql = $this->db->get('facta');
       /* $this->db->query("SELECT c.uid, c.nombre, c.telefono, c.email, c.fuente, c.area, c.status, c.marital, c.trabajo, c.anos_trabajo, c.income, c.credit, c.payment, c.rent, a.detalle as actividad, p.detalle as prestamo, ac.detalle as action FROM clientes as c INNER JOIN actividad as a ON c.id_actividad = a.id_actividad
        INNER JOIN prestamo as p ON p.id_prestamo = c.id_prestamo 
        INNER JOIN action as ac ON ac.id_action = c.id_action 
        WHERE c.nombre LIKE '$palabra' OR p.detalle LIKE '$palabra'");*/
      return $sql -> result();
    }
    public function eliminar($tabla,$Cuit){
       $this->db->where('Cuit',$Cuit);
      $sql= $this->db->delete($tabla);
      // Es como hacer: $this->db->query("DELETE FROM facta WHERE Cuit = '$Cuit'");
      
    }/*
    function ultimo_agregado($tabla){
      return $this->db->insert_id();
    }
    function comentario($uid){
     $sql = $this->db->query("SELECT * FROM comentarios where uid = '$uid'");
      return $sql->result();
    }*/
} 
 ?>