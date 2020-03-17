<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_M extends CI_Model {

	public function create_log(){

		date_default_timezone_set('Asia/Manila');

		$data = array(
			'log_id'		=> $this->input->post('add-log-id'),
			'plate_no'      => strtoupper($this->input->post('add-plate_no')),
			'log_desc'	    => $this->input->post('add-description'),
			'log_item_type' => $this->input->post('add-item_type'),
			'log_unit'		=> $this->input->post('add-item_unit'),
			'log_quantity'	=> $this->input->post('add-quantity'),
			'log_date'		=> date('Y-m-d g:i:s A')

		);

		$this->db->insert('tbl_log', $data);
	}
	public function read_log(){
		$data = $this->db->query(" SELECT * FROM tbl_log ");
		return $data->result();

	}

	public function update_log($data){

		$datas = $this->db->get('tbl_log');



		if(empty($datas)){
			return "empty";	

		}else{
			$this->db->flush_cache();
			$this->db->where('log_id',$data['id']);
			$this->db->update('tbl_log',$data['data']);
			return "success";
		}
		
	

		
	}

	public function delete_log($id){    
		$query = $this->db->query(" DELETE FROM tbl_log WHERE log_id = '$id' ");
		return $query;	
	}

	public function fetch_log(){
		$data = $this->db->query(" SELECT * FROM tbl_log ");
		return $data->result();
	}

}