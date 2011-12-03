<?php


Class Tarefa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->usuario_model->is_logged();	
	}
	
	function index($id)
	{
		if (!isset($id)) {
			redirect('usuario/dashboard');
		}
		 		
		$tarefa = $this->tarefa_model->buscar_tarefa($id);		 			
		$data["projeto"] = $this->projeto_model->buscar_projeto($tarefa->id_projeto);
		$data["tarefa"] = $tarefa;								
		$data['content'] = 'tarefa/tarefa_view';		
		$this->load->view('includes/template', $data);		
	}
	
	public function novo($id)
	{		
		$data['content'] = 'tarefa/tarefa_novo_view';
		$data["projeto"] = $id; 		
		$this->load->view('includes/template', $data);
	}
	
	public function incluir()
	{
		
		$data = array(
			'nome' => $this->input->post('nome'),
			'id_projeto' => $this->input->post('projetoId'),
			'data_encerramento' => $this->input->post('dt_fim'),
			'descricao' => $this->input->post('descricao') 		
		);				
						
		$this->tarefa_model->adicionar_tarefa($data);		
 		$data['content'] = 'projeto/'.$this->input->post('projetoId');			
		$this->load->view('includes/template', $data);		
	}
}



?>