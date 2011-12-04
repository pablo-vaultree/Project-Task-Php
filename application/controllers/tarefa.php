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
		$data['message'] = '';			
		$data['content'] = 'tarefa/tarefa_novo_view';
		$data["projeto"] = $id; 		
		$this->load->view('includes/template', $data);
	}
	
	public function incluir()
	{
		$id = $this->input->post('projetoId');
		$this->load->helper('date');		
		$dt_fim = $this->input->post('dt_fim');				
		$datestring = "%Y-%m-%d";		
		$dt_fim = mdate($datestring, strtotime($dt_fim));
				
		$data = array(
			'nome' => $this->input->post('nome'),
			'id_projeto' => $id,
			'data_encerramento' => $dt_fim,
			'descricao' => $this->input->post('descricao') 		
		);										
				
		$this->_set_rules();					
		if ($this->form_validation->run() == false) 
		{
			$data['message'] = '';	
			echo "string";
		} else {
			$this->tarefa_model->adicionar_tarefa($data);
			$data['message'] = '<div class="Success">Tarefa incluida com sucesso!</div>';
		}
		$data['content'] = 'tarefa/tarefa_novo_view';			
		$data["projeto"] = $id;		
		$this->load->view('includes/template', $data);			 			
	}
	
	function _set_rules()
	{			
		$this->form_validation->set_rules('nome', 'Nome', 'min_length[5]|trim|required');
		$this->form_validation->set_rules('dt_fim', 'Data encerramento', 'trim|required');
		$this->form_validation->set_rules('descricao', 'Descrição', 'trim|required');						
	}
	
	public function excluir($id)
	{
		$tarefa = $this->tarefa_model->buscar_tarefa($id);
		$projeto = $tarefa->id_projeto;		
					
		$this->tarefa_model->excluir_tarefa($id);
			
		$this->session->set_flashdata('message', '<div class="Success">Tarefa excluida com sucesso!</div>');		
		$url = 'projeto/index/'.$projeto;
		redirect($url);	;		
	}
}



?>