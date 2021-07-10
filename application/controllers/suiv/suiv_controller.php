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
		$this->load->model('suiv/Suiv_model','suivi');
	}

	public function indexpr()
	{
		$this->getSession();        
		$this->load->view('suiv/suiv_list_parent');    
		$this->load->view('theme/footer');    
	}
	public function indexel()
	{
		$data['eleve'] = $this->eleve->getEleveOrSearchFilter();
		$this->getSession();        
		$this->load->view('suiv/suiv_list_el_note',$data);    
		$this->load->view('theme/footer');    
	}
	public function indexec()
	{
		$this->getSession();        
		$this->load->view('suiv/suiv_list_ecolage');    
		$this->load->view('theme/footer');    
	}
	public function indexmn()
	{
		$this->getSession();    
		$this->load->view('suiv/suiv_list_moniteur');    
		$this->load->view('theme/footer');    
	}

	public function getSession()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session); 
	}
	public function saveNote()
	{
		   $this->suivi->saveOrUpdateNote();
		   redirect(base_url('suivel'));
	}
	public function getNoteEleve($id)
	{
		return $data['data'] = $this->suivi->getNote($id);
	}
}
