<?php


class Usuario_model extends CI_Model
{
	
	function usuario_existe($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		
		$query = $this->db->get('usuario');
		
		if ($query->num_rows == 1) {
			return true;
		}else {
			return false;
		}
			
	}
		
	function buscar_todos_usuarios()
	{		
		$query = $this->db->get('usario');
		return $query->result();
		
	}
	
	function adicionar_usuario($data)
	{
		$this->db->insert('usuario', $data);	
		
	}
	
	function atualizar_usuario($key, $data)
	{
		$this->db->where('username', $key);
		$this->db->update('usuario', $data);		
	}
	
	function exlcuir_usuario($key, $data)
	{
		$this->db->where('username', $key);
		$this->db->delete('usuario', $data);		
	}
	
}






?>