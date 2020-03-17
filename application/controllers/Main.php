<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('Main_model');
	}



	public function dashboard(){	

		if($this->session->userdata('LOGGED') == true)
		{
			$data['user'] = $this->session->userdata('username');

			$u = $this->session->userdata('username');

			$data ['first'] = $this->Main_model->fetch_firstname($u);

			 $this->load->view('header', $data);
			 $this->load->view('dashboard', $data);
			 $this->load->view('footer');
		} 
		else
		{
			redirect(base_url());
		}
		
	}

	public function index()
	{
		$this->load->view('signin');
	}
	public function signup(){
		$this->load->view('signup');
	}

	public function register()
	{	
		$username = $this->input->post('username');

		$firstn = $this->input->post('firstname');
		$lastn = $this->input->post('lastname');
		$middlen = $this->input->post('middlename');

		$sess = array(
			'user_firstname' 	 => $firstn,
			'user_lastname'      => $lastn,
			'user_middlename'	 => $middlen
		);

		$this->session->set_userdata($sess);

		echo $this->Main_model->register_user($username);
	}
	public function login_validation()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($this->Main_model->validate_login($username, md5(hash('sha256', $password))))
			{
				$session_data = array(
					'username' => $username,
					'LOGGED' => true
				);
				$this->session->set_userdata($session_data);
				redirect(base_url().'main/logged');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				redirect(base_url());
			}

		
		}
		else
		{
			redirect(base_url()); 
		}
	}

	public function logged()
	{
		if($this->session->userdata('username') != '')
		{
			redirect(base_url().'main/dashboard');
		}
		else
		{
			redirect(base_url());;
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('LOGGED');
		$this->session->sess_destroy();	
		redirect(base_url());
	}

}