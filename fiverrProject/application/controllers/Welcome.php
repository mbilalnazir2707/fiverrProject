<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
	
	public function bootstrap()
	{
		$this->load->view('bootstrap');
	}

	public function clientPage()
	{
		$this->load->view('clientPage');
	}
}
