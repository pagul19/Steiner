<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

	}

	public function index() {
		if (!$this->Auth->loggedIn()) {
			show_error("Sorry you're not Authorized, please log in and try again!", 401, "Unauthorized!");
		} 
		Admin::showAdmin();
	}

	protected function showAdmin() {
		$data['title'] = "Admin &Uuml;bersicht";
		$this->load->view('template/header', $data);
		// $this->load->view('template/', $data);
		echo "*Admin Overview*";
		$this->load->view('template/footer', $data);
	}

}