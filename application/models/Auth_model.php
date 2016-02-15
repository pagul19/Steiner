<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}

	public function getUserData($username = False){

		if (!$username) {
			show_error("No Username given, Database Error", 404, "An error was encountered.");
		}

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user.username', $username);
		$query = $this->db->get();
		return $query->row_array();
	}
}
