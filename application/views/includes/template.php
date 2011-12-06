<?php

	$data["username"] = $this->session->userdata('username');
	if (!empty($data["username"])) {
		$data["footer_message"] = $this->usuario_model->buscar_mensagem_footer();	
	}	
	
	$this->load->view('includes/header', $data);

	$this->load->view($content);

	$this->load->view('includes/footer');


?>