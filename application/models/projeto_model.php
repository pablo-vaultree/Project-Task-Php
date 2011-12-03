<?php


class Projeto_model extends CI_Model
{
	
	
	function buscar_projetos_usuario($usuario)
	{
		$this->db->where('username', $usuario);
		$query = $this->db->get('projeto');				
		if ($query->num_rows() == 0) {
			return 0;
		}
		return $query->result();				
	}
	
	function buscar_projeto($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('projeto');
		return $query->row();		
	}
	
	function adicionar_projeto($data)
	{
		$this->db->insert('projeto', $data);
		
	}
}

?>