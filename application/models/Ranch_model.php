  <?php
class Ranch_model extends CI_Model {

    function registrar($usuario)
    {
        $email = $usuario ['email'];
        $ced = $usuario ['cedula'];

        $query = $this->db->query("SELECT * FROM usuario");
        $row = $query->row();
        $email1 = $row->email;
        $ced1 = $row->cedula;

        if ($ced == $ced1){
            echo "<script> alert('El número de cedula ya esta registrado');</script>";

        }else if ($email == $email1) {
            echo "<script> alert('Dirección de Email ya esta registrado');</script>";

        }else{
            $r = $this->db->insert('usuario', $usuario);
            return $r;
        }

    }

    function all($id)
  	{
    	//$query = $this -> db -> get('usuario');
      $this -> db -> select('*');
  		$this -> db -> from('usuario');
  		$this -> db -> where('id', $id);
      $query = $this -> db -> get();

    	return $query->result_object();
  	}

    function cargarPromos()
    {
      $query = $this -> db -> get('promos');
      return $query->result_object();
    }

    function inicioSesion($email, $contrasena) {

      $this -> db -> select('id');
  		$this -> db -> from('usuario');
  		$this -> db -> where('email', $email);
  		$this -> db -> where('contrasena', $contrasena);
  		//$this -> db -> limit(1);

  		$query = $this -> db -> get();

  		if($query -> num_rows() == 1)
  		{
      $usuario = $query->result();
      $usuario = json_decode(json_encode($usuario), True);
      return $usuario;
  		//return $query;
  		}
  		else
  		{
  		return false;
  		}
    }

    function editarUsuario($cedula, $nombre, $apellidos, $email, $direccion, $tel, $id) {
        $data = array(
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

        // $this->db->update('usser', $data);
        $this->db->where('id', $id);
        $this->db->update('usuario', $data);

    }

    function agregarPromo($promo)
    {
        $descripcion = $promo ['descripcion'];

        $query = $this->db->query("SELECT * FROM promos");
        $row = $query->row();
        $desc = $row->descripcion;


        if ($descripcion == $desc){
            echo "<script> alert('La promoción ya esta registrado');</script>";

        }else{
            $r = $this->db->insert('promos', $promo);
            return $r;
        }

    }

    function cargarBebidas()
{
  $query = $this -> db -> get('bebidas');
  return $query->result_object();
}
function cargarPizzas()
{
  $query = $this -> db -> get('pizzas');
  return $query->result_object();
}
function cargarCalzones()
{
  $query = $this -> db -> get('calzone');
  return $query->result_object();
}
function cargarPastas()
{
  $query = $this -> db -> get('pasta');
  return $query->result_object();
}
function cargarGolosinas()
{
  $query = $this -> db -> get('golosinas');
  return $query->result_object();
}
function cargarPizzasMitades()
{
  $query = $this -> db -> get('pizzasmitades');
  return $query->result_object();
}
function cargarPostres()
{
  $query = $this -> db -> get('postres');
  return $query->result_object();
}
function cargarOrdenes()
{
  $query = $this -> db -> get('ordenes');
  return $query->result_object();
}


}
