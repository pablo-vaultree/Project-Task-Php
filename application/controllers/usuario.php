<?php


Class Usuario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->is_logged();		
	}
	
	function dashboard()
	{
		
		$data['usuario'] = $this->session->userdata('username'); 		
		$data["projetos"] = $this->projeto_model->buscar_projetos_usuario($data['usuario']);						 	
		$data['content'] = 'usuario/dashboard_view';		
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