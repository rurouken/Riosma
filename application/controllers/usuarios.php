<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$vista['subview'] = 'admin/registrarUsuarios';
		$this->load->view('dashboard', $vista);
	}

	public function registrar(){
		
	}
}