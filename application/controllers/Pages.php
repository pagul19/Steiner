<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	public function __construct() {
		parent::__construct();

	}


	public function index()
	{
		$data['title'] = "Homepage";
		$data['query'] = $this->ContentView->getContentByTitle($data['title']);

		$this->load->view('template/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('template/footer', $data);
	}

	public function price()
	{
		$data['title'] = "Preise";

		$this->load->view('template/header', $data);
		$this->load->view('pages/price', $data);
		$this->load->view('template/footer', $data);
	}

	public function impressum()
	{
		$data['title'] = "Impressum";

		$this->load->view('template/header', $data);
		$this->load->view('pages/impressum', $data);
		$this->load->view('template/footer', $data);
	}

	public function agb()
	{
		$data['title'] = "Allgemeinen Geschäfts Bedingungen";

		$this->load->view('template/header', $data);
		$this->load->view('pages/price', $data);
		$this->load->view('template/footer', $data);
	}
}