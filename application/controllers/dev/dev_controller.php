<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dev_controller extends CI_Controller{
	
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		//$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
		$this->load->model('dev/DEv_model','dev');
		

	}
	
	public function userList(){
		// POST data
		$postData = $this->input->post();
	
		// Get data
		$data = $this->dev->getPoste($postData);
	
		echo json_encode($data);
	  }

	public function indexap(){
		$data['data'] = $this->dev->getDevOrSearchAp();
		$data['poste'] = $this->poste->getAllPoste();
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
		$this->load->view('dev/dev_list',$data);
		$this->load->view('theme/footer');
	}
	public function indexcmv()
	{
		$data['data'] = $this->dev->getDevOrSearchcmv();
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
		$this->load->view('dev/dev_list_cmv',$data);
		$this->load->view('theme/footer');
	}
	public function indexagr()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);
		$this->load->view('dev/dev_list_agr');
		$this->load->view('theme/footer');
	}


}
?>
