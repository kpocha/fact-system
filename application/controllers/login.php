<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
	}

	public function index()
	{
		$result['title'] = 'Login';
		$result['main_content'] = 'login';
		$this->load->view('main_template',$result);
	}
}
