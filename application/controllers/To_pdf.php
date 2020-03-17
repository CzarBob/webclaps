<?php
class To_pdf extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('Pdf');
		$this->load->model('log_m');
		$this->load->model('vehicle_m');
	}

	public function index()
	{
		$plate_id = $_GET['platenopk'];

		$data['log'] = $this->vehicle_m->single_fetch($plate_id);
		$data['plate_header'] = $this->vehicle_m->fetch_plate($plate_id);
		$this->load->view('log_pdf', $data);
	}
	
	public function test(){
		$test_id = $this->uri->segment(3);

		var_dump($test_id);
	}
}
