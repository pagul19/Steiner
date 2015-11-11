<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {



	public function index()
	{
		$data['title'] = "Homepage";

		$this->load->view('template/header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/footer', $data);
	}

	public function price()
	{
		$data['title'] = "Preise";

		$this->load->view('template/header', $data);
		$this->load->view('price', $data);
		$this->load->view('template/footer', $data);
	}
}