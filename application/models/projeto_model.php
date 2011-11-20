<?php


class Projeto_model extends Model
{
	
	
	function buscar_projetos_usuario($usuario)
	{
		$this->db->where('username', $usuario);
		$query = $this->db->get('projeto');
		return $query->result();
		
	}
	
	function buscar_projeto($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('projeto');
		return $query->row();		
	}
	
}

?>