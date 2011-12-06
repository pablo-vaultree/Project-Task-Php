<?php


class Projeto_model extends CI_Model
{
	
	
	function buscar_projetos_usuario($usuario)
	{
		$this->db->select('distinct projeto.nome, projeto.id, projeto.observacao, tarefa.concluido', FALSE);
		$this->db->select("DATE_FORMAT(projeto.data, '%d/%m/%Y %h:%m') as data", FALSE);
		$this->db->select("DATE_FORMAT(projeto.data_encerramento, '%d/%m/%Y') as data_encerramento", FALSE);
		$this->db->from('projeto');
		$this->db->join('tarefa', 'tarefa.id_projeto = projeto.id', 'left');						
		$this->db->where('projeto.username', $usuario);
		$query = $this->db->get();				
		if ($query->num_rows() == 0) {
			return 0;
		}
		return $query->result();				
	}
	
	function qtde_projetos_abertos($usuario)
	{
		$this->db->select('*');
		$this->db->from('projeto');
		$this->db->join('tarefa', 'tarefa.id_projeto = projeto.id', 'left');
		$this->db->where('username', $usuario);
		$this->db->where('tarefa.concluido', 'N');
		$query = $this->db->get();				
		return $query->num_rows();
	}
	
	function buscar_projeto($id)	
	{
		$this->db->select('*');
		$this->db->select("DATE_FORMAT(data, '%d/%m/%Y %h:%m') as data", FALSE);
		$this->db->select("DATE_FORMAT(data_encerramento, '%d/%m/%Y') as data_encerramento", FALSE);
		$this->db->where('id', $id);
		$query = $this->db->get('projeto');		
		return $query->row();		
	}
	
	function adicionar_projeto($data)
	{
		$this->db->insert('projeto', $data);
		
	}
	
	function excluir_projeto($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('projeto');		
	}	
}

?>