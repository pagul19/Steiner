<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function showForm($message = "") {
		$data['title'] = "Login";
		$data['message'] = $message;

		$this->load->view('template/header', $data);
		$this->load->view('template/login', $data);
		$this->load->view('template/footer');
	}

	public function login() {
		var_dump($this->input->post('username'));

		// if ($this->input->post('username')){

		// }

		// $quary = $this->Auth->getUserData($this->input->post('username'));
		// if (password_verify($this->input->post('password'), $quary['password'])){
		// 	redirect('/admin');
		// } else {
		// 	Authenticate::showForm("Invalid Login attempt");
		// }
	}

	public function logout() {

	}

}