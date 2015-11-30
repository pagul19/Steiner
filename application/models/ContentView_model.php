<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContentView_model extends CI_Model {

	public function __contruct(){
		parent::__contruct();
		$this->load->database();
	}


	public function getContentByTitle($title = False){

		if (!$title) {
			show_error("No Title found, Database Error", 404, "An error was encountered.");
		}
		$this->db->select('*');
		$this->db->from('page');
		$this->db->where('page.title', $title);
		$this->db->join('page_content', 'page.id = page_content.page_id', 'left');
		$this->db->join('content', 'page_content.content_id = content.id', 'left_outer');
		$query = $this->db->get();
		return $query->row_array();

	}

	public function insertContent(){

	}

	public function getContentById($id = False) {
		if (!$id) {
			show_error("No id set, Database Error", 404, "An error was encountered.");
		}
		$query = $this->db->get_where('page', array('id' => $id));
		return $query->row_array();
	}

	public function updateById($id) {

	}

}