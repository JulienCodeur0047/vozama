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
		$data['data'] = $this->suivi->getOrSearchEcolage();
		$data['eleve'] = $this->suivi->getSearchEleve();
		$this->getSession();        
		$this->load->view('suiv/suiv_list_ecolage',$data);    
		$this->load->view('theme/footer');    
	}
	public function indexmn()
	{
		$this->getSession();    
		$this->load->view('suiv/suiv_list_moniteur');    
		$this->load->view('theme/footer');    
	}

	public function indexdn()
	{
		$data['data'] = $this->suivi->getOrSearchNote();
		$this->getSession();    
		$this->load->view('suiv/suiv_list_detail_note',$data);    
		$this->load->view('theme/footer'); 
	}
	public function getSession()
	{
		$session['session'] = $this->session;
		$this->load->view('theme/header',$session); 
	}
	public function saveNote()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('note_trimestre_annee', 'note_trimestre_annee', 'required');
		$this->form_validation->set_rules('note_trimestre', 'note_trimestre', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('suivel'));
		}else{
			$this->suivi->saveOrUpdateNote();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('suivdn'));
		}
	}
	public function saveEcolage()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('eco_type', 'eco_type', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('suivec'));
		}else{
			$this->suivi->saveOrUpdateEcolage();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('suivec'));
		}
	}
}
