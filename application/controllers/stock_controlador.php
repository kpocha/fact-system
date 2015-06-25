<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_controlador extends CI_Controller {

 public function __construct()
 {

 	parent::__construct();
 	//Cargamos el modelo para poder trabajar con los datos del motor de
 	//bases de ddatos
		$this->load->model('stock_model');
		$this->load->helper('form');
	
 	 
 }
 public function index()
	{
		//lo primero que hacemos al entrar al controlador es listar
		//enviamos al método listar
		$this->listar();
	}
 public function formulario()
 {	//Le asignamos el titulo a la vista
 	$result['title']="Cargar un artículo";
 	//llamo a la vista
 	$result['main_content']= "stock_formulario";
 	//llamo a la plantilla y le mando datos
 	$this->load->view('main_template',$result); 
 }
public function listar()
	{
		//Llamamos al metodo listar del modelo
		$articulo = $this->stock_model->listar();
		//Recorremos el resultado del modelo
		foreach ($articulo as $key) {
			$data[] = $key;
		}
		
		$result['title'] = 'Control de Stock';
		$result['main_content'] = 'stock_tablacontainer';
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
 		$this->Facturaa_model->agregar('facta',$data);
        //cuando guarda en la BD, va a listar
 		redirect('/facturacion/listar');

		//$Cuit = $this->Facturaa_model->ultimo_agregado('facta');

 		//$this->listar();
	}
public function modificar(){
		extract($_GET);
		echo $Cuit;
		$facturaa = $this->Facturaa_model->factura_especifica($Cuit);
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

 		$this->Facturaa_model->modificar('facta',$data, $Cuit);
 		
 		$this->listar();
	}
	public function buscar(){
		extract($_POST);
		
		$busqueda = $this->Facturaa_model->buscar('facta',$q);
		
		$result['data'] = $busqueda;
		$this->load->view('tablafacturaa',$result);

	}
	public function eliminar(){
		$Cuit = $_GET['Cuit'];
		$this->Facturaa_model->eliminar('facta',$Cuit);
		$this->listar();
	}

	/*public function mostrar(){
		$Cuit = $_GET['Cuit'];
		$facturaa = $this->Facturaa_model->factura_especifica($Cuit);
		foreach ($facturaa as $fac) {
			$nombre = $facturaa->RazonSocial;
		}
		//$comentario = $this->abm_model->comentario($uid);

		$result['title'] = 'RazonSocial: '.$nombre;
		$result['main_content'] = 'factura_especifica';
		$result['data'] = $facturaa;
		//$result['comentario'] = $comentario;

		//echo json_encode($result);

		$this->load->view('main_template',$result);
	}*/
	/*public function prueba(){
      echo "Esto es una prueba";
	}*/
//}

}
?>