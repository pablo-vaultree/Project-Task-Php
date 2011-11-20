<?php


class Tarefa_model extends Model
{
	public function buscar_tarefas_projeto($projeto)
	{
		$this->db->where('id_projeto', $projeto);
		$query = $this->db->get('tarefa');
		return $query->result();
	}
}






?>