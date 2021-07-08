<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parent_controller extends CI_Controller{
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

	public function index()
	{
		$this->getSession();
		$this->load->view('parent/pare_list');
		$this->load->view('theme/footer');
	}
	public function getSession()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
		
	}
}
