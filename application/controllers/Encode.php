<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Encode extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Encode_M');

	}
	public function index()
	{
		if($this->session->userdata('LOGGED') == true)
		{
		
		$data['user'] = $this->session->userdata('username');

		$this->load->view('header', $data);
		$this->load->view('encode-view', $data);
		$this->load->view('footer');
		}
		else
		{
			redirect(base_url());
		}
	}
	public function add_record(){
		
		echo $this->Encode_M->create_record(array('child_control_no' => $this->input->post('childidno')));
	}	

}
