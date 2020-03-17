<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Model extends CI_Model {

	public function fetch_firstname($username){
	
		$query = $this->db->query(" SELECT user_firstname FROM tbl_user WHERE username = '$username' ");
		return $query->result();
	}

	public function register_user($data)
	{
		$this->db->where("username",$data);
		$this->db->from("tbl_user");
		$query = $this->db->get();
		$valid_data = $query->num_rows();

		if($valid_data == 0)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5(hash('sha256',$this->input->post('password'))),
				'user_firstname' => $this->input->post('firstname'),
				'user_lastname' => $this->input->post('lastname'),
				'user_middlename' => $this->input->post('middlename')
			);
			
			$this->db->insert('tbl_user', $data);
			return "success";

		}
		else
		{
			$this->db->flush_cache();
			return "exists";
		}

	}
	
	public function get_user()
	{
		$users = $this->db->query(" SELECT * FROM tbl_user ");
		return $users->result();
	}

	public function validate_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->query(" SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' ");

		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
