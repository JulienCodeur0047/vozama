<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class En_controller extends CI_Controller{

	public function __construct() {
		parent::__construct();
	  
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('environnement/env_model','env');
	  }

	  public function index()
	  {
		  $this->getSession();
		  $this->load->view('entre/en_list_dep');
		  $this->load->view('theme/footer');

	  }
	  public function indexpers()
	  {
		$this->getSession();
		$this->load->view('entre/en_list_pers');
		$this->load->view('theme/footer');
	  }
	  public function indexcong()
	  {
		$this->getSession();
		$this->load->view('entre/en_list_cong');
		$this->load->view('theme/footer');
	  }
	  public function indexbien()
	  {
		$this->getSession();
		$this->load->view('entre/en_list_bien');
		$this->load->view('theme/footer');
	  }
	  public function getSession()
	  {
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);  
	  }
}
