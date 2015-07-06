<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personas extends CI_Controller {

 public function __construct()
 {

 	parent::__construct();
 	//Cargamos el modelo para poder trabajar con los datos del motor de
 	//bases de ddatos
		$this->load->model('abm_model');
		$this->load->helper('form');
	
 	 
 }
 public function index()
	{
		//lo primero que hacemos al entrar a facturacion es listar
		//enviamos al método listar
		$this->listar_clientes();
	}
public function listar_clientes()
	{
		//Llamamos al metodo listar del modelo
		$facturaa = $this->abm_model->listar_personas('Cliente', 'personas');
		//Recorremos el resultado del modelo
		if (isset($facturaa)) {
			foreach ($facturaa as $key) {
				$data[] = $key;
			}
		$result['data'] = $data;
		}
			
		
		$result['title'] = 'Clientes';
		$result['main_content'] = 'containertablapersonas';
		$result['persona_tipo'] = 'Cliente';
		$this->load->view('main_template',$result);
	}
public function listar_proveedores()
	{
		//Llamamos al metodo listar del modelo
		$facturaa = $this->abm_model->listar_personas('Proveedor', 'personas');
		//Recorremos el resultado del modelo
		foreach ($facturaa as $key) {
			$data[] = $key;
		}
		
		$result['title'] = 'Proveedores';
		$result['main_content'] = 'containertablapersonas';
		$result['data'] = $data;
		$result['persona_tipo'] = 'Proveedor';
		$this->load->view('main_template',$result);
	}	
 public function formulario()
 {
 	extract($_GET);
 	//Le asignamos el titulo a la vista
 	$result['title']="Nuevo Registro";
 	//llamo a la vista
 	$result['main_content']= "formulariopersonas";
 	$result['persona_tipo'] = $persona_tipo;
 	//llamo a la plantilla y le mando datos
 	$this->load->view('main_template',$result); 
 }

	public function nuevo_cliente(){
		//Traemos lo que nos manda la vista en metodo post
		extract($_POST);
		//asignamos las variables a los campos de las tablas
		$data = array('razon_social' => $razon_social,
					  'domicilio' => $domicilio,
					  'telefono' => $telefono,
					  'cuit' => $cuit,
					  'email' => $email,
					  'localidad' => $localidad,
					  'iva_tipo' => $iva_tipo,
					  'tipo_persona' => 'Cliente');
		/*Cargamos la funcion agregar, enviamos el nombre de la 
		tabla en la que trabajamos, el array con los datos	*/		  
 		$this->abm_model->agregar('personas',$data);
        //cuando guarda en la BD, va a listar
 		redirect('/personas/listar_clientes');

		//$Cuit = $this->Facturaa_model->ultimo_agregado('facta');


 		//$this->listar();
	}
	public function nuevo_proveedor(){
		//Traemos lo que nos manda la vista en metodo post
		extract($_POST);
		//asignamos las variables a los campos de las tablas
		$data = array('razon_social' => $razon_social,
					  'domicilio' => $domicilio,
					  'telefono' => $telefono,
					  'cuit' => $cuit,
					  'email' => $email,
					  'localidad' => $localidad,
					  'iva_tipo' => $iva_tipo,
					  'tipo_persona' => 'Proveedor');
		/*Cargamos la funcion agregar, enviamos el nombre de la 
		tabla en la que trabajamos, el array con los datos	*/		  
 		$this->abm_model->agregar('personas',$data);
        //cuando guarda en la BD, va a listar
 		redirect('/personas/listar_proveedores');
	}
public function modificar(){
		extract($_GET);
		//echo $id;
		$cliente = $this->abm_model->registro_especifico($personas_id,'personas_id','personas');
		$result['title'] = 'Formulario Cliente';
		$result['main_content'] = 'formulariopersonas';
		$result['data'] = $cliente;
		//o json_encode($result);
		$this->load->view('main_template',$result);
	}
	public function modif(){
		echo "modif";
		extract($_POST);
		extract($_GET);
		$data = array('personas_id' => $personas_id,
					  'razon_social' => $razon_social,
					  'domicilio' => $domicilio,
					  'telefono' => $telefono,
					  'cuit' => $cuit,
					  'email' => $email,
					  'localidad' => $localidad,
					  'iva_tipo' => $iva_tipo);

 		$this->abm_model->modificar($personas_id,'personas_id','personas',$data);
 		
 		if ($persona_tipo == 'Cliente') {
 			$this->listar_clientes();
 		} else {
 			if ($persona_tipo == 'Proveedor') {
 				$this->listar_proveedores();
 			}
 		}
	}
	public function buscarcliente(){
		extract($_POST);
		
		$busqueda = $this->abm_model->buscarpersona('personas',$q,'Cliente');
		
		$result['data'] = $busqueda;
		$result['persona_tipo'] = 'Cliente';
		$this->load->view('tablapersonas',$result);

	}
	public function buscarproveedor(){
		extract($_POST);
		
		$busqueda = $this->abm_model->buscarpersona('personas',$q,'Proveedor');
		
		$result['data'] = $busqueda;
		$result['persona_tipo'] = 'Proveedor';
		$this->load->view('tablapersonas',$result);

	}
	public function eliminar(){
		$personas_id = $_GET['personas_id'];
		$this->abm_model->eliminar($personas_id,'personas_id','personas');
		$this->listar_clientes();
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