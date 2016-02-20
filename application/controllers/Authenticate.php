<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index() {
		Authenticate::showForm();
	}

	public function showForm($message = "") {
		if ($this->Auth->loggedIn()) {
			redirect('/admin');
		}
		$data['title'] = "Login";
		$data['message'] = $message;

		$this->load->view('template/header', $data);
		$this->load->view('template/login', $data);
		$this->load->view('template/footer');
	}

	public function login() {

		if (!$this->input->post('username')){
			Authenticate::showForm("No Username given, Please enter a Username.");
		}

		$quary = $this->Auth->getUserData($this->input->post('username'));
		if (password_verify($this->input->post('password'), $quary['password'])){
			$this->Auth->setSession($quary);
			redirect('/admin');
		} else {
			Authenticate::showForm("Invalid Login attempt");
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/pages');
	}

	public function pw() {
		echo password_hash($this->input->get('pw'), PASSWORD_DEFAULT);
	}

	public function sesDe() {
		$this->session->sess_destroy();
	}

}