<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		Pages::view();
	}

	public function view($page = 'home') 
	{

		if ( !file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_error("The page you requested was not found.", 404, "Upps, das hat nicht geklappt.");
		}

		$data['title'] = ucfirst($page);
		$data['query'] = $this->ContentView->getContentByTitle($data['title']);

		$this->load->view('template/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer', $data);
	}

}