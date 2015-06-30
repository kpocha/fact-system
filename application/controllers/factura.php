<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Factura extends CI_Controller {

 public function __construct()
 {

 	parent::__construct();
 	//Cargamos el modelo para poder trabajar con los datos del motor de
 	//bases de ddatos
		$this->load->helper('form');
		$this->load->model('abm_model');
 	 
 }
 public function index()
	{
		//lo primero que hacemos al entrar a facturacion es listar
		//enviamos al método listar
		$this->formulario();
	}
 public function formulario()
 {	//Le asignamos el titulo a la vista
 	$result['title']="factura N°123456";
 	//llamo a la vista
 	$result['main_content']= "factura";
 	//llamo a la plantilla y le mando datos
 	$this->load->view('main_template',$result); 
 }
 function stock(){
 	$search = trim($_GET['search']);
 	$data = $this->abm_model->buscar('stock',$search);
 	//echo json_encode($data[0]->descripcion);
	foreach ($data as $stock)
	{
        $tmpArray[] = $stock->descripcion;
	}
	//$tmpArray=array("fenet","hola","puto");
	//$tmpArray["fenet","hola","puto"];
	$result = $tmpArray;
	echo json_encode($result);
	/*
		function buscar($tabla, $buscar){
      //$buscar = '%'.$buscar.'%';
      //$this->db->select('descripcion');
      $this->db->from($tabla);
      $this->db->like('descripcion',$buscar);
      
      $query = $this->db->get();
      return $query->result();
    }
	*/
 }
}
?>