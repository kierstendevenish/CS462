<?php

class Pages extends CI_Controller {

	public function __construct() {
	        parent::__construct();
	}	
	
	public function view($page = 'home', $user = null)
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$this->load->helper('form');

		//check login
		if ($user === null)
		{
			$data['title'] = 'Login'; // Capitalize the first letter			

			$this->load->view('templates/header', $data);
			$this->load->view('pages/login', $data);
			$this->load->view('templates/footer', $data);	
		}
		else
		{
			$data['title'] = ucfirst($page); // Capitalize the first letter
	
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}
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
			try
			{			
				$this->load->database();
				//$query = $this->db->query('.tables');
				//$query = $this->db->get('Users');
				//$row = $query->row_array();
				//$data['pw'] = $row['password'];
				$data['pw'] = 'nope';
				//$file = file_get_contents('application/files/users/json');
				//$json = json_decode($file);
				//$data['json'] = $json;			
			}
			catch (Exception $e)
			{
				show_error("could not load database: " + $e);
			}

			$this->load->view('templates/header', $data);
			$this->load->view('pages/homepage', $data);
			$this->load->view('templates/footer', $data);
		}
	}

	public function account() 
	{
		
	}
}
