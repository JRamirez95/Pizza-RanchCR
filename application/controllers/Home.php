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

		public function login()
	{
		$this->load->view('Login');
	}

	    public function registroClientes()
    {
		// get the params
		$cedula = $this->input->post('cedula');
		$nombre = $this->input->post('nombre');
		$apellidos = $this->input->post('apellidos');
		$email = $this->input->post('email');
		$confEmail = $this->input->post('confEmail');
		$contrasena = $this->input->post('contrasena');
		$confContra = $this->input->post('contrasena1');
		$lat = $this->input->post('lat');
		$lng = $this->input->post('lng');
		$direccion = $this->input->post('direccion');

		if ($email != $confEmail) 
		{
			?><script type=text/javascript>alert("Email no coinciden");</script><?php
			// redirect('/Pizza-RanchCR/Home');
		}else if ($contrasena != $confContra) {
			?><script type=text/javascript>alert("Las contraseñas no coinciden");</script><?php
			// redirect('/Pizza-RanchCR/Home');
		}else
		{	
		
			$cliente = array(
				'cedula' => $cedula,
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'email' => $email,
				'contrasena' => $contrasena,
				'lat' => $lat,
				'lng' => $lng,
				'direccion' => $direccion
			);
			// call the model to save
			$r = $this->Ranch_model->registroClientes($cliente);
			
			// redirect
			if ($r) {
				// $this->session->set_flashdata('message', 'User saved');
				// redirect('/Mypetscr/CodeIgniter-3.1.6/user/login');
				?><script type=text/javascript>alert("Se ha registrado exitosamente...! Gracias por preferirnos.");</script><?php
				redirect('/Pizza-RanchCR/Home');
			} else {
			//    $this->session->set_flashdata('message', 'There was an error saving the user');
				// redirect('/Mypetscr/CodeIgniter-3.1.6/user/register');
			}
		
		}
    }
}