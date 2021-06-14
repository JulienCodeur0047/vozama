<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suiv_controller extends CI_Controller{

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	*/
	public function __construct() {
		parent::__construct(); 
		//$this->load->library('form_validation');
		$this->load->library('pdf');
		$this->load->model('poste/Poste_model','poste');
		$this->load->model('eleve/Eleve_model','eleve');
	}

	public function indexpr()
	{
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);    
		$this->load->view('suiv/suiv_list_parent');    
		$this->load->view('theme/footer');    
	}
	public function indexel()
	{
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);    
		$this->load->view('suiv/suiv_list_el_note');    
		$this->load->view('theme/footer');    
	}
	public function indexec()
	{
		$session['session'] = $this->session;

		$this->load->view('theme/header',$session);    
		$this->load->view('suiv/suiv_list_ecolage');    
		$this->load->view('theme/footer');    
	}
	public function indexmn()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session);    
		$this->load->view('suiv/suiv_list_moniteur');    
		$this->load->view('theme/footer');    
	}
}
