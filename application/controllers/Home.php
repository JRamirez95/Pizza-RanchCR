<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
    parent:: __construct();    
    }

	public function home()
	{
		$this->load->view('Home');
	}

	public function menu()
	{
		$this->load->view('Menu');
	}

		public function sucursales()
	{
		$this->load->view('Sucursales');
	}
	
		public function registrarse()
	{
		$this->load->view('Registrarse');
	}
}