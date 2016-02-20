<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function __contruct(){
		parent::__contruct();
		$this->load->helper('date');
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

	public function setSession($quaryArray) {
		if ($quaryArray) {
			$sessData = array(
				'username' => $quaryArray['username'],
				'email' => $quaryArray['email'],
				'user_id' => $quaryArray['id'],
				'lastLogin' => $quaryArray['lastLogin'],
				'loggedIn' => TRUE
			);
			$this->Auth->updateLastLogin($quaryArray['id']);
			
			$this->session->set_userdata($sessData);
		}
	}

	public function loggedIn() {
		if (isset($_SESSION['user_id'])) {
			return $this->session->loggedIn;
		} else {
			return false;
		}
	}


	public function updatepassword($id = false, $newPwHash = false) {
		if ($newPassword && $id) {
			$this->db->where('id', $id);
			$result = $this->db->update('user', array('password' => $newPwHash));
			return $result;
		}
		return false;
	}


	public function updateLastLogin($id = false) {
		if ($id) {
			$this->db->where('id', $id);
			$result = $this->db->update('user', array('lastLogin' => 'NOW()'));
		}
	}

}
