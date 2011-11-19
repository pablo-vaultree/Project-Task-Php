<?php


class Usuario_model extends Model
{
	
	function logar_usuario()
	{
		
		
	}
	
	
	function buscar_usuarios()
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