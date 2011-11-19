<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data['content'] = "login_view";		
		$this->load->view('includes/template', $data);		
	}
	
	public function logon()
	{
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$this->load->model('usuario_model');				
		
		$exist = $this->usuario_model->usuario_existe($username, $password);
			
		if ($exist) {
			$data = array(
				'username' => $username,
				'is_logged' => true
			);
			$this->session->set_userdata($data);
			redirect('usuario/projetos');	
		}else {
			$this->index();
		}												
	}
}