<?php

	$data["username"] = $this->session->userdata('username');
		
	$this->load->view('includes/header', $data);

	$this->load->view($content);

	$this->load->view('includes/footer');


?>