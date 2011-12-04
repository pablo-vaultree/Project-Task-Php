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
	
	function excluir_usuario($key)
	{
		$this->db->where('username', $key);
		$this->db->delete('usuario');		
	}
	
	function is_logged()
	{
		$logged = $this->session->userdata('is_logged');
		
		if (!isset($logged) || $logged == false) {
			redirect('login/permission_denied');			
		}
	}
	
}






?>