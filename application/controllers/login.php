<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data['css'] = load_css('style.css');
		$this->load->view('login_view', $data);
	}
	
	public function Logon()
	{
		$data['css'] = load_css('style.css');
		$this->load->view('login_view', $data);
	}
}