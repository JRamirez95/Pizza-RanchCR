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
		$usser = $this->Ranch_model->all($_SESSION["pizza_ranch"]);
		$data['usuario'] = $usser;

		$this->load->view('Perfil', $data);
	}

		public function galeria()
	{
		$this->load->view('Galeria');
	}

	public function pizzas()
		{
			$pizzas = $this->Ranch_model->cargarPizzas();
			$data['pizzas'] = $pizzas;
			$this->load->view('Pedidos/Pizzas', $data);
		}
		public function calzone()
		{
			$calzones = $this->Ranch_model->cargarCalzones();
			$data['calzones'] = $calzones;
			$this->load->view('Pedidos/Calzone', $data);
		}

		public function golosinas()
		{
			$golosinas = $this->Ranch_model->cargarGolosinas();
			$data['golosinas'] = $golosinas;
			$this->load->view('Pedidos/Golosinas', $data);
		}
		public function ordenes()
		{
			$ordenes = $this->Ranch_model->cargarOrdenes();
			$data['ordenes'] = $ordenes;
			$this->load->view('Pedidos/Ordenes', $data);
		}
		public function postre()
		{
			$postres = $this->Ranch_model->cargarPostres();
			$data['postres'] = $postres;
			$this->load->view('Pedidos/Postre', $data);
		}
		public function bebidas()
		{
			$bebidas = $this->Ranch_model->cargarBebidas();
			$data['bebidas'] = $bebidas;
			$this->load->view('Pedidos/Bebidas', $data);
		}

		public function pizzamitades()
		{
			$pizzasm = $this->Ranch_model->cargarPizzasMitades();
			$data['pizzasm'] = $pizzasm;
			$this->load->view('Pedidos/PizzaMitades', $data);
		}
		public function pasta()
		{
			$pastas = $this->Ranch_model->cargarPastas();
			$data['pastas'] = $pastas;
			$this->load->view('Pedidos/Pasta', $data);
		}
		public function cargarSelect()
		{
			$select = $this->Ranch_model->cargarPizzas();
			$datasel['pizzas'] = $select;
			$this->load->view('Pedidos/PizzaMitades', $datasel);
		}

			public function ordenar()
		{
			$this->load->view('Ordenar');
		}
		public function promos()
	{
		$promos = $this->Ranch_model->cargarPromos();
		$data['promos'] = $promos;
		$this->load->view('Promociones', $data);
	}

		public function puntos()
	{
		$usser = $this->Ranch_model->all($_SESSION["pizza_ranch"]);
		$data['usuario'] = $usser;
		$this->load->view('Usuarios/Puntos', $data);
	}
		public function editarPerfil()
	{
		$usser = $this->Ranch_model->all($_SESSION["pizza_ranch"]);
		$data['usuario'] = $usser;
		$this->load->view('Usuarios/Editar Perfil', $data);
	}

		public function cambiarContrasena()
	{
		$usser = $this->Ranch_model->all($_SESSION["pizza_ranch"]);
		$data['usuario'] = $usser;
		$this->load->view('Usuarios/Cambiar Contraseña', $data);
	}

		public function agregarPromociones()
	{
		$usser = $this->Ranch_model->all($_SESSION["pizza_ranch"]);
		$data['usuario'] = $usser;
		$this->load->view('Usuarios/Agregar Promociones', $data);
	}

		public function listaPromociones()
	{
		$usser = $this->Ranch_model->all($_SESSION["pizza_ranch"]);
		$promos = $this->Ranch_model->cargarPromos();
		$data['usuario'] = $usser;
		$data['promos'] = $promos;
		$this->load->view('Usuarios/Lista Promociones', $data);
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

        if ($r != false) {
            //  $this->session->set_flashdata('message', 'User saved');
						session_start();
						$_SESSION["pizza_ranch"] = $r[0]['id'];
						redirect('/Pizza-RanchCR/Perfil');

        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            ?><script type=text/javascript>alert("Credenciales Incorrectos");</script><?php
        }
	}

	 public function editar()
    {
		// get the params
        $cedula = $this->input->post('cedula');
				$nombre = $this->input->post('nombre');
				$apellidos = $this->input->post('apellidos');
				$email = $this->input->post('email');
				$contrasena = $this->input->post('contrasena');
				// $lat = $this->input->post('lat');
				// $lng = $this->input->post('lng');
				$direccion = $this->input->post('direccion');
				$tel = $this->input->post('telefono');
        $id = $this->input->get('id');

         echo $cedula, $nombre, $apellidos, $email, $contrasena, $direccion, $tel, $id;

				// call the model to save
				$r = $this->User_model->editarUsuario($cedula, $nombre, $apellidos, $email, $contrasena, $direccion, $tel, $id);

       redirect('/Pizza-RanchCR/Perfil');

    }

		public function agregarPromo()
	    {
			// get the params
			$descripcion = $this->input->post('descripcion');
			$precio = $this->input->post('precio');
			//Get image
			$config['upload_path'] = './uploads_promos/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('userfile')) {
				$error_foto =$this->upload->display_errors();
				echo  $error_foto;
				die();
				//$this->load->view('welcome_message',$error_foto);
			}
			$file_data = $this->upload->data();
			$foto = $file_data['file_name'];
			if ($precio <= 0)
			{
				?><script type=text/javascript>alert("El precio debe ser mayor a 0");</script><?php
				// redirect('/Pizza-RanchCR/Home');
			}else
			{

				$promo = array(
					'descripcion' => $descripcion,
					'precio' => $precio,
					'foto' => $foto
				);
				// call the model to save
				$r = $this->Ranch_model->agregarPromo($promo);

				// redirect
				if ($r) {
					// $this->session->set_flashdata('message', 'User saved');
					?><script type=text/javascript>alert("Se ha registrado exitosamente...! Gracias por preferirnos.");</script><?php
					redirect('/Pizza-RanchCR/listaPromociones');
				} else {
				//    $this->session->set_flashdata('message', 'There was an error saving the user');
					// redirect('/Mypetscr/CodeIgniter-3.1.6/user/register');
				}

			}
		}

}
