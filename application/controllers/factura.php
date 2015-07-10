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
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->formulario();
		}else{
			redirect('/login', 'refresh');
		}
		
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
 	$search = $_GET['search'];
 	$data = $this->abm_model->buscar('stock',$search,'descripcion');
 	if ($data == false) {
 		$tmpArray[] = NULL;
 		echo json_encode($tmpArray);
 	}else{
		foreach ($data as $stock)
		{
	        $tmpArray[] = $stock;
	        $descripcion = $stock->descripcion;
		}

		echo json_encode($tmpArray);
		return $tmpArray;
		 }
	}
	function stock_datos(){
		$cod = $_GET['cod'];
		$data = $this->abm_model->buscar('stock',$cod,'cod_articulo');
		foreach ($data as $stock)
		{
			$tmpArray[] = $stock;
			$codigo[] = $stock->cod_articulo;

		}
		//echo json_encode($tmpArray);
		//echo json_encode($codigo);
		$result['data'] = $tmpArray;
		echo json_encode($tmpArray);
		return $tmpArray;

	}
}
?>