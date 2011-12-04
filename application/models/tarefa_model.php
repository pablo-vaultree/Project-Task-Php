<?php


class Tarefa_model extends CI_Model
{
	public function buscar_tarefas_projeto($projeto)
	{
		$this->db->select('*');
		$this->db->select("DATE_FORMAT(data, '%d/%m/%Y %h:%m') as data", FALSE);
		$this->db->select("DATE_FORMAT(data_encerramento, '%d/%m/%Y') as data_encerramento", FALSE);
		$this->db->where('id_projeto', $projeto);
		$query = $this->db->get('tarefa');
		return $query->result();
	}
	
	function buscar_tarefa($id)
	{
		$this->db->select('*');
		$this->db->select("DATE_FORMAT(data, '%d/%m/%Y %h:%m') as data", FALSE);
		$this->db->select("DATE_FORMAT(data_encerramento, '%d/%m/%Y') as data_encerramento", FALSE);
		$this->db->where('id', $id);
		$query = $this->db->get('tarefa');
		return $query->row();		
	}
	
	function adicionar_tarefa($data)
	{
		$this->db->insert('tarefa', $data);
		
	}
	
	function excluir_tarefa($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tarefa');		
	}	
}
?>