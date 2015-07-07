<?php 
	$this->load->view('plantillas/head'); 
	if ($main_content == 'login') {
		$this->load->view($main_content);
		$this->load->view('plantillas/pie');
	}else{
	$this->load->view('plantillas/cabeza');
 	$this->load->view($main_content);}
 	//$this->load->view('plantillas/pie');