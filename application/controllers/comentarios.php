<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comentarios extends CI_Controller {

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

	}
	
	public function nuevo(){
		extract($_POST);
		//$id = $_GET['id'];
 		if (isset($comentario)) {
 			$fecha = date('Y-m-d');
 			$comment = array('comentario' => $comentario,
							'fecha' => $fecha,
							'uid' => $id );
 			$this->abm_model->agregar('comentarios',$comment);
 		}
 		//redirect(base_url('welcome/listar'));
 		echo "ok";
 	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */