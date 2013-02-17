<?php

class Login extends CI_Controller {
	
	public function login()
	{
		$data['username'] = $this->input->post('username');
		
		if ($data['username'] === 'admin')
		{
			$this->load->view('templates/header', $data);
			$this->load->view('admin_homepage', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{
			$this->load->view('templates/header', $data);
			$this->load->view('homepage', $data);
			$this->load->view('templates/footer', $data);
		}
	}
}
