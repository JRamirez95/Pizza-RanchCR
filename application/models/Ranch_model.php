<?php
class Ranch_model extends CI_Model {

    function registroClientes($cliente)
    {
        $email = $cliente ['email'];        
        $ced = $cliente ['cedula'];      
        
        // $this->db->select('cedula');
        // $this->db->from('clientes');
        // $this->db->where('cedula', $ced);
        // $query = $this->db->get('clientes')->row();
        
        $query = $this->db->query("SELECT * FROM clientes");        
        $row = $query->row();
        $email1 = $row->email;
        $ced1 = $row->cedula;

        // echo $email1; die; 
        
        if ($ced == $ced1){
            echo "<script> alert('El número de cedula ya esta registrado');</script>";

        }else if ($email == $email1) {
            echo "<script> alert('Dirección de Email ya esta registrado');</script>";

        }else{
            $r = $this->db->insert('clientes', $cliente);
            return $r;
        }
      
    }

    function inicioSesion($email, $contrasena) {   

        $query = $this->db->query("SELECT * FROM clientes WHERE email = '$email' ");
        $row = $query->num_rows();
		// $this -> db -> from('clientes');
		// $this -> db -> where('email', $email);
		// $this -> db -> where('password', $pass);
		// $this -> db -> limit(1);
       
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
		return true;
		}
		else
		{
		return false;
		}    
	}

}