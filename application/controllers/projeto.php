<?php


Class Projeto extends CI_Controller
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
		 		
		$data["projeto"] = $this->projeto_model->buscar_projeto($id);
		$data["tarefas"] = $this->tarefa_model->buscar_tarefas_projeto($id);
											
		$data['content'] = 'projeto/projeto_view';		
		$this->load->view('includes/template', $data);		
	}
	
	public function novo()
	{
		$data['content'] = 'projeto/projeto_novo_view';		
		$this->load->view('includes/template', $data);
	}
	
	public function incluir()
	{
		
		$data = array(
			'nome' => $this->input->post('nome'),
			'username' => $this->session->userdata('username'),
			'data_encerramento' => $this->input->post('dt_fim'),
			'observacao' => $this->input->post('obs') 		
		);
		
		$this->projeto_model->adicionar_projeto($data);
		
		$data['content'] = 'usuario/dashboard';		
		$this->load->view('includes/template', $data);		
	}
}



?>