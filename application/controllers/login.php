<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('/factura', 'refresh');
		}else{
			$result['title'] = 'Login';
			$result['main_content'] = 'login';
			$this->load->view('main_template',$result);
		}

		
	}
	function loguear(){
		$this->form_validation->set_rules('username','Usuario','required|callback__verificar_usuario');
		$this->form_validation->set_rules('password','Contraseña','required|callback__verificar_password');
		$this->form_validation->set_message('required','Este campo es requerido');
		$this->form_validation->set_message('_verificar_usuario','Usuario incorrecto');
		$this->form_validation->set_message('_verificar_password','Password incorrecto');
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->index();
		}else{
			$usuario = $this->login_model->obtener_usuario('usuarios',$_POST['username']);
			foreach ($usuario as $key) {
				$data['uid'] = $key->uid;
				$data['user'] = $key->user;
				$data['rol'] = $key->rol;
			}
			echo json_encode($data);
			  $userdata = array(
                    'logged_in' => TRUE,
                    'user_id' => $data['uid'],
                    'username' => $data['user'],
                    'user_type' => $data['rol']
                    );

                // Execute the set_userdata, to our session
                $this->session->set_userdata($userdata);
			 redirect('/factura', 'refresh');

		}
	}
	function _verificar_usuario($value){
		$usua = $this->login_model->obtener_usuario('usuarios',$value);
		foreach ($usua as $key) {
				$data[] = $key;
			}

		if ($this->login_model->obtener_usuario('usuarios',$value)) {

				return true;
		}else{
			return false;
		}
	}
	function _verificar_password($value){
		$usua = $this->login_model->obtener_usuario('usuarios',$value);
		foreach ($usua as $key) {
				$data[] = $key;
			}

		if ($this->login_model->obtener_usuario('usuarios',$value)) {
				return true;
		}else{
			return false;
		}
	}
	function log_out(){
		//$this->session->destroy();
		$this->session->sess_destroy();
		//$this->Cookie->delete("1");
		//$this->Cookie->destroy();
		//$this->Auth->logout();
		redirect('login', 'refresh');
	}
}
