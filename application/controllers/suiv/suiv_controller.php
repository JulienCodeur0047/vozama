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
		$data['poste'] = $this->poste->getAllPoste();
		$this->getSession();        
		$this->load->view('suiv/suiv_list_el_note',$data);    
		$this->load->view('theme/footer');    
	}
	public function indexec()
	{
		$data['data'] = $this->suivi->getOrSearchEcolage();
		$data['eleve'] = $this->suivi->getSearchEleve();
		$data['poste'] = $this->poste->getAllPoste();
		$this->getSession();        
		$this->load->view('suiv/suiv_list_ecolage',$data);    
		$this->load->view('theme/footer');    
	}
	public function indexmn()
	{
		$data['data'] = $this->suivi->getOrSearchMoniteur();
		$data['poste'] = $this->poste->getAllPoste();
		$this->getSession();    
		$this->load->view('suiv/suiv_list_moniteur',$data);    
		$this->load->view('theme/footer');    
	}
	public function indexmoniteur()
	{
		$data['data'] = $this->suivi->getOrSearchMoniteur();
		$data['poste'] = $this->poste->getAllPoste();
		$this->getSession();    
		$this->load->view('suiv/suiv_list_mn',$data);    
		$this->load->view('theme/footer');    
	}

	public function indexdn()
	{
		$data['data'] = $this->suivi->getOrSearchNote();
		$data['poste'] = $this->poste->getAllPoste();
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
	public function saveMoniteur()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('moniteur_name', 'moniteur_name', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			echo "<script>alert('Ajout Error');</script>";
			redirect(base_url('suivmn'));
		}else{
			$this->suivi->saveOrUpdateMoniteur();
		   echo "<script>alert('Ajout Reussit');</script>";
		   redirect(base_url('suivmn'));
		}
	}
	public function saveEcolage()
	{
		$message = "";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('eco_type', 'eco_type', 'required');
		

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
			$message = "Veuillez saisir le Type d'ecolage";
			$success = " <script type=\"text/javascript\">document.location = \" ".base_url('suivec')."?message=".$message."&class=warning\";</script>";
			print $success;
		}else{
			$msg = $this->suivi->saveOrUpdateEcolage();
			$message = $msg;
			$success = " <script type=\"text/javascript\">document.location = \" ".base_url('suivec')."?message=".$message."&class=success\";</script>";
			print $success;
		}
	}
	public function deleteDn($id)
	{
		$this->suivi->deleteDn($id);
		redirect(base_url('suivdn'));
	}
	public function deleteMoniteur($id)
	{
		$this->suivi->deleteMoniteur($id);
		redirect(base_url('suivmn'));
	}
}
