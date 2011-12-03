<?php


class Tarefa_model extends CI_Model
{
	public function buscar_tarefas_projeto($projeto)
	{
		$this->db->where('id_projeto', $projeto);
		$query = $this->db->get('tarefa');
		return $query->result();
	}
	
	function buscar_tarefa($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('tarefa');
		return $query->row();		
	}
	
	function adicionar_tarefa($data)
	{
		$this->db->insert('tarefa', $data);
		
	}	
}
?>