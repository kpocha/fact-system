  <?php 
class Abm_model extends CI_Model {

   function __construct()
    {
        parent::__construct();
    }

    function listar()
    { 
       // $this->db->where('idlibros',$id);
       // $sql = $this->db->get('clientes');
        $sql = $this->db->query('SELECT c.uid, c.nombre, c.telefono, c.email, c.fuente, c.area, c.status, c.marital, c.trabajo, c.anos_trabajo, c.income, c.credit, c.payment, c.rent, a.detalle as actividad, p.detalle as prestamo, ac.detalle as action FROM clientes as c INNER JOIN actividad as a ON c.id_actividad = a.id_actividad
        INNER JOIN prestamo as p ON p.id_prestamo = c.id_prestamo 
        INNER JOIN action as ac ON ac.id_action = c.id_action');
        return $sql->result();
    }

    function agregar($tabla, $data){
      $this->db->insert($tabla,$data);
    }
    //Chequear este metodo ya que por logica no puede andar como debe.
    function modificar($tabla,$data, $id){
      $this->db->where('uid',$id);
      $this->db->update($tabla,$data);
    }
    public function cliente_especifico($uid){
      //$this->db->where('uid',$uid);
      //$sql = $this->db->get('clientes');
      $this->db->where('uid',$uid);
      $marital = $this->db->get('clientes');

      $resultado = $marital -> result();
      foreach ($resultado as $res) {
        $casado = $res->marital;
      }
        $esposa = ($casado == 'Married')   ? ", e.status as e_status, e.tax as e_tax, e.pago as e_pago, e.2014 as e_2014, e.2013 as e_2013, e.credito as e_credito" : '';
        $inneresposa = ($casado == 'Married') ? "INNER JOIN esposa as e  ON e.uid = c.uid" : '';
      
        $consulta = "SELECT c.uid, c.nombre, c.telefono, c.email, c.fuente, c.area, c.status,c.marital,
        c.trabajo, c.anos_trabajo, c.metodo_pago, c.income, c.credit, c.payment, c.rent,
        c.ganado_2013, c.ganado_2014, c.dia_hable, c.dia_llamar, c.vencimiento, c.pisos, c.tax,    
        c.alternativa_credito, c.id_prestamo, c.id_actividad, c.id_action, c.habitaciones,
        a.detalle as actividad, p.detalle as prestamo, ac.detalle as action
        $esposa 
        FROM clientes   as c 
        INNER JOIN actividad  as a  ON c.id_actividad = a.id_actividad
        INNER JOIN prestamo   as p  ON p.id_prestamo = c.id_prestamo 
        INNER JOIN action     as ac ON ac.id_action = c.id_action
        $inneresposa
        WHERE c.uid = '$uid'";
        $sql = $this->db->query( $consulta );
      return $sql -> result();
    }
    public function buscar($palabra){
      $sql = $this->db->query("SELECT c.uid, c.nombre, c.telefono, c.email, c.fuente, c.area, c.status, c.marital, c.trabajo, c.anos_trabajo, c.income, c.credit, c.payment, c.rent, a.detalle as actividad, p.detalle as prestamo, ac.detalle as action FROM clientes as c INNER JOIN actividad as a ON c.id_actividad = a.id_actividad
        INNER JOIN prestamo as p ON p.id_prestamo = c.id_prestamo 
        INNER JOIN action as ac ON ac.id_action = c.id_action 
        WHERE c.nombre LIKE '$palabra' OR p.detalle LIKE '$palabra'");
      return $sql -> result();
    }
    public function eliminar($uid){
      $this->db->query("DELETE FROM clientes WHERE uid = '$uid'");
      
    }
    function ultimo_agregado($tabla){
      return $this->db->insert_id();
    }
    function comentario($uid){
     $sql = $this->db->query("SELECT * FROM comentarios where uid = '$uid'");
      return $sql->result();
    }
} 
 ?>