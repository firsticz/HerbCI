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
        $this->load->view('index2');
	}

	public function insertgroup()
	{
		$this->load->view('header1');
        $this->load->view('insertgroup');
    }
    public function insertherb()
	{
		$this->load->view('header1');
        $this->load->view('insertherb');
    }
    public function insertsypmtom()
	{
		$this->load->view('header1');
        $this->load->view('insertsypmtom');
    }
    public function insertdrug()
	{
		$this->load->view('header1');
        $this->load->view('insertdrug');
	}

	public function login()
	{
		$this->load->view('header2');
		$this->load->view('login');
		// $this->load->view('script');
	}

    public function getherb()
	{
        $this->load->view('herb');
    }
    public function editherb($herbid,$name,$properties,$warning)
    {
        $property = explode(",", $properties);
        $warnings = explode(",", $warning);
        $data = array(
            'herbid' =>$herbid,
            'herbname' => $name,
            'properties' => $property,
            'warning' => $warnings
        );
        $this->load->view('editherbs', $data);
    }

    public function searchscore()
	{
        $this->load->view('header');
        $this->load->view('searchscore');
    }
    public function login2()
    {
        $this->load->view('login2');
    }
    public function getsymptomgroup()
	{
        $this->load->view('symptomgroup');
    }

    public function index2()
	{
        $this->load->view('index2');
    }
    
    public function index2login()
	{
        $this->load->view('index2login');
    }
    
    public function herbsearch2()
	{
        $this->load->view('herbsearch2');
    }
    
    public function drugsearch()
	{
        $this->load->view('drugsearch');
    }
    
    public function symptomsearch2()
	{
        $this->load->view('symptomsearch2');
	}


}
