<?php
class Ranch_model extends CI_Model {

    function registroClientes($cliente)
    {
        $r = $this->db->insert('clientes', $cliente);
        return $r;
    }

}