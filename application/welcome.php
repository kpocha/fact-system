<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		
		//Cargamos el modelo para poder trabajar con los datos del motor de
		//BD. We load the model for working with data engine DB.
		$this->load->model('abm_model');
		$this->load->helper('form');
	}
	public function index()
	{
		$this->listar();
	}
	public function formulario()
	{
		$result['title'] = 'Formulario';
		$result['main_content'] = 'formulario';
		$this->load->view('main_template',$result);
	}
	public function listar()
	{
		$clientes = $this->abm_model->listar();
		foreach ($clientes as $key) {
			$data[] = $key;
		}
		
		$result['title'] = 'Bienvenidos';
		$result['main_content'] = 'welcome_message';
		$result['data'] = $data;
		$this->load->view('main_template',$result);
	}
	public function nuevo(){
		extract($_POST);
		//$dia_llamar = ;
		//$dia_hable = ;
		$data = array('nombre' => $nombre,
					  'email' => $email,
					  'telefono' => $telefono,
					  'id_prestamo' => $prestamo,
					  'id_action' => $action,
					  'id_actividad' => $actividad,
					  'marital' => $marital,
					  'status' => $status,
					  'area' => $area,
					  'metodo_pago' => $metodo_pago,
					  'income' => $income,
					  'credit' => $credit,
					  'payment' => $payment,
					  'ganado_2013' => $ganado_2013,
					  'ganado_2014' => $ganado_2014,
					  'dia_llamar' => $dia_llamar,
					  'dia_hable' => $dia_hable,
					  'fuente' => $fuente );


 		$this->abm_model->agregar('clientes',$data);

 		if ($comentario != '') {

 			$id = $this->abm_model->ultimo_agregado('clientes');
 			$fecha = date('Y-m-d');
 			$comment = array('comentario' => $comentario,
							'fecha' => $fecha,
							'uid' => $id );
 			$this->abm_model->agregar('comentarios',$comment);
 		}
 		if ($marital == 'Married') {
 			$esposa = array('status' => $esposa_status,
 							'uid' => $id,
							'tax' => $esposa_tax,
							'pago' => $esposa_pago,
							'2014' => $esposa_2014,
							'2013' => $esposa_2013,
							'credito' => $esposa_credit );
 			$this->abm_model->agregar('esposa',$esposa);
 		}

 		
 		$this->listar();
	}
	public function modificar(){
		extract($_GET);
		$cliente = $this->abm_model->cliente_especifico($uid);
		$result['title'] = 'Formulario';
		$result['main_content'] = 'formulario';
		$result['data'] = $cliente;
		//o json_encode($result);
		$this->load->view('main_template',$result);
	}
	public function buscar(){
		extract($_POST);
		$q = "%".$q."%";
		$busqueda = $this->abm_model->buscar($q);
		//echo json_encode($busqueda);
		$result['data'] = $busqueda;
		$this->load->view('tabla-clientes',$result);

	}
	public function eliminar(){
		$uid = $_GET['uid'];
		$this->abm_model->eliminar($uid);
		$this->listar();
	}

	public function mostrar(){
		$uid = $_GET['uid'];
		$cliente = $this->abm_model->cliente_especifico($uid);
		foreach ($cliente as $clie) {
			$nombre = $clie->nombre;
		}
		$comentario = $this->abm_model->comentario($uid);

		$result['title'] = 'Cliente: ';
		$result['main_content'] = 'cliente_especifico';
		$result['data'] = $cliente;
		$result['comentario'] = $comentario;
		$this->load->view('main_template',$result);
	}
	public function prueba(){
		echo date('r');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */