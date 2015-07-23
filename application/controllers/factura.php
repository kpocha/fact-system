<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Factura extends CI_Controller {

 public function __construct()
 {

 	parent::__construct();
 	//Cargamos el modelo para poder trabajar con los datos del motor de
 	//bases de ddatos
		$this->load->helper('form');
		$this->load->model('factura_model');
		$this->load->model('abm_model');
 	 
 }
 public function index()
	{
		//lo primero que hacemos al entrar a facturacion es listar
		//enviamos al método listar
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->listar();
		}else{
			redirect('/login', 'refresh');
		}
	}
 public function listar()
 {	//Llamamos al metodo listar del modelo
	$facturaa = $this->factura_model->listar();
	//Recorremos el resultado del modelo
	if (isset($facturaa)) {
		foreach ($facturaa as $key) {
			$data[] = $key;
		}
		$result['data'] = $data;
	}
	//echo json_encode($data);
	$result['title']="Facturas";
	$result['main_content']= "containertablafact";
 	//llamo a la plantilla y le mando datos
 	$this->load->view('main_template',$result); 
	//echo json_encode($result);
	
	//$result['title'] = 'Clientes';
	//$result['main_content'] = 'containertablapersonas';
	//$result['persona_tipo'] = 'Cliente';
	//$this->load->view('main_template',$result);
 }
 public function formulario()
 {	
 	$hola = $this->abm_model->utimoregistro('fact_cabecera');
 	$empresa = array( 
 						'domicilio' => 'Olascoaga 1142',
 						'tel' => 'Tel/Fax: (2604) 4435622',
 						'localidad' => '5600 - San Rafael - Mendoza',
 						'cuit_empresa' => '8-37382837-32',
 	 					'ingbrutos' =>  '123635',
 	 					'inicio_actividad' => '13/01/1991',
 	 					'establacimiento' => '54-823-21',
 	 					'timbrado' => '55',
 	 					'ultimo' => $hola[0]->ultimo);
 	//echo json_encode($empresa);
 	
 	$result['data'] = $empresa;
 	//Le asignamos el titulo a la vista
 	$result['title']="Facturas";
 	//llamo a la vista
 	$result['main_content']= "factura";
 	//llamo a la plantilla y le mando datos
 	$this->load->view('main_template',$result); 
 	//echo json_encode($result);
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
		//return $tmpArray;
		 }
 }
 function stock_datos(){
	$cod = $_GET['cod'];
	$data = $this->abm_model->buscar('stock',$cod,'cod_articulo');
	if ($data == false) {
 		@$tmpArray[0]->precio_unit = '';
 		@$tmpArray[0]->descripcion = '';
 		echo json_encode($tmpArray);
 	}else{
		foreach ($data as $stock)
		{
			$tmpArray[] = $stock;
			$codigo[] = $stock->cod_articulo;

		}
		//echo json_encode($tmpArray);
		//echo json_encode($codigo);
		$result['data'] = $tmpArray;
		echo json_encode($tmpArray);
		//return $tmpArray;
	}

 }
	function about(){
		

	}
}
?>