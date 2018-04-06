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

		public function perfil()
	{
		$this->load->view('Perfil');
	}

		public function galeria()
	{
		$this->load->view('Galeria');
	}

		public function promos()
	{
		$this->load->view('Promociones');
	}

		public function puntos()
	{
		$this->load->view('Usuarios/Puntos');
	}

		public function editarPerfil()
	{
		$this->load->view('Usuarios/Editar Perfil');
	}
	
		public function cambiarContrasena()
	{
		$this->load->view('Usuarios/Cambiar Contraseña');
	}

		public function promociones()
	{
		$this->load->view('Usuarios/Promociones');
	}

		public function listaPromociones()
	{
		$this->load->view('Usuarios/Lista Promociones');
	}


	public function registrar()
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
		$tel = $this->input->post('telefono');

		if ($email != $confEmail) 
		{
			?><script type=text/javascript>alert("Email no coinciden");</script><?php
			// redirect('/Pizza-RanchCR/Home');
		}else if ($contrasena != $confContra) {
			
			echo "<script> alert('Las contraseñas no coinciden');</script>";
			// redirect('Pizza-RanchCR/Registrarse', 'refresh');
			
		}else
		{	
		
			$usuario = array(
				'cedula' => $cedula,
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'email' => $email,
				'contrasena' => $contrasena,
				'lat' => $lat,
				'lng' => $lng,
				'direccion' => $direccion,
				'telefono' => $tel
			);
			// call the model to save
			$r = $this->Ranch_model->registrar($usuario);
			
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
	  
	public function inicioSesion()
    {
        $email = $this->input->post('email');
        $contrasena = $this->input->post('contrasena');
        //$pass= md5($password);

       $r = $this->Ranch_model->inicioSesion($email, $contrasena);

        if ($r == true) {
            // $this->session->set_flashdata('message', 'User saved');
				redirect('/Pizza-RanchCR/Perfil');
				?><script type=text/javascript>alert("Bienvenido");</script><?php   
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            ?><script type=text/javascript>alert("Credenciales Incorrectos");</script><?php
        }
    }
}