<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$result['title'] = 'Login';
		$result['main_content'] = 'login';
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
					  'fuente' => $fuente );

 		$this->abm_model->agregar($data);

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
		$busqueda = $this->abm_model->buscar($q);
		echo json_encode($busqueda);
	}
	public function eliminar(){
		$uid = $_GET['uid'];
		$this->abm_model->eliminar($uid);
		$this->listar();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */