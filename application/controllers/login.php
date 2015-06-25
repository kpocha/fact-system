<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$result['title'] = 'Login';
		$result['main_content'] = 'login';
		$this->load->view('main_template',$result);
	}
	function loguear(){
		$this->form_validation->set_rules('username','Usuario','required|callback__verificar');
		$this->form_validation->set_rules('password','Contraseña','required|md5');
		$this->form_validation->set_message('required','Este campo es requerido');
		$this->form_validation->set_message('_verificar','El usuario ya existe');
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->index();
		}else{
			echo $this->input->post('password');
		}
	}
	function _verificar($value){
		if ($value == '') {
			return false;
		}else{
			return true;
		}
	}
}
