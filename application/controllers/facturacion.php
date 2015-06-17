<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facturacion extends CI_Controller {

 public function __construct()
 {

 	parent::__construct();
 	//Cargamos el modelo para poder trabajar con los datos del motor de
 	//bases de ddatos
		$this->load->model('FacturaA_model');
		$this->load->helper('form');
	
 	 
 }
 public function index()
	{
		//lo primero que hacemos al entrar a facturacion es facturacion
		//enviamos al método facturacion
		$this->formulario();
	}
 public function formulario()
 {	//Le asignamos el titulo a la vista
 	$result['title']="Cargar una factura";
 	//llamo a la vista
 	$result['main_content']= "FormularioFactA";
 	//llamo a la plantilla y le mando datos
 	$this->load->view('main_template',$result); 
 }
public function listar()
	{
		//Llamamos al metodo listar del modelo
		$facturaa = $this->FacturaA_model->listar();
		//Recorremos el resultado del modelo
		foreach ($facturaa as $key) {
			$data[] = $key;
		}
		
		$result['title'] = 'Facturación';
		$result['main_content'] = 'containertablafact';
		$result['data'] = $data;
		$this->load->view('main_template',$result);
	}
	public function nuevo(){
		//Traemos lo que nos manda la vista en metodo post
		extract($_POST);
		//asignamos las variables a los campos de las tablas
		$data = array('RazonSocial' => $RazonSocial,
					  'Domicilio' => $Domicilio,
					  'Telefono' => $Telefono,
					  'Cuit' => $Cuit);
		/*Cargamos la funcion agregar, enviamos el nombre de la 
		tabla en la que trabajamos, el array con los datos	*/		  
 		$this->FacturaA_model->agregar('facta',$data);
        //cuando guarda en la BD, va a listar
 		redirect('/facturacion/listar');

		//$Cuit = $this->FacturaA_model->ultimo_agregado('facta');

 		//$this->listar();
	}
public function modificar(){
		extract($_GET);
		$facturaa = $this->FacturaA_model->factura_especifica($Cuit);
		$result['title'] = 'Formulario';
		$result['main_content'] = 'FormularioFactA';
		$result['data'] = $facturaa;
		//o json_encode($result);
		$this->load->view('main_template',$result);
	}
	public function modif(){
		echo "modif";
		extract($_POST);
		$data = array('RazonSocial' => $RazonSocial,
					  'Domicilio' => $Domicilio,
					  'Telefono' => $Telefono,
					  'Cuit' => $Cuit);

 		$this->FacturaA_model->modificar('facta',$data, $Cuit);
 		
 		$this->listar();
	}
	/*public function buscar(){
		extract($_POST);
		$q = "%".$q."%";
		$busqueda = $this->abm_model->buscar($q);
		//echo json_encode($busqueda);
		$result['data'] = $busqueda;
		$this->load->view('tabla-clientes',$result);

	}*/
/*	public function eliminar(){
		$uid = $_GET['uid'];
		$this->abm_model->eliminar($uid);
		$this->listar();
	}*/

	/*public function mostrar(){
		$uid = $_GET['uid'];
		$cliente = $this->abm_model->cliente_especifico($uid);
		foreach ($cliente as $clie) {
			$nombre = $clie->nombre;
		}
		$comentario = $this->abm_model->comentario($uid);

		$result['title'] = 'Cliente: '.$nombre;
		$result['main_content'] = 'cliente_especifico';
		$result['data'] = $cliente;
		$result['comentario'] = $comentario;

		//echo json_encode($result);

		$this->load->view('main_template',$result);
	}*/
	/*public function prueba(){
      echo "Esto es una prueba";
	}*/
//}

}
?>