<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		
	public function index()
	{
		$this->usuario_model->se_logado_redirect_dashboard();		
		$data['content'] = "login_view";		
		$this->load->view('login_view', $data);		
	}
	
	public function logon()
	{
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
										
		$exist = $this->usuario_model->usuario_existe($username, $password);
			
		if ($exist) {
			$data = array(
				'username' => $username,
				'is_logged' => true
			);
			$this->session->set_userdata($data);
			redirect('usuario/dashboard');	
		}else {
			$data['content'] = "login_view";		
			$data['erro'] = "Usuário/Senha não são válidos.";
			$this->load->view('login_view', $data);
		}												
	}

	public function cadastro()
	{
		$this->usuario_model->se_logado_redirect_dashboard();
		$data['content'] = 'cadastro_view';
		$this->load->view('includes/template', $data);				
	}
	
	
	public function cadastrar_usuario()
	{				
		$this->_set_rules();
		if ($this->form_validation->run() == false) 
		{
			$data['content'] = 'cadastro_view';			
			$this->load->view('includes/template', $data);
		}
		else 
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email')
			);
			
			$this->usuario_model->adicionar_usuario($data);
			
			$exist = $this->usuario_model->usuario_existe($this->input->post('username'), $this->input->post('password'));
			if ($exist) {
				$data = array(
					'username' => $username,
					'is_logged' => true
				);
				$this->session->set_userdata($data);
				redirect('usuario/dashboard');	
			}else {				
				$this->index();
			}		
		}												
	}
	
	function _set_rules()
	{
		$this->form_validation->set_rules('username', 'Login', 'min_length[3]|unique[usuario.username]|trim|required');
		$this->form_validation->set_rules('password', 'Senha', 'trim|required|min_lenght(4)');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');			
	}
	
	public function logoff()
	{
		$this->session->sess_destroy();
		//$this->index();
		redirect('login/index');		
			
	}
	
	
	public function permission_denied()
	{
		$data['content'] = 'permissao_view';
		$this->load->view('includes/template', $data);		
	}						
}