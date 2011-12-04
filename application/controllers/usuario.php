<?php


Class Usuario extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->usuario_model->is_logged();	
	}
	
	function dashboard()
	{
		$data['message'] = '';				
		$data['usuario'] = $this->session->userdata('username'); 
		$result = $this->projeto_model->buscar_projetos_usuario($data['usuario']);
		
		if ($result != 0) 
			$data["projetos"] = $result;	
							
		$data['content'] = 'usuario/dashboard_view';		
		$this->load->view('includes/template', $data);
	}	
}



?>