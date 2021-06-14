<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Com_controller extends CI_Controller{
	
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		

	}

	public function indexparr()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
		$this->load->view('com/com_list_parr');
		$this->load->view('theme/footer');
	}
	public function indexpart()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
		$this->load->view('com/com_list_partenair');
		$this->load->view('theme/footer');
	}
}
?>
