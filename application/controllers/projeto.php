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
		$data["message"] = '';			
		
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
		$this->load->helper('date');		
		$dt_fim = $this->input->post('dt_fim');				
		$datestring = "%Y-%m-%d";
		$dt_fim = mdate($datestring, strtotime($dt_fim));		
		$data = array(
			'nome' => $this->input->post('nome'),
			'username' => $this->session->userdata('username'),
			'data_encerramento' => $dt_fim,
			'observacao' => $this->input->post('obs') 		
		);
		
		$this->_set_rules();
		
		if ($this->form_validation->run() == false) 
		{
			$data['message'] = '';	
			$this->novo();
		} else {
			$this->projeto_model->adicionar_projeto($data);
			$data['message'] = '<div class="Success">Projeto incluido com sucesso!</div>';
			redirect('usuario/dashboard');
		}									
	}
	
	function _set_rules()
	{
		$this->form_validation->set_rules('nome', 'Nome', 'min_length[5]|trim|required');
		$this->form_validation->set_rules('dt_fim', 'Data encerramento', 'trim|required');
		$this->form_validation->set_rules('obs', 'Observacao', 'trim|required');			
	}
	
	public function excluir($id)
	{
		$this->projeto_model->excluir_projeto($id);				
		$this->session->set_flashdata('message', '<div class="Success">Projeto excluido com sucesso!</div>');		
		redirect('usuario/dashboard');
	}
}



?>