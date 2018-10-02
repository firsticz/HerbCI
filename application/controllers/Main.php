<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('footer');
	}

	public function insertsymptom()
	{
		$this->load->view('header');
        $this->load->view('insertsypmtom');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
	}

	public function loout()
	{

	}
}
