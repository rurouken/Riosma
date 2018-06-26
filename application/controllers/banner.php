<?php

class banner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){

		$vista['subview'] = 'admin/banner';
		$this->load->view('dashboard', $vista);
	}

	
}