<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// echo Stringy\Stringy::create('teste teste teste')->camelize();
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('welcome_message');
		$this->load->view('include/footer');
	}
}
