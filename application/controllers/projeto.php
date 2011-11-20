<?php


Class Projeto extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->is_logged();		
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
	
	function is_logged()
	{
		$logged = $this->session->userdata('is_logged');
		
		if (!isset($logged) || $logged == false) {
			redirect('login/permission_denied');			
		}
	}
	
}



?>