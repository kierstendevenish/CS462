<?php

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}	

	public function login()
	{
		$data['username'] = $this->input->post('username');
		
		if ($data['username'] === 'admin')
		{
			$this->load->view('templates/header', $data);
			$this->load->view('pages/admin_homepage', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->load->view('templates/header', $data);
			$this->load->view('pages/homepage', $data);
			$this->load->view('templates/footer', $data);
		}
	}
}
